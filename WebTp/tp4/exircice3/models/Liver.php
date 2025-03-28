<?php
require_once "../BDD/connexion.php";

class Livre {
    public $id;
    public $titre;
    public $auteur;
    public $nbPages;
    public $edition;
    public $datePub;

    public function __construct($titre, $auteur, $nbPages, $edition, $datePub, $id = null) {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->edition = $edition;
        $this->datePub = $datePub;
    }

    public static function getAllLivres() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM livres");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addLivre() {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO livres (titre, auteur, nbPages, edition, datePub) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$this->titre, $this->auteur, $this->nbPages, $this->edition, $this->datePub]);
    }

    public static function getLivreById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM livres WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editLivreById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("UPDATE livres SET titre = ?, auteur = ?, nbPages = ?, edition = ?, datePub = ? WHERE id = ?");
        return $stmt->execute([$this->titre, $this->auteur, $this->nbPages, $this->edition, $this->datePub, $id]);
    }

    public static function deleteLivreById($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM livres WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
