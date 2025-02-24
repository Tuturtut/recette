<?php include '../config.php';
include '../nav.php';
?>

<form action="register.php" method="post">
    <label for="username">Username: </label><input type="text" name="username" placeholder="mange tes morts">
    <label for="email">Email : <input type="text" name="email" placeholder="email"></label>
    <label for="password">Password: <input type="password" name="password"></label>
    <input type="submit" value="register">
</form>