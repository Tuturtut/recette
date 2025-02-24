<?php 

include 'config.php';
include 'header.php';


$sql = "SELECT titre, instruction, id FROM recette";
$stmt = $conn->query($sql);
$stmt->execute();

echo "<table>
        <tr>
            <th>Titre</th>
            <th>Instruction</th>
        </tr>";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "
        <tr>
            <td>".$row['titre']."</td>
            <td>".$row['instruction']."</td>
            <td><form action='update.php' method='POST'>
                <input type='hidden' name='id' value='".$row['id']."'>
                <input type='submit' value='Modifier'>
            </form></td>
        </tr>";
    };
    echo "</table>";

    include 'footer.php';
?>
