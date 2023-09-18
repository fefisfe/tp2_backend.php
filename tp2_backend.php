<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1. Crear una variable n y validar que sea un número positivo</h2>
    <br>

    <?php

    $x = 5;

    if ($x >= 0) {
        echo "Este número es Positivo";
    }

    ?>

    <br>
    <h2>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h2>
    <br>

    <?php

    $e = 5;

    if ($e > 1 & $e < 10) {
        echo "Este número es mayor a 1 y menor que 10";
    }
    
    ?>

    <h2>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2</h2>
   

    <?php
 

    $e = 15;
  
    if ($e > 10 || $e < 2) {
        echo "Este número cumple la condición";
    }
   
    ?>

    <h2>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h2>
<br>

<?php

$numero1 = 5;
$numero2 = 5;

if ($numero1 > $numero2) {
     echo $numero1 + $numero2;
     echo $numero1 - $numero2;
}elseif ($numero2 > $numero1) {
        echo $numero2 * $numero1;
        echo $numero2 / $numero1;
        echo $numero2 % $numero1;
}else {
        echo "Los números son iguales";
}
?>
</body>
</html>