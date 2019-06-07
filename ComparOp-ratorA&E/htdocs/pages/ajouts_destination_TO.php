<?php
include '../assets/objects/Manager.php';
include "../partials/navbar.php";


$ToList = $bdd->query('SELECT * FROM tour_operators WHERE id NOT IN (9999)');

$TolistD = $ToList->fetchAll();


if (!isset($_SESSION['admin'])) {
    header('location:home.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="../assets/css/style.css">
        <title>Document</title>
    </head>

    <body>
        <form action="traitement/ajoutsdestination.php" class="form_dest" enctype="multipart/form-data" method="post">
            <input name="pays" placeholder="pays">
            <input name="price" placeholder="price">
            <input name="ville" placeholder="ville">
           
            <input name="imgdest" type="file" accept="image/png, image/jpeg" placeholder="image du lieux">
            
            <select name="id_TO" id="">
                <?php
                foreach ($TolistD as $key) {
                    echo '<option value="' . $key['id'] . '">' . $key['name'] . '</option>';
                }


                ?>

            </select>
            <input type="submit" name="submit" value="submit">
        </form>
        <script src="../assets/js/main.js"></script>
        <script src="https://kit.fontawesome.com/012713513c.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

    </html>


<?php

}
