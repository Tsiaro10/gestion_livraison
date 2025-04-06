<?php
require_once ("../model/film.php");
if(isset($_POST["ajouter"])){
            if(!empty($_POST["titre"]) and !empty($_POST["genre"]) and !empty($_POST["auteur"]) and !empty($_POST["image_film"]) and !empty($_POST["annee_sortie"])) {

        extract ($_POST);
        $date = date("Y-m-d");
        $heure = date("H:i:s");
        
        $film = new Film();
        $film->setTitre($titre);
        $film->setGenre($genre);
        $film->setImage_film($image_film);
        $film->setAuteur($auteur);
        $film->setAnnee_sortie($annee_sortie);
        $film->setDate_depot($date);
        $film->setHeure_depot($heure);
        $film->create();
        header("location: ../view/intereface_admine.php");
        // exit;

            }
            else{
                echo "veuiller remplir";
                exit;
            }
}
else{
    echo "erreur";
    exit;
}
?>