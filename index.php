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
        <style>
            body{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .contenedor{
                width: max-content;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                border: 2px solid black;
                border-radius: 10px;
                padding: 25px;
                margin-top: 250px;
            }

        </style>
    </head>
    <body>
        <div class="contenedor">
            <h1>Operaciones</h1>
            <form name="formulario" action="procesar.php" method="POST"> 
                <label for="accion">Introduce la acción que quieres realizar:</label>
                <select name="accion" required>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicación</option>
                    <option value="division">División</option>
                </select>
                <br>
                <label for="numero1">Introduce el número 1:</label>
                <input name="numero1" type="number" required>
                <br>
                <label for="numero2">Introduce el número 2:</label>
                <input name="numero2" type="number" required>
                <br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
