<?php include $_SERVER['DOCUMENT_ROOT'].'/recette/config.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['login']) && isset($_POST['password'])){
        $username = $_POST['login'];
        $password = $_POST['password'];

        $sql = $conn->query("SELECT * FROM utilisateur WHERE username = '".$_POST['login']."'");
        $sql = $sql->fetch();

        if(password_verify($password, $sql['password'])){
            echo "bonjour " . $username;
            $_SESSION['login'] = $username;
            $_SESSION['id'] = $sql['id'];
            header('Location:/recette/index.php');
        }else{
            echo "nop";
            header('Location:/recette/sessions/loginForm.php');
        }
    }
}