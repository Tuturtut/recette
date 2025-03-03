<?php 
include 'header.php';
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titre']) && isset($_POST['instruction']) && isset($_POST['id'])) {
        echo "entré";
        $titre = $_POST['titre'];
        $instruction = $_POST['instruction'];
        $id = $_POST['id'];
    
        $sql = "UPDATE recette SET titre = :titre, instruction = :instruction WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':instruction', $instruction);
        $stmt->bindParam(':id', $id);
    
        try {
            $stmt->execute();
            echo "Recette mise à jour";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
?>