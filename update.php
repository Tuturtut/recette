<?php include 'header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])){
    $id = $_POST['id'];
    echo $_POST['id'];

    $sql = "SELECT * FROM recette WHERE id = $id";
    $stmt = $conn->query($sql);
    $stmt->execute();

    $recette = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<h2>Mettre a jour la recette</h2>
<form action="updating.php" method="POST">
    <input type="text" name="titre" placeholder="titre" value="<?php echo $recette['titre']; ?>">
    <input type="text" name="instruction" placeholder="instruction" value="<?php echo $recette['instruction']; ?>">
    <input type="hidden" name="id" value="<?php echo $recette['id']; ?>">
    <input type="submit" value="Ajouter une recette">
</form>