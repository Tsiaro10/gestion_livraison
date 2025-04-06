<?php
session_start();
if(!isset($_SESSION["ide"])) {
  header("Location: inscription.php");
  exit; 
}
if (isset($_POST["retour"])) {
    extract ($_POST);
         
        require_once("../model/emprunter.php");
        $emprunt = new Emprunter();
        $emprunt->deleteEmprunt($film_id, $etudiant_id); 
       // header ("location: ../view/liste_livre_emprunter.php");
        echo $film_id;
        echo $etudiant_id;
        
       
        exit();
    }?> 


