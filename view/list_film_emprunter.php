<?php 
$title="Emprunter";
require_once("header2.php");
require_once("../model/emprunter.php");
require_once("../model/client.php");
require_once("../model/film.php");
session_start();
if(!isset($_SESSION["ide"])) {
    header("Location: inscription.php");
    exit; 
}

$etudiant_id = $_SESSION['ide']; 

//  emprunter
$emprunt = new Emprunter();
$liste_emprunt = $emprunt->getEmpruntsByEtudiant($etudiant_id);

//  livres
$livre = new Film();
$liste_livres = $livre->read(); 

?>

<div class="container jumbotron">
<h2 class="text-center text-danger"><u>FILM DÉJÀ EMPRUNTÉS</u></h2>
<a href="liste_film.php" class="btn btn-info btn-small"><i class="fa fa-arrow-circle-o-left"></i> Retour</a><br><br>
<table class="table table-bordered ">
    <thead>
        <tr> 
            <th>Titre</th>
            <th>Date d'emprunt</th>
            <th>Date de retour</th>
            <th>Auteur</th>
            <th>GENRE</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_emprunt as $emprunt_item) : ?>
            <tr>
               
                <td>
                    <?php 

                    //  nom du livre 

                    foreach ($liste_livres as $livre) {
                        if ($livre["ID_FILM"] == $emprunt_item["ID_FILM"]) {
                            echo $livre["TITRE"];
                            break;
                        }
                    }
                    ?>
                </td>
                <td><?php echo $emprunt_item["DATE_EMPRUNT"]; ?></td>
                <td><?php echo $emprunt_item["DATE_RETOUR"]; ?></td>
                <td><?php echo $livre["AUTEUR"]; ?></td>
                <td><?php echo $livre["GENRE"]; ?></td>
                <td>

                    <!--  bouton de retour -->
                    <form action="../controller/retour_control.php" method="POST">
                

                        <!-- Champ caché  -->
                        
                        <input type="hidden" name="film_id" value="<?php echo $emprunt_item["ID_FILM"]; ?>">   
                        <input type="hidden" name="etudiant_id" value="<?php echo $emprunt_item["IDE"]; ?>">

                        <!-- Bouton de retour -->
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
