<?php
if (isset($_SESSION['admin'])) {
    echo'
    <nav class="navbar sticky-top navbar-light bg-light">
        <img src="../assets/img/logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
            <a class=" titre" href="../pages/home.php">ComparOpérator</a>
            
            <div class="dropdown">
            <button class="btn btn-secondary admin dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ADMIN
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="ajouts_TO.php">AJOUTS TO</a>
              <a class="dropdown-item" href="ajouts_destination_TO.php">AJOUTS DEST TO</a>
              <a class="dropdown-item" href="TO_premium.php">TO PREMIUM</a>
            </div>
          </div>
          </nav>
';
}
else {
   echo' 
   <nav class="navbar sticky-top navbar-light bg-light">
        <img src="../assets/img/logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
            <a class="titre" href="../pages/home.php">ComparOpérator</a>
    </nav>';

}