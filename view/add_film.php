<?php 
require_once "header.php";
$title="Ajouter une film";
?>

<div class="container h-100">

<h1 class="text-center text-danger"> Ajouter une film</h1><hr class="col-4">

<!---formulaire-->
<form  action="../controller/add_film_controller.php" class="jumbotron" method="POST"><br>
  <div class="form-group">
      <div class="row">
          <div class="col-lg-3">

          <label >TITRE</label>
    <input type="text" class="form-control" placeholder="" name="titre">
          </div>

          <div class="col-lg-3">
          <label >GENRE</label>
    <input type="text" class="form-control" placeholder="" name="genre">
          </div>

          <div class="col-lg-3">

          <label >AUTEUR</label>
    <input type="text" class="form-control" placeholder="" name="auteur">
          </div>
          <div class="col-lg-3">

          <label >Anne de sortie</label>
    <input type="date" class="form-control" placeholder="" name="annee_sortie">
          </div>
          <div class="col-lg-3">
            
          <label >IMAGE</label>
    <input type="file" class="form-control" placeholder="" name="image_film">
          </div>
               </div>
<!--fin formulaire-->

<!---bouton d enregistrement--->
<button class="btn btn-info btn-lg activ float-right " name="ajouter">ajouter</button>

</div>

<br>
</form>
</div>
