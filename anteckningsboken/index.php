<?php
session_start();

if (!isset($_SESSION["notes"])) {
    $_SESSION["notes"] = [];
}

?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anteckningsbok</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php
    if (false)
        echo "<pre>" . htmlspecialchars(print_r($_SESSION, 1)) . "</pre>";
    ?>

    <main>
        <a href="clear-session.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M12 20h5c0.5 0 1 -0.5 1 -1v-14M12 20h-5c-0.5 0 -1 -0.5 -1 -1v-14" />
                    <path d="M4 5h16" />
                    <path d="M10 4h4M10 9v7M14 9v7" />
                </g>
            </svg>
        </a>
        <h1>Anteckningsboken</h1>
        <h2>Skapa ny anteckning</h2>
        <form action="new-post-handler.php" method="POST">
            <p>
                <label for="pet-select">Välj en kategori:</label>

                <select name="kategori" id="pet-select">
                    <option value="">--Välj ett förslag--</option>
                    <option value="privat">Privat</option>
                    <option value="skolrelaterad">Skolrelaterad</option>
                    <option value="övrigt">Övrigt</option>
                </select>
            </p>
            <p>Titel: <input type="text" name="title" id=""></p>
            <p>Innehåll:<br>
                <textarea name="content" id="" rows="4" cols="30"></textarea>
            </p>

            <input type="submit" value="Lägg till ny anteckning">
        </form>

        <?php if ($_SESSION["notes"] != null): ?>
            <h2>Sparade anteckningar</h2>
            <?php foreach ($_SESSION["notes"] as $key => $value): ?>
                <div class="rainbow-text">
                    <a href="new-note.php?id=<?= $key ?>"><?= htmlspecialchars($value["title"]); ?></a> <span><?= $value["kategori"]; ?></span> - <a href="clear-note.php?id=<?= $key ?>">Ta bort anteckning</a>
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </main>

</body>

</html>