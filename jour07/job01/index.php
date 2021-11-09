<?php
session_start();
if (isset($_POST["reset"])) {
    session_unset();
}

else if (isset($_SESSION['compteur'])) {
    $_SESSION['compteur']++;
    echo 'Il y a '.$_SESSION['compteur'].' visiteurs';
}

else{
    $_SESSION['compteur']=0;
}
?>

<form action="./index.php" method="post">
    <input type="submit" name = "reset" value="RESET">
</form>

