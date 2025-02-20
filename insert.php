<?php
include 'config.php';

if(isset($_POST['titre']) && isset($_POST['instruction'])){
    $titre = $_POST['titre'];
    $instruction = $_POST['instruction'];
}

$sql = "INSERT INTO recette(titre, instruction) VALUES (:titre, :instruction) ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':instruction', $instruction);


$stmt->execute();
echo "Recette ajoutée";

header('Location:index.php');
