<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    if($num2 != 0){
        echo "<h1>División</h1><h2>$num1 / $num2 = ".($num1 / $num2)."</h2>";
    }
    else{
        echo "<h1>ERROR: El número 2 no puede ser 0, no se puede dividir entre 0.</h1>";
    }
    echo "<a href='index.php'><h3>Volver al inicio</h3></a>";
?>