<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="text" id="">
        <input type="submit" value="">
    </form>

    <?php if (isset($_GET["text"])) :?>
        echo $_GET["text"];
        <p>
            <?php if ($_GET["text"] == "pizza") {
                echo "<span>Pizza är gott</span>";
            } ?>
            
            <?php if ($_GET["text"] == "LTG") {
                echo "<img src=\"3lvg6snbx5.jpg\" alt=\"\">";
            } ?>
        </p>

    <?php
    endif;
    ?>
</body>
</html>