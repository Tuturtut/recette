<?php 

include 'config.php';

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
            <td>".$row['titre'] . "<br> <br>".$row['instruction'];"<br>"."</td>
        </tr>
    </table>";
}