<?php
include "../assets/objects/Manager.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/respons.css">

    <title>TourComparateur</title>

</head>

<body>


    <?php

    include "../partials/navbar.php";


    $manager->getOperatorByDestination();

    ?>
    <!-- 
.##.....##.########.####.##.......####..######.....###....########.########.##.....##.########.
.##.....##....##.....##..##........##..##....##...##.##......##....##.......##.....##.##.....##
.##.....##....##.....##..##........##..##........##...##.....##....##.......##.....##.##.....##
.##.....##....##.....##..##........##...######..##.....##....##....######...##.....##.########.
.##.....##....##.....##..##........##........##.#########....##....##.......##.....##.##...##..
.##.....##....##.....##..##........##..##....##.##.....##....##....##.......##.....##.##....##.
..#######.....##....####.########.####..######..##.....##....##....########..#######..##.....##

 -->


    <?php
    foreach ($manager->getOperatorByDestination() as $Destination) {


        $manager->getRate($Destination['id_tour_operator']);


        echo '<br>
         <div class="card border-primary text-center afficheTo1" >';

        if ($Destination['is_premium'] == 1) {
            echo '<a href="' . $Destination['link'] . '" ><h3 class="TO_link">' . $Destination['name'] . '</h3></a>';
        } else {
            echo '<h3>' . $Destination['name'] . '</h3>';
        }
        echo '<div class="grade">';
        if ($Destination['grade'] == 0) { } else {
            for ($i = 0; $i < $Destination['grade']; $i++) {
                echo '<i class="fas fa-star"></i>  ';
            }
        }
        echo '</div>
        <div class="info_dest">
            <img class="destimg" src="' . $Destination['pathImg'] . '">
             <h5 class="card-title ">Ville : ' . $Destination['ville'] . '
             </h5>
             <h5 class="card-title ">Pays : ' . $Destination['location'] . '
             </h5>
             <p class="card-text0 ">A decouvrir !!!</p>
             <p class="card-text1 "><small class="text-muted">PRIX : ' . $Destination['price'] . ' € </small></p>
             <p class="card-text1 "><small class="text-muted"> Vol et hôtel pour 7 Nuits inclus . </small></p>
             <hr></hr>
             <p class="card-text3 "><small class="text-center"> Laissez votre avis : </small></p>
 
             <div class="review">';

        foreach ($manager->getReview($Destination['id_tour_operator']) as $key) {
            echo "<hr>" . $key['author'] . ':' . $key['message'] . '<br><hr>';
        }

        echo '</div> <div class="createReviews">
            <form action="traitement/traitement_review.php" method="post">
            <input type="text" name="author" placeholder="name" maxlength="20"  required>
            <input type="text" name="message" placeholder="message" maxlength="90" required>
            <input type="hidden" name="id_TO" value="' . $Destination['id_tour_operator'] . '">
            <input type="hidden" name="ville" value="' . $Destination['ville'] . '">
            <div class="rating">
            <span title="five stars" data-num="5" class="five stars">&#9734;</span>
            <span title="four stars" data-num="4" class="four stars"  >&#9734;</span>
            <span title="three stars" data-num="3" class="three stars" >&#9734;</span>
            <span title="two stars" data-num="2" class="two stars">&#9734;</span>
            <span title="one stars" data-num="1" class="one stars" >&#9734;</span>
        </div>
        <input type="hidden" class="starsR" name="rate" value="0">
            <input type="submit" value="Envoyer">
            </form>
            <br>
            </div>
       </div>
             </div>
             

             ';
    }
    include "../partials/footer.php";

    ?>
    </div>
    </div>
    <!-- 

....###....########..##.....##.####.##....##
...##.##...##.....##.###...###..##..###...##
..##...##..##.....##.####.####..##..####..##
.##.....##.##.....##.##.###.##..##..##.##.##
.#########.##.....##.##.....##..##..##..####
.##.....##.##.....##.##.....##..##..##...###
.##.....##.########..##.....##.####.##....## 
-->


    <!-- Optional JavaScript -->
    <script src="../assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/012713513c.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>