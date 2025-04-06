<?php
require_once "connexion_base.php";

class Film{
    private $id_film;
    private $titre;
    private $genre;
    private $image_film;
    private  $auteur;
    private $annee_sortie;
    private $date_depot;
    private $heure_depot;
    private $connex;

    public function __construct(){
        $this->id_film=0;
        $this->titre="";
        $this->genre="";
        $this->image_film=null;
        $this->auteur="";
        $this->annee_sortie=null;
        $this->date_depot=null;
        $this->heure_depot=null;
        $this->connex = Connexion::getConnexion(); 
    }
     // Getters
     public function getId_film(){
        return $this->id_film;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getImage_film(){
        return $this->image_film;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getAnnee_dortie(){
        return $this->annee_sortie;
    }

    public function getDate_depot(){
        return $this->date_depot;
    }

    public function getHeure_depot(){
        return $this->heure_depot;
    }

    // Setters
    public function setId_film($id){
        $this->id_film = $id;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function setImage_film($image_film){
        $this->image_film = $image_film;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }

    public function setAnnee_sortie($annee_sortie){
        $this->annee_sortie = $annee_sortie;
    }

    public function setDate_depot($date_depot){
        $this->date_depot = $date_depot;
    }

    public function setHeure_depot($heure_depot){
        $this->heure_depot = $heure_depot;
    }
    // create
    public function create() {
        $requete = "INSERT INTO Film  VALUES (null ,:titre, :genre, :image_film, :auteur, :annee_sortie, :date_depot, :heure_depot)";
        $statement = $this->connex->prepare($requete);
        $statement->execute(array(
            'titre' => $this->titre,
            'genre' => $this->genre,
            'image_film' => $this->image_film,
            'auteur' => $this->auteur,
            'annee_sortie' => $this->annee_sortie,
            'date_depot' => $this->date_depot,
            'heure_depot' => $this->heure_depot
        ));
    }
     // read
     public function read() {
        $requete = "SELECT * FROM Film";
        $statement = $this->connex->query($requete);
        $produits = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $produits;
    }
    public function delete(){
        $requete = "DELETE FROM Film WHERE id_film=:id_film";
        $etat = $connex->prepare($requete);
        $etat->execute(array(
            "id_film" => $this->getId_film()
        ));
        $etat->closeCursor();
    }
}
