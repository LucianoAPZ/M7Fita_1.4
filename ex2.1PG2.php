<h1>ENREGISTRA FRASE 2</h1>

<?php

session_start();

$_SESSION["frase1"] = $_POST["frase1"];

?>

<form method="post" action="ex2.1PG3.php">
    <input type="text" name="frase2">
    <input type="submit" value="enviar">
</form>