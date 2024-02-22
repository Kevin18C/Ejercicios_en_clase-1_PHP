<?php

//Generar las tablas del 4 y 6
$num1=4;
$num2=6;
for($i=1; $i<=10;$i++){

    echo "$num1 X $i = ". $num1 * $i . "\n";
}
echo "\n";

for($i=1; $i<=10;$i++){

    echo "$num2 X $i = ". $num2 * $i . "\n";
}

//Con un numero seteado en la variable1 calcular el factorial y mostrarlo por pantalla

$var1 = 5; // Puedes cambiar este valor por el que desees

$factorial = 1;

for ($i = 1; $i <= $var1; $i++) {
    $factorial *= $i;
}

echo "El factorial de $var1 es: $factorial"."\n";


//Con un numero seteado en la variable 2 mostrar por pantalla si el numero es primo o no
function esPrimo($var2) {
    if ($var2 <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $var2; $i++) {
        if ($var2 % $i === 0) {
            return false;
        }
    }
    return true;
}


$var2=13;
if ($var2 <= 1) {
    echo "El número $var2 no es válido";
    return;
}

for ($i = 2; $i <= sqrt($var2); $i++) {
    if ($var2 % $i === 0) {
        echo "El número $var2 no es primo";
        return;
    }
}

echo "El número $var2 es primo";
echo "\n";

//Con un numero seteado en la variable3 mostrar por pantalla si el numero es par
$var3 = 12;

if ($var3 % 2 == 0) {
    echo "El número $var3 es par";
} else {
    echo "El número $var3 es impar";
}
echo "\n";


//Con un numero seteado en la variable4 mostrar la tabla de multiplicar
$var4=5;

for($i=1; $i<=10;$i++){

    echo "$var4 X $i = " . $var4*$i . "\n";
}