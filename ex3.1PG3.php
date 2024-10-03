<h1>COINCIDÈNCIES</h1>

<?php
session_start();

$_SESSION["frase2"] = $_POST["frase2"];

echo "<h3>" . $_SESSION["frase1"] . "</h3>";
echo "<h3>" . $_SESSION['frase2'] . "</h3>";

$array1 = explode(" ", $_SESSION["frase1"]);
$array2 = explode(" ", $_SESSION["frase2"]);

$palabraEncotrada = false;

foreach ($array1 as $array11){
    foreach ($array2 as $array22){
        if ($array11 == $array22){
            $palabraEncotrada = true;
            echo "<p>la paraula $array11 està a les dues frases.</p>";
        }
    }
}

if($palabraEncotrada == false){
    echo "<p>No hi ha cap coincidència.</p>";
}

?>

<a href="ex2.1PG1.php">Volver</a>