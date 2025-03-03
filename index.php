
<?php include 'header.php'; ?>
<h4>Bonjour, <?php 
if(isset($_SESSION['login'])){
echo $_SESSION['login'];
}else{
    echo "visiteur";
};
?></h4>  
<p>Retrouver les meilleurs recettes: ici <a href="showDB.php">Recette</a></p>

<?php include 'footer.php'; ?>