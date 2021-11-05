<?php
$compteur= 0;
foreach($_GET as $value){
    $compteur++;
}
echo $compteur;
?>


<form action="./index.php" method="get">
    <label for="FirstN">Prénom :</label>
    <input type="text" name="firstn" id="firstn"><br>
    <label for="LastN">Nom :</label>
    <input type="text" name="lastn" id="lastn"><br>
    <input type="submit" value="Send">
</form>

