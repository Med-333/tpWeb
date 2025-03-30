<?php
require (__dir__."/../BDD/connexion.php");
class Livre {
    public $titre;
    public $auteur;
    public $nbPages;
    public $edition;
    public $datePub;
    private $conn;

    public function __construct($titre, $auteur, $nbPages, $edition, $datePub) {

        global $conn;

        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->edition = $edition;
        $this->datePub = $datePub;
        $this->conn = $conn;

    }


    public function addLivre() {
        $stmt = $this->conn->prepare("INSERT INTO livres (titre, auteur, nbPages, edition, datePub) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$this->titre, $this->auteur, $this->nbPages, $this->edition, $this->datePub]);
    }


    public function editLivreById($id) {
        $stmt = $this->conn->prepare("UPDATE livres SET titre = ?, auteur = ?, nbPages = ?, edition = ?, datePub = ? WHERE id = ?");
        return $stmt->execute([$this->titre, $this->auteur, $this->nbPages, $this->edition, $this->datePub, $id]);
    }
    public static function deleteLivreById($id) {
        global $conn;
        $stmt =$conn->prepare("DELETE FROM livres WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function getLivreById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM livres WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public static function getAllLivres() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM livres");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
?>
