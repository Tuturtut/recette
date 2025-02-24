<?php 

include 'config.php';
include 'header.php';


$sql = "SELECT * FROM recette FULL JOIN utilisateur ON utilisateur.id = id_utilisateur";
$stmt = $conn->query($sql);
$stmt->execute();

echo "<table>
        <tr>
            <th>Titre</th>
            <th>Instruction</th>
            <th>From</th>
        </tr>";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "
        <tr>
            <td>".$row['titre']."</td>
            <td>".$row['instruction']."</td>
            <td>".$row['username']."</td>
            <td><form action='update.php' method='POST'>
                <input type='hidden' name='id' value='".$row['id']."'>
                <input type='submit' value='Modifier'>
            </form></td>
        </tr>";
    };
    echo "</table>";

    include 'footer.php';
?>
