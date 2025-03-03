<?php 

include 'header.php';


$sql = "SELECT recette.id AS id_recette, recette.titre, recette.instruction, recette.image, utilisateur.username FROM recette  JOIN utilisateur ON utilisateur.id = recette.id_utilisateur";
$stmt = $conn->query($sql);
$stmt->execute();

echo "<table>
        <tr>
            <th>Titre</th>
            <th>Instruction</th>
            <th>From</th>
        </tr>";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    var_dump($row['id_recette']);
    $output ="<tr>
            <td>".$row['titre']."</td>
            <td>".$row['instruction']."</td>
            <td>".$row['username']."</td>
            <td><img src='" .$row['image']. "' class='imageRecette'></td>";
    if($_SESSION['login'] === $row['username']){
        $output .= "<td><form action='update.php' method='POST'>
        <input type='hidden' name='id' value='".$row['id_recette']."'>
        <input type='submit' value='Modifier'>
    </form></td>
    </tr>";
    }else{
        $output .= "</tr>";
    }
    echo $output;
    };
    echo "</table>";

    include 'footer.php';
?>
