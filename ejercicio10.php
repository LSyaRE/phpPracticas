<?php

    if($_POST){

        $valorA=$_POST['valorA']; 
        $valorB=$_POST['valorB'];
        
        //and && todos los valores entre parentesis or ||
        if(($valorA!=$valorB) || ($valorA>$valorB)){
            echo"El valor de A es diferente que el valor de B y tambien es mayor";

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
    <form action="ejercicio10.php" method="post">
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