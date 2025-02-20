<?php 
include 'nav.php';
?>

  <h1>Recipe.</h1>
  <form action="insert.php" method="POST">
    <input type="text" name="titre" placeholder="Titre de la recette">
    <input type="text" name="instruction" placeholder="Instruction de la recette">
    <input type="submit" value="Ajouter une recette">
  </form>
</body>
</html>