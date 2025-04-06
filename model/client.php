<?php 
//connexion base de donnee
require_once("connexion_base.php");
class Client{
    private $ide;
    private $nome;
    private $prenome;
    private $agee;
    private $niveaue;
    private $adressee;
    private $numee;
    private $mdpe;
    private $pseudoe;
    private $photoe;
    //constructeur
    public function __construct(){
        $this->ide=0;
        $this->nome="";
        $this->prenome="";
        $this->agee=0;
        $this->niveaue="";
        $this->adressee=null;
        $this->nume=0;
        $this->mdpe=null;
        $this->pseudoe="";
        $this->photoe=null;
        $this->connex=Connexion::getConnexion();
    }
    //geteur
    public function getIde(){
        return $this->ide;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPrenome(){
        return $this->prenome;
    }
    public function getAgee(){
        return $this->agee;
    }
    public function getNiveaue(){
        return $this->niveaue;
    }
    public function getAdressee(){
        return $this->adressee;
    }
    public function getNume(){
        return $this->nume;
    }
    public function getMdpe(){
        return $this->mdpe;

    }
    public function getPseudoe(){
        return $this->pseudoe;
    }
    public function getPhotoe(){
        return $this->photoe;
    }
    //seteur
    public function setIde($e_ide){
        $this->ide=$e_ide;
    }
    public function setNome($e_nome){
        $this->nome=$e_nome;
    }
    public function setPrenome($e_prenome){
        $this->prenome=$e_prenome;
    }
    public function setAgee($e_agee){
        $this->agee=$e_agee;
    }
    public function setNiveaue($e_niveaue){
        $this->niveaue=$e_niveaue;
    }
    public function setAdressee($e_adressee){
        $this->adressee=$e_adressee;
    }
    public function setNume($e_nume){
        $this->nume=$e_nume;
    }
    public function setMdpe($e_mdpe){
        $this->mdpe=$e_mdpe;
    }
    public function setPseudoe($e_pseudoe){
        $this->pseudoe=$e_pseudoe;
    }
    public function setPhotoe($e_photoe){
        $this->photoe=$e_photoe;
    }
    //create
    
    public function create() {
        $requete = "INSERT INTO Client VALUES(null, :nome, :prenome, :agee, :niveaue, :adressee, :nume, :mdpe, :pseudoe, :photoe)";
        $etat = $this->connex->prepare($requete);
        $etat->execute(array(

            "nome" => $this->getNome(),          
            "prenome" => $this->getPrenome(),
            "agee" => $this->getAgee(),
            "niveaue" => $this->getNiveaue(),
            "adressee" => $this->getAdressee(),
            "nume" => $this->getNume(),
            "mdpe" =>$this->getMdpe(),
            "pseudoe" => $this->getPseudoe(),
            "photoe" => $this->getPhotoe(),
        ));
        $etat->closeCursor();
    }
    //read
    public function read() {
        $requete = "SELECT * FROM Client";
        $etat = $this->connex->prepare($requete);
        $etat->execute();
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
    //read by mdpe
    public function read_by_pseudo($pseudoe){
        $requete = "SELECT * FROM Client WHERE pseudoe=:pseudoe";
        $etat = $this->connex->prepare($requete);
        $etat->execute(array(
            "pseudoe" =>$pseudoe
        ));
        $resultat = $etat->fetchAll();
        $etat->closeCursor();
        return $resultat;
    }
   

public function get_student_info($ide) {
    $sql = "SELECT * FROM Client WHERE ide = :ide";
    $stmt = $this->connex->prepare($sql);
    $stmt->bindParam(":ide", $ide, PDO::PARAM_INT);
    $stmt->execute();
    $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
    return $etudiant;
}

    // delete
public function delete() {
    $requete = "DELETE FROM Client WHERE ide=?";
    $etat = $this->connex->prepare($requete);
    $etat->execute(array($this->getIde())); 
    $etat->closeCursor();
}
}
?>