<?php

setcookie('nbvisites', $_COOKIE['nbvisites']+1, time()+365*24*3600);

echo $_COOKIE['nbvisites'];

if (isset($_POST["reset"])){
    setcookie('nbvisites');
}else {
    $_COOKIE['nbvisites'];
}
?>

<form action="index.php" method="post">
<input type="submit" value="Reset" name="reset">
</form>