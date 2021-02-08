<?php

    echo "<h1>Tu nombre: ".$_POST['nombre']."</h1>";
    echo "<h1>Tu edad: ".$_POST['edad']."</h1>";
    echo "<hr>";
    
    foreach($_POST as $key => $value){
        echo "<strong>$key:</strong> $value<br>";
    }

?>

