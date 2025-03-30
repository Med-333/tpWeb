<?php
require_once "../controllers/LivreController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new LivreController();
    $controller->store($_POST);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="POST">
        <label>Title: <input type="text" name="titre" required></label><br>
        <label>Author: <input type="text" name="auteur" required></label><br>
        <label>Number of Pages: <input type="number" name="nbPages" required></label><br>
        <label>Edition: <input type="text" name="edition" required></label><br>
        <label>Publication Date: <input type="date" name="datePub" required></label><br>
        <button type="submit"> Add Book</button>
    </form>
    <a href="index.php"> Back</a>
</body>
</html>
