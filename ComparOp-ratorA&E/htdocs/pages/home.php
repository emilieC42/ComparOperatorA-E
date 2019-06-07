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

    if (isset($_GET['erreur'])) {
        if ($_GET['erreur'] == "200") {
            $erreur = " ce Tour Operators exite deja!";
        } else if ($_GET['erreur'] == "500") {
            $erreur = " cette deestination exite deja ou le prix est trop élever!";
        }
        echo '<div class="isa_error">
    <i class="fa fa-info-circle"></i>
    ' . $erreur . '
</div>';
    }
    if (isset($_GET['info'])) {
        if ($_GET['info'] == 'createdTO') {
            $TOinfo = 'Tour operateur créer!';
        } else if ($_GET['info'] == 'createdDEST') {
            $TOinfo = 'destination créer!';
        } else if ($_GET['info'] == 'premium') {
            $TOinfo = 'tour operators est passé premium';
        }
        echo '<div class="isa_success">
   <i class="fas fa-check"></i>
   ' . $TOinfo . '
</div>';
    }


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

    foreach ($manager->getAllDestination() as $Destination) {


        echo ' 
            <style>
@media screen and (max-width: 1040px) {
    .hover' . $Destination['id'] . '{
        background:url("' . $Destination['pathImg'] . '");
        background-size:100vw;
        margin-top:30px;
        width:50vw;
        height:70vh;

      
    }
  
   
    .hover_info{
        background-color: rgba(0, 255, 179, 0.568)
        opacity:1;
        width:50vw;
        height:70vh;
        transition:400ms all linear;
     
    }
   
}

.hover' . $Destination['id'] . '{
    background:url("' . $Destination['pathImg'] . '");
    background-size:80vw;
    margin-top:30px;
    width:50vw;
    height:70vh;

    transition:400ms all linear;
 
}

.hover' . $Destination['id'] . ':hover{
    background:url("' . $Destination['pathImg'] . '");
    background-size:70vw;
    width:50vw;
    height:70vh !important;
    font-size:5vw;

}
.hover_info{
    opacity:0;
    width:50vw;
    height:70vh;
    transition:400ms all linear;
 
}
.hover' . $Destination['id'] . ':hover .hover_info{
    opacity:1;
    background-color: rgba(255, 255, 255, 0.568);
    width:50vw;
    height:70vh;
}
           
            </style>
            <a href="affiche_TO.php?ville=' . $Destination['ville'] . '">
            <div class="card border-primary text-center hover' . $Destination['id'] . '" >
              
            
            <div class="hover_info " >
         
            <h5 class="card-title2 ">' . $Destination['ville'] . '
            </h5>   
            </h5>
            <h5 class="card-title2 ">' . $Destination['location'] . '
            </h5>
            <div class="containt-hr">
            <div class="hr_card"></div>
            <div class="hr_card-collum"></div>

            <p class="card-text1 price "><small class="text-darkss">A PARTIR DE : ' . $Destination['price'] . ' € </small></p>
            <div class="hr_card-collum-2"></div>

            <div class="hr_card"></div>
            </div>
            </div>
            </div>
            </a>

            ';
    }

    include "../partials/footer.php";
    ?>
    <!-- 

....###....########..##.....##.####.##....##
...##.##...##.....##.###...###..##..###...##
..##...##..##.....##.####.####..##..####..##
.##.....##.##.....##.##.###.##..##..##.##.##
.#########.##.....##.##.....##..##..##..####
.##.....##.##.....##.##.....##..##..##...###
.##.....##.########..##.....##.####.##....## 
            <img class="destimg" src="' . $Destination['pathImg'] . '"  alt="' . $Destination['location'] . "," . $Destination['ville'] . ' "image">

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