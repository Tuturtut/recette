<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM utilisateur WHERE username = :username, password = :password";
        $stmt->query($sql($username, $password));

        var_dump($username);
    }
}