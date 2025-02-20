<?php 
include 'nav.php';
?>

  <form action="insert.php" method="POST">
    <input type="text" name="titre" placeholder="Titre de la recette">
    <input type="text" name="instruction" placeholder="Instruction de la recette">
    <input type="submit" value="Ajouter une recette">
  </form>
</body>
</html>