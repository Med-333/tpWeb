<?php
require_once "../controllers/LivreController.php";

$controller = new LivreController();
$book = $controller->show($_GET['id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->update($_GET['id'], $_POST);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST">
        <label>Title: <input type="text" name="titre" value="<?= htmlspecialchars($book->titre) ?>" required></label><br>
        <label>Author: <input type="text" name="auteur" value="<?= htmlspecialchars($book->auteur) ?>" required></label><br>
        <label>Number of Pages: <input type="number" name="nbPages" value="<?= $book->nbPages ?>" required></label><br>
        <label>Edition: <input type="text" name="edition" value="<?= htmlspecialchars($book->edition) ?>" required></label><br>
        <label>Publication Date: <input type="date" name="datePub" value="<?= $book->datePub ?>" required></label><br>
        <button type="submit">💾 Save Changes</button>
    </form>
    <a href="index.php">⬅ Back</a>
</body>
</html>
