<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (false) {
    if (class_exists('PDO')) {
        echo "<p>PDO exists and the following PDO drivers are loaded.<pre>";
        print_r(PDO::getAvailableDrivers());
    }

    if (in_array("sqlite", PDO::getAvailableDrivers())) {
        echo "<p style='color:green'>sqlite PDO driver IS enabled";
    } else {
        echo "<p style='color:red'>sqlite PDO driver IS NOT enabled";
    }
}

require_once("../../projekt-2-app.php");

$stmt = $pdo->query("SELECT * FROM posts");
$stmt->execute();
$result = $stmt->fetchAll();

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anslagstavlan</title>
</head>

<body>

    <h1>Anslagstavlan</h1>
    <?php
    if (false) {
        foreach ($result as $key => $value) {
            print_r($value);
        }
    }
    ?>

    <main>
        <?php foreach ($result as $key => $value) : ?>
            <div>
                <h2><?= h($value["title"]) ?></h2>
                <div>
                    <?= h($value["contents"]) ?>
                </div>
                <div>
                    <i>Inlägg skrivet av <?= h($value["username"]) ?></i>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>