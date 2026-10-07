<?php
session_start();

$newNote = [];
$newNote["kategori"] = $_POST["kategori"];
$newNote["title"] = $_POST["title"];
$newNote["content"] = $_POST["content"];

$_SESSION["notes"][] = $newNote;

//echo "<pre>" . print_r($_POST, 1) . "</pre>";

header("Location: index.php");