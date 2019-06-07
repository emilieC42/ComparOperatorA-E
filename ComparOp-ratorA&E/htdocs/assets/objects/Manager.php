<?php
$PATH = $_SERVER['DOCUMENT_ROOT'];
include $PATH . "/assets/bdd/connexion.php";
class Manager
{

    private $bdd;


    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }
    public function bdd()
    {
        return $this->bdd;
    }

    public function getAllDestination()
    {

        $selectDestDi = $this->bdd->query('SELECT * FROM destinations WHERE id_tour_operator = 9999');


        $selectDestDo = $selectDestDi->fetchAll();

        return $selectDestDo;
    }

    public function getOperatorByDestination()
    {
        $selectDestDiP = $this->bdd->prepare('SELECT * FROM destinations INNER JOIN tour_operators ON destinations.id_tour_operator = tour_operators.id WHERE destinations.ville = ? AND destinations.id_tour_operator <> 9999 AND tour_operators.is_premium = 1');
        $selectDestDiP->execute(array($_GET['ville']));
        $selectDestDoP = $selectDestDiP->fetchAll();

        $selectDestDi = $this->bdd->prepare('SELECT * FROM destinations INNER JOIN tour_operators ON destinations.id_tour_operator = tour_operators.id WHERE destinations.ville = ? AND destinations.id_tour_operator <> 9999');
        $selectDestDi->execute(array($_GET['ville']));
        $selectDestDo = $selectDestDi->fetchAll();
        return $selectDestDo;
    }



    public function getRate($id)
    {
        $GetRate = $this->bdd->prepare('SELECT AVG(vote) FROM reviews INNER JOIN tour_operators ON reviews.id_tour_operator = tour_operators.id WHERE tour_operators.id = ? LIMIT 10');
        $GetRate->execute(array(
            $id
        ));
        $Rate = $GetRate->fetch();
        foreach ($Rate as $key) {
            $RateR = $key;
            break;
        }

        $RateR = intval($RateR);

        $SetGrade = $this->bdd->prepare('UPDATE tour_operators SET grade = ? WHERE id = ?');
        $SetGrade->execute(array(
            $RateR,
            $id
        ));
    }


    public function createReviews()
    {

        $createReview = $this->bdd->prepare('INSERT INTO reviews (message,author,id_tour_operator,vote) VALUES(?,?,?,?)');
        $createReview->execute(array(
            $_POST['message'],
            $_POST['author'],
            $_POST['id_TO'],
            $_POST['rate']
        ));
        header('location:../affiche_TO.php?ville=' . $_POST['ville']);
    }

    public function getReview($id)
    {
        $selectReview = $this->bdd->prepare('SELECT * FROM reviews INNER JOIN tour_operators ON reviews.id_tour_operator = tour_operators.id WHERE tour_operators.id = ? LIMIT 100');
        $selectReview->execute(array(
            $id
        ));
        $selectReviews = $selectReview->fetchAll();
        return $selectReviews;
    }

    public function getAllOperator()
    { }

    public function updateOperatorToPremium()
    {
        $updateTO = $this->bdd->prepare('UPDATE tour_operators SET is_premium = 1 WHERE id = ?');
        $selectTO = $this->bdd->prepare('SELECT * FROM tour_operators WHERE id = ?');
        $_POST['id_TO'] = intval($_POST['id_TO']);

        $selectTO->execute(array($_POST['id_TO']));

        $selectTOD = $selectTO->fetch();

        if ($selectTOD['is_premium'] == 1) {
            header('location:../home.php?erreur=400');
        } else {
            $updateTO->execute(array($_POST['id_TO']));
            header('location:../../pages/home.php?info=premium');
        }
    }

    public function createTourOperator()
    {


        $addTo = $this->bdd->prepare('INSERT INTO tour_operators (name,link) VALUES(?,?)');

        $selectTO = $this->bdd->prepare('SELECT * FROM tour_operators WHERE name = ?');


        $selectTO->execute(array($_POST['nameTO']));

        $selectTOD = $selectTO->fetch();




        if ($_POST['nameTO'] == $selectTOD['name']) {
            header('location:../home.php?erreur=200');
        } else {


            $addTo->execute(array(
                $_POST['nameTO'],
                $_POST['linkTO'],
            ));

            header('location:../../pages/home.php?info=createdTO');
        }
    }
    public function uploadImageDest($img)
    {
        $pathImgBase = '/assets/img/upload/';
        $target_file = "../.." . $pathImgBase . basename($img["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



        if (file_exists($target_file)) {

            $uploadOk = 0;
        }

        if ($img["size"] > 500000) {

            $uploadOk = 0;
        }

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {

            $uploadOk = 0;
        }

        if ($uploadOk == 0) { } else {
            if (move_uploaded_file($img["tmp_name"], $target_file)) { }
        }
        return $target_file;
    }
    public function createDestination($img)
    {
        $_POST['price'] = intval($_POST['price']);
        $_POST['id_TO'] = intval($_POST['id_TO']);

        $adddest = $this->bdd->prepare('INSERT INTO destinations (location, price , id_tour_operator,ville,pathImg) VALUES(? , ? , ? , ? , ?) ');

        $selectdest = $this->bdd->prepare('SELECT * FROM destinations WHERE ville = ?');
        $selectdestFam = $this->bdd->prepare('SELECT * FROM destinations WHERE id_tour_operator = 9999 AND ville = ?');
        $adddestFam = $this->bdd->prepare('INSERT INTO destinations (location, price , id_tour_operator,ville,pathImg) VALUES(? , ? , ? , ? , ?)');




        $selectdest->execute(array($_POST['ville']));

        $selectdestD = $selectdest->fetch();


        if ($_POST['id_TO'] == $selectdestD['id_tour_operator'] && $_POST['ville'] == $selectdestD['ville'] || $_POST['price'] >= 10000) {
            header('location:../home.php?erreur=500');
        } else {
            $this->uploadImageDest($img);
            $adddest->execute(array(
                $_POST['pays'],
                $_POST['price'],
                $_POST['id_TO'],
                $_POST['ville'],
                $this->uploadImageDest($img)

            ));
            $selectdestFam->execute(array(
                $_POST['ville']
            ));
            $selectdestDFam = $selectdestFam->fetch();

            if ($selectdestDFam['ville'] == $_POST['ville']) {
                header('location:../../pages/home.php?info=createdDEST');
            } else {
                $adddestFam->execute(array(
                    $_POST['pays'],
                    $_POST['price'],
                    9999,
                    $_POST['ville'],
                    $this->uploadImageDest($img)

                ));
                header('location:../../pages/home.php?info=createdDEST');
            }
        }
    }
}
$manager = new Manager($bdd);
