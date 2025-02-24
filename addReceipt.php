<?php 
include 'header.php';
?>
  <h2>Nouvelle recette</h2>
  <form action="insert.php" method="POST">
    <input type="text" name="titre" placeholder="Titre de la recette">
    <input type="text" name="instruction" placeholder="Instruction de la recette">
    <input type="submit" value="Ajouter une recette">
  </form>
<?php include 'footer.php'; ?>