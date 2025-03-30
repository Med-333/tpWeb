<?php
require_once "../controllers/LivreController.php";

$controller = new LivreController();
$books = $controller->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    <a href="add.php"> Add New Book</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Pages</th>
            <th>Edition</th>
            <th>Published Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book['id'] ?></td>
            <td><?= htmlspecialchars($book['titre']) ?></td>
            <td><?= htmlspecialchars($book['auteur']) ?></td>
            <td><?= $book['nbPages'] ?></td>
            <td><?= htmlspecialchars($book['edition']) ?></td>
            <td><?= $book['datePub'] ?></td>
            <td>
                <a href="details.php?id=<?= $book['id'] ?>"> View</a>
                <a href="edit.php?id=<?= $book['id'] ?>"> Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
