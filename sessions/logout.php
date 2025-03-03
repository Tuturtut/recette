<?php session_start();

echo session_status();
var_dump($_SESSION['login']);
$_SESSION['login'] = "";
$_SESSION['password'] = "";
session_destroy();

header('Location:/recette/index.php');
?>

<a href="/recette/index.php">test</a>