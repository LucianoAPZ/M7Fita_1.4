<h1>Màquina d’escriure</h1>

<?php

session_start();

$_SESSION["frase1"] = $_SESSION["frase1"]+$_POST["frase1"];

echo '<p>$_SESSION["frase1"]</p>
    <form method="post" action="ex3.1PG1.php">';
    for ($i = 65; $i <= 90; $i++) {
        echo '<input type="submit" value="chr($i)" name="frase1">';
    }
    
    echo "<br>";
    
    for ($i = 97; $i <= 122; $i++) {
        echo '<input type="submit" value="chr($i)" name="frase1">';
    }
        
echo '</form>';



?>