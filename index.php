
<?php include 'header.php'; ?>
<h4>Bonjour, <?php echo $_SESSION['login']; echo session_status();?></h4>  
<p>Retrouver les meilleurs recettes: ici <a href="showDB.php">Recette</a></p>

<?php include 'footer.php'; ?>