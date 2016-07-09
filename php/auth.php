<?php
include 'options.php';
session_start();
$_SESSION["auth"] = (isset($_POST["username"]) &&
isset($_POST["password"]) &&
$_POST["username"] == $opt["user"] &&
$_POST["password"] == $opt["password"]) ? 1 : 0;
header('Location: ../');
?>
