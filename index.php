<?php
if (isset($_SESSION['us'])) {
    echo "Hallo" . $_SESSION['us'];
}
else {
    echo "Welkom op de home pagina, login om verder te gaan of maak een account aan";
}
?>

<!DOCTYPE html>
<form action="login.php">
    <input type="submit" value="login" />
</form>
</br>
<form action="registratie.php">
    <input type="submit" value="registreren" />
</form>