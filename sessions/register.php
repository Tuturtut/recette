<?php 
include $_SERVER['DOCUMENT_ROOT'].'/recette/config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

        $sql = "INSERT INTO utilisateur(username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
    }
}

header('Location:/recette/index.php');