<?php

session_start();

$_SESSION['prenom'] .= ''.$_POST['prenom'];
// .= permet de concatener DONC enchainer deux idées/strings entre elles (ne marche que sur les strings (?)) :: .= concatenating assignment operator ::: ex : 

echo $_SESSION['prenom'];


if (isset($_POST["reset"])){
    session_destroy();
}

?>

<form action="index.php" method="post">
    <div>
        <label for="texte">prénom :</label>
            <input type="text" id="prenom" name="prenom">
    </div>
    <input type="submit" value="submit" name="submit">
    <input type="submit" value="reset" name="reset">
</form>
