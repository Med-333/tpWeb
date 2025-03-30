<?php
require (__DIR__.'/../models/Liver.php');

class LivreController {
    public function getAll() {
        return Livre::getAllLivres();
    }

    public function get($id) {
        return Livre::getLivreById($id);
    }

    public function store($data) {
        $livre = new Livre($data['titre'], $data['auteur'], $data['nbPages'], $data['edition'], $data['datePub']);
        return $livre->addLivre();
    }

    public function update($id, $data) {
        $livre = new Livre($data['titre'], $data['auteur'], $data['nbPages'], $data['edition'], $data['datePub']);
        return $livre->editLivreById($id);
    }
}
?>
