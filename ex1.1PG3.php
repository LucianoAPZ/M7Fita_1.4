<h1>Nombre oculto:</h1>

<?php
session_start();
$_SESSION["endevina"] = $_POST["endevina"];
if($_SESSION["endevina"] == null){
    echo '<form method="post" action="ex1.1PG3.php">
            <input type="number" name="endevina">
            <input type="submit" value="Endevina">
        </form>';
} else{
    if($_SESSION["ocult"]==$_SESSION["endevina"]){
        echo "<h2>Felicidades</h2>
              <a href='ex2.1PG1.php'>Volver</a>";
    }elseif($_SESSION["ocult"]<$_SESSION["endevina"]){
        echo '<h2>Más pequeño</h2>
            <form method="post" action="ex1.1PG3.php">
            <input type="number" name="endevina">
            <input type="submit" value="Endevina">
        </form>';
    }else{
        echo '<h2>Más grande</h2>
            <form method="post" action="ex1.1PG3.php">
            <input type="number" name="endevina">
            <input type="submit" value="Endevina">
        </form>';
    }
}


?>

