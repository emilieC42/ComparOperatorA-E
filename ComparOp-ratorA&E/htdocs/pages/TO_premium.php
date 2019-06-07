<?php
include '../assets/objects/Manager.php';
include "../partials/navbar.php";


$ToList = $bdd->query('SELECT * FROM tour_operators WHERE is_premium != 1');

$TolistD = $ToList->fetchAll();


if (!isset($_SESSION['admin'])) {
    header('location:home.php');
}
else {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
            <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    </head>
    <body>
        <form action="traitement/updateTO.php" class="form_premium" method="post">
            <select name="id_TO" class='selectTO'>
    <?php
    foreach ($TolistD as $key) {
      echo '<option class="optionTO" value="'.$key['id'].'">'.$key['name'].'</option>';
    }

?>

            </select>
            <input type="submit" value="submit" >
        </form>
        <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/012713513c.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    </body>
    </html>

    
    <?php
}