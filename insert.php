<?php
include 'config.php';
session_start();

if(isset($_POST['titre']) && isset($_POST['instruction'])){
    $titre = $_POST['titre'];
    $instruction = $_POST['instruction'];
}

var_dump($_SESSION['id']);
$sql = "INSERT INTO recette(titre, instruction, id_utilisateur) VALUES (:titre, :instruction, :id_utilisateur) ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':instruction', $instruction);
$stmt->bindParam(":id_utilisateur", $_SESSION['id']);


$stmt->execute();
echo "Recette ajoutée";

header('Location:index.php');