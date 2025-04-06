<?php 


session_start();

require_once("../model/client.php");

$title="PRODUIT";
require_once ("header.php");
$title="Page | Produit";

require_once "../model/film.php";
$film = new Film();
$liste_film = $film->read();



?>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<div id="shell">
   <!-- HEADER--->
   <div class="header">
   <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><H2>LOCATION<H2 class="text-warning">FILM</H2></H2></a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-warning active" href="#portfolio">HOME</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-warning" href="liste_emprunt.php">notifications</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-warning" href="add_film.php">Ajouter une film</a></li>
                    </ul>
                </div>
            </div>
        </nav></div>
        <!--  END HEADER--->
      <div class="distance"></div>

    <div class="container">
        <div class="row">
            <?php  foreach ($liste_film as $film){
                ?>
                <br>
            <div class="col-lg-6">
                <div class="col-lg-12"><h2>TITRE: <u class="text-warning"><?php echo $film["TITRE"]; ?></u></h2></div><br>
                <div class="col-lg-12"><img src="img/<?php echo $film["IMAGE_FILM"]; ?>" alt="" class="movie-image">
            </div>
            <br>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#deposer_<?php echo $film['ID_FILM'];?>">Supprimer</button><br><br>
                    <div class="col-lg-12"><br></div>
               <br> 
                
            </div>

            <?php
             }
            ?>
        </div>
    </div>

    
 <!------------------------------=================deposer===================------------------------------------------------------------------>
                 <!-- add book---->
                 <div class="col-lg-12">
                <!-- Modal -->
                <?php foreach($liste_film as $p) { ?>
<div class="modal fade" id="deposer_<?php echo $p['ID_FILM'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

                 <div class="modal-body">

      
                                    <form action="../controller/emprunt_supprimer.php" method="POST">
                                                        <!-- Champs cachés pour les informations du livre -->
                                                        <input type="hidden" name="film_id" value="<?php echo $p["ID_FILM"]; ?>">
                                                        <H1 class="text-danger">VOUS VOULEZ SUPPRIMER</H1>

                                    <br>

                                                        <!-- Bouton de réservation -->
                                                        <button type="submit" class="btn-center btn-primary" name="confirmer">confirmer</button>
                                    </form>
                </div>
    </div>
  </div>
</div>
               
    </div>
    <div class="col-lg-9"></div><br>
    
<div>
 
    </div>
    
          </div><!----end bouton--->
         
          <?php } ?>