<?php
session_start();
	require_once("../model/client.php");
	if($_POST["bouton"] == "Se connecter") {
		if(isset($_POST["pseudoe"]) and isset($_POST["mdpe"])) {
			extract($_POST);
			$eleve = new Client();
$liste_eleve = $eleve->read_by_pseudo($pseudoe);
			$mot_de_passe = $liste_eleve[0]["MDPE"];
			if($mdpe==$mot_de_passe) {
				$_SESSION["ide"] = $liste_eleve[0]["IDE"];
				$_SESSION["membres_connecte"] = $liste_eleve[0]["PSEUDOE"];
				header("Location: ../view/liste_film.php");
             exit;
			}
            else {
				//header("Location: ../view/inscription.php");
                echo "mot de passe incorrect ou identifiant";
				exit;
			}
		}
         else 
        {
			header("Location: ../view/inscription.php");
		}
    }
	// inscription
	if($_POST["bouton"] == "S'inscrire") {
		header("Location: ../view/add_client.php");
	}

	
?>