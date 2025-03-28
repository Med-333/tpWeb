<?php
require_once "../models/Livre.php";

class LivreController {
    public function index() {
        return Livre::getAllLivres();
    }

    public function show($id) {
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

    public function destroy($id) {
        return Livre::deleteLivreById($id);
    }
}
?>
