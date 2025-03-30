<?php
require_once "../controllers/LivreController.php";

$controller = new LivreController();
$book = $controller->get($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <h1>Book Details</h1>
    <p><strong>Title:</strong> <?= htmlspecialchars($book['titre']) ?></p>
    <p><strong>Author:</strong> <?= htmlspecialchars($book['auteur']) ?></p>
    <p><strong>Number of Pages:</strong> <?= $book['nbPages'] ?></p>
    <p><strong>Edition:</strong> <?= htmlspecialchars($book['edition']) ?></p>
    <p><strong>Publication Date:</strong> <?= $book['datePub'] ?></p>
    
    <a href="edit.php?id=<?= $book['id'] ?>"> Edit</a>
    <a href="index.php"> Back</a>
</body>
</html>
