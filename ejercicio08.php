<?php

# Ejercicio 8. Suma de dígitos
# Crea una función que sume los dígitos de un número

include './includes/funciones.php';

$arrayOfNumbers = [];
$number = promptNumberOfSeveralDigits("Introduce un número de más de un dígito: ");
$digit;

# Divide el número hasta que me quede sin dígitos
$numberDivided = $number;
while ($numberDivided / 10 > 0) {
    $digit = $numberDivided % 10;
    $arrayOfNumbers[] = $digit;

    $numberDivided /= 10;
    $numberDivided = (int) $numberDivided;

    #var_dump($numberDivided);
}

#var_dump($arrayOfNumbers);

# Suma
$sum = array_reduce($arrayOfNumbers, function($accumulator, $n) {
    return $accumulator + $n;
}, 0);

echo "La suma de los dígitos de " . $number . " es " . $sum . "\n";

?>