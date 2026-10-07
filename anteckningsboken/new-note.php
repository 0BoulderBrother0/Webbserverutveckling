<?php
session_start();

$id = $_GET['id'];

$note = $_SESSION["notes"][$id];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <a href="index.php">Tillbaka</a>
        <header>
            <h1><?= htmlspecialchars($note["title"]) ?></h1>  <h1><?= $note["kategori"] ?></h1>
        </header>
        <div><?= htmlspecialchars($note["content"]) ?></div>
    </main>
</body>
</html>
