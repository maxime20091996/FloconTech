<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
  <h1 class="logo-right hidden-xs margin-bottom-60">Immobilier</h1>
  <div class="tm-right-inner-container">
    <article class="templatemo-item">
      <center><h1 class="templatemo-header">Appartement Classique</h1></center>
      <div class="col-sm-12">
      <a href="images/appart1.jpg" class="zoombox zgallery1"><img src="images/appart1.jpg" alt="Gutman Island" class="img-thumbnail"></a><br>
      <a href="images/cuisine/cuisine1.jpg" class="zoombox zgallery1"><img width="75px" src="images/cuisine/cuisine1.jpg" alt="Gutman Island" class="img-thumbnail"></a>
      <a href="images/chambre/chambre1.jpg" class="zoombox zgallery1"><img width="75px" src="images/chambre/chambre1.jpg" alt="Gutman Island" class="img-thumbnail"></a>
      <a href="images/appart1.jpg" class="zoombox zgallery1"><img width="75px" src="images/appart1.jpg" alt="Gutman Island" class="img-thumbnail"></a>
    </div>
    <p>Luxueux appartement de 120m2, classé 4 *, idéalement situé au cœur de la ville, orienté plein sud.<br>Avec 2 chambres, 1 salle de bain, il permet d’accueillir jusqu’à 5 personnes</p>
    <ul>
      <li><i class="fa fa-check fa-medium"></i>Le vaste séjour est agrémenté d’un généreux balcon et offre tout le confort d’un quatre étoiles</li>
      <li><i class="fa fa-check fa-medium"></i>Fonctionnelle, luxueuse et ouverte sur le séjour salle à manger, la toute dernière cuisine Bulthaup Model B3 offre toutes les commodités. </li>
      <li><i class="fa fa-check fa-medium"></i>Attenante au salon, cette chambre avec balcon plein sud jouit d’une superbe vue. Elle possède sa propre salle de bain avec baignoire et WC privatifs.<br></li>

    </ul>
      <a href="index.php?p=products.php" class="btn btn-warning">Retour</a>
      <a href="index.php?p=contact.php" class="btn btn-warning">Contacter l'agence</a>
    </article><hr>
      <?php
      if(isset($_SESSION['connecte']) && $_SESSION['connecte'] == true){
        ?>
      <p>Connecté</p>
      <?php
          
      }else{
          ?>
     Déconnecté
      <?php
      }
      
      
      ?>