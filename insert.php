<?php
include 'config.php';
session_start();

if(isset($_POST['titre']) && isset($_POST['instruction'])){
    $titre = $_POST['titre'];
    $instruction = $_POST['instruction'];
    $image = $_POST['URL_image'];
}

var_dump($_POST['image']);
$sql = "INSERT INTO recette(titre, instruction,image, id_utilisateur) VALUES (:titre, :instruction,:image, :id_utilisateur) ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':instruction', $instruction);
$stmt->bindParam(":id_utilisateur", $_SESSION['id']);
$stmt->bindParam(":image", $image);


$stmt->execute();
echo "Recette ajoutée";

header('Location:index.php');