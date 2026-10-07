<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="get">
        <input type="text" name="text" id="">
        <input type="text" name="antal" id="">
        <input type="submit" value="">
    </form>

    <div>
    <?php if (isset($_GET["text"])): ?>
        <p>
            <?php if ($_GET["text"] == "pizza") {
                    echo "<span>Pizza är gott</span>";
            }?>

            <?php if ($_GET["text"] == "LTG") {
                    echo "<img src=\"3lvg6snbx5.jpg\" alt=\"\">";
            }?>
        </p>

        <p>
            <?php 
            $texten = $_GET["text"];
            for ($i = 0; $i < $_GET["antal"]; $i++) {
                    echo "<div> $texten </div>";
            }?>
        </p>

    <?php
        endif;
    ?>
    </div>
</body>
</html>