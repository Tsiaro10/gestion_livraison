<?php 
  require_once "../model/emprunter.php";
if(isset($_POST["confirmer"])){
    extract ($_POST);

    $date = date("Y-m-d");
    $heure = date("H:i:s");

    $emprunt = new Emprunter();
    $emprunt->setIde($client_id);
    $emprunt->setId_film($film_id);
    $emprunt->setDate_emprunt($date);
    $emprunt->setHeure_emprunt($heure);
    $emprunt->setDate_retour($date_retour);
    $emprunt->create();
    echo "succe";
}
else{
    echo "faux";
}
?>