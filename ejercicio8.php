<?php

    if($_POST){

        $valorA=$_POST['valorA']; 
        $valorB=$_POST['valorB'];
        
        if($valorA>$valorB){
            echo"El valor de A es mayor que el valor de B";

        }
        if($valorB>$valorA){
            echo"El valor de B es mayor que el valor de A";

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Arimeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        <h1>Valor A</h1>
        <input type="text" name="valorA" id="">
        <br>
        <h1>Valor B</h1>
        <input type="text" name="valorB" id="">
            <br>
        <input type="submit" value="Calcular">
        </form>


</body>
</html>