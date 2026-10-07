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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <a href="index.php">Tillbaka</a>
        <h2>Ta bort</h2>
        <div>Vill du verkligen ta bort anteckningen som heter:
            <div class="rainbow-text">
                <span class="note-title"><?= htmlspecialchars($note["title"]) ?></span>
            </div>
        </div>
        <form action="clear-note-handler.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="Ja">
        </form>
    </main>
</body>

</html>