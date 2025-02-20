<?php 

include 'config.php';
include 'nav.php';

$sql = "SELECT titre, instruction FROM recette";
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
        </tr>";
    };
    echo "</table>";