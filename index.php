<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto ramas</title>
    </head>
    <body>
        <?php
            echo "<h1>Hola Mundo!</h1>";
            
        ?>
        <form name="formulario" action="procesar.php" method="POST"> 
            <label for="nombre">Introduce tu nombre:</label>
            <input name="nombre" type="text">
            <br>
            <label for="edad">Introduce tu edad</label>
            <input name="edad" type="number">
            <br>
            <input type="submit">
        </form>
    </body>
</html>
