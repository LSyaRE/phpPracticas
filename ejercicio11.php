<?php

    if($_POST){

        $valorA=$_POST['valorA']; 
        $valorB=$_POST['valorB'];
        
        $suma=$valorA+$valorB;
        $resta=$valorA-$valorB;
        $division=$valorA/$valorB;
        $multiplicacion=$valorA*$valorB;

        if ($valorA==$valorB){

            echo "El valor de A es igual a el B";
        }
        if ($valorA==  4){
        
        echo "</br>"."El valor es 4";
        }
        if ($valorA==5){
            
            echo "El valor es 5";
        }
    
        if (($valorA==4)&&($valorA==$valorB)){
            echo "</br>"."El valor es el mismo valor de 4"; 
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
    <form action="ejercicio11.php" method="post">
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