<h1>COINCIDÈNCIES</h1>

<?php
session_start();

$_SESSION["frase2"] = $_POST["frase2"];

echo "<h3>" . $_SESSION["frase1"] . "</h3>";
echo "<h3>" . $_SESSION['frase2'] . "</h3>";

$array1 = explode(" ", $_SESSION["frase1"]);
$array2 = explode(" ", $_SESSION["frase2"]);
$array3 = [];


foreach ($array1 as $array11){
    foreach ($array2 as $array22){
        if ($array11 == $array22){
            if (!in_array($array11, $array3)){
                echo "<p>la paraula $array11 està a les dues frases.</p>";
                $array3[] = $array11;
            }
        }
    }
}

if($array3 == null){
    echo "<p>No hi ha cap coincidència.</p>";
}

?>

<a href="ex2.1PG1.php">Volver</a>