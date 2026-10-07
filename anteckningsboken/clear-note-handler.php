<?php
session_start();
$id = $_POST["id"];
unset($_SESSION["notes"][$id]);

header("Location: index.php");