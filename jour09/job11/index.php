<?php
$Bdd = mysqli_connect('localhost', 'root', '', 'jour08');
mysqli_set_charset($Bdd, 'utf8');
$Requete = mysqli_query($Bdd, "SELECT * , AVG(capacite) as moyenne FROM salles");
$Salles = mysqli_fetch_all($Requete, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacite</th>
                <th>ID etage</th>
                <th>ID</th>
                <th>Moyenne</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($Salles as $Salle){
                echo'<tr><td>'.$Salle['nom'].'</td>';
                echo'<td>'.$Salle['capacite'].'</td>';
                echo'<td>'.$Salle['id_etage'].'</td>';
                echo'<td>'.$Salle['id'].'</td>';
                echo'<td>'.$Salle['moyenne'].'</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>