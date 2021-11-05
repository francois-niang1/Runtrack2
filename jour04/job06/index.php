<?php
if(isset($_GET['nombre'])){
    if ($_GET['nombre'] % 2 ==0 ){
        echo ' C’est un nombre pair <br>';
    }
    else{
        echo ' C’est un nombre impair <br>';
    }
}

?>

<form action="./index.php" method="get">
    <label for="Nombre">Nombre :</label>
    <input type="text" name="nombre" id="nombre"><br>
    <input type="submit" value="Send">
</form>