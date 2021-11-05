<?php
if(isset($_POST['username']) || isset($_POST['password'])){
    if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo'){
        echo ' C’est pas ma guerre <br>';
    }
    else{
        echo ' Votre pire cauchemar <br>';
    }
}
?>

<form action="./index.php" method="post">
    <label for="Username">Indentifiant :</label>
    <input type="text" name="username" id="username"><br>
    <label for="Password">Mot de passe :</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Send">
</form>

