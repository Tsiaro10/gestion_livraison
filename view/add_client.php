<?php 
$title="Inscription client";
require_once "header.php";
?>

<div class="container h-100">

<h1 class="text-center text-danger">Entrer les informations </h1><hr class="col-4">

<!---formulaire-->
<form  action="../controller/client_control.php" class="jumbotron" method="POST"><br>
<h2 class="text-left text-danger"> Ajouter une nouvelle client</h2><hr class="col-4">
  <div class="form-group">
      <div class="row">
          <div class="col-lg-6">
          <label >Nom :</label>
    <input type="text" class="form-control" placeholder="" name="nome">
          </div>

          <div class="col-lg-6">
          <label >Prenom:</label>
    <input type="text" class="form-control" placeholder="" name="prenome">
          </div>
          <div class="col-lg-6">
          <label >Date de naissance:</label>
    <input type="date" class="form-control" placeholder="" name="agee">
          </div>
          <div class="col-lg-6">
          <label >Niveau:</label>
    <input type="tel" class="form-control" placeholder="" name="niveaue">
          </div>
          <div class="col-lg-6">
          <label >Adresse</label>
    <input type="text" class="form-control" placeholder="" name="adressee">
          </div>
          <div class="col-lg-6">
          <label >Numero:</label>
    <input type="tel" class="form-control" placeholder="" name="nume">
          </div>
          <div class="col-lg-6">
          <label >Photo d'identite:</label>
    <input type="file" class="form-control" placeholder="" name="photoe">
          </div>
               
               <!---compte de connexion----->
               <div class="col-lg-12"><h2 class="text-left text-danger">Votre compte de connexion</h2><hr class="col-4"><br></div>
 <div class="col-lg-6">
          <label >Pseudo:</label>
    <input type="text" class="form-control" placeholder="" name="pseudoe">
          </div>
          <div class="col-lg-6">
          <label >Mot de Passe:</label>
    <input type="password" class="form-control" placeholder="" name="mdpe">
          </div>
          <div class="col-lg-6">
          <label >confirmer votre mot de passe:</label>
    <input type="password" class="form-control" placeholder="" name="confirm_mdpe">
          </div>
          <!-- fin -compte de connexion----->
               </div><br><br>
<!--fin formulaire-->

<!---bouton d enregistrement--->
<button class="btn btn-info btn-lg activ float-right " name="ajoutet">Enregistrer</button>
<button class="btn btn-info btn-lg activ float-right " name="">Voir liste</button>
</div>

<br>
</form>
</div>
