<?php
    if(isset($_POST['accion'])){
        $accion = $_POST['accion'];
    }
    
    if(isset($_POST['numero1'])){
        $num1 = $_POST['numero1'];
    }
    
    if(isset($_POST['numero2'])){
        $num2 = $_POST['numero2'];
    }
    
    if($accion !== null){
        header("refresh: 0.1; $accion.php?num1=$num1&num2=$num2");
    }
    else{
        echo "<h1>Algo ha salido mal...</h1>";
        header("refresh: 1; index.php");
    }

?>

