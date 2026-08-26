<?php
$danielVariabel = "daniel";
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
    <?php
    echo "hej " . "daniel";
    echo "<br> ok";
    ?>

    <h1>Rubrik</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aliquid vel, quasi soluta nesciunt quod nostrum beatae culpa sequi sit cupiditate, dolore est quia labore earum veritatis exercitationem consectetur minus?</p>

    <?php
    echo $danielVariabel . " Samuelsson";
    echo "<br>";
    if (isset($_GET["text"])) {
        echo $_GET["text"];
    }
    ?>


    <form action="" method="get">
    <input type="text" name="text" id="">
    <input type="submit" value="Tryck">
    </form>
</body>
</html>