<?php

# WIP Ejercicio 24. Calculadora de descuentos con constantes
# Crea un programa que utilice constantes para definir diferentes tipos de descuentos
# (DESCUENTO_ESTUDIANTE, DESCUENTO_JUBILADO, DESCUENTO_VIP) 
# y una función que calcule el precio final de un producto aplicando el descuento correspondiente según el tipo de cliente.

include './includes/funciones.php';

const STUDENT_DISCOUNT = 0.15;
const RETIRED_DISCOUNT = 0.2;
const VIP_DISCOUNT = 0.25;

$typeOfDiscount = -1;
$basePrice = -1;

do {
    $typeOfDiscount = promptInteger("Introduce el tipo de descuento (1 Estudiante, 2 Jubilado, 3 VIP): ");
} while ($typeOfDiscount != 1 && $typeOfDiscount != 2 && $typeOfDiscount != 3);

do {
    $basePrice = promptNumber("Introduce el precio base: ");
} while ($basePrice <= 0);

$finalPrice = calcFinalPrice($basePrice, $typeOfDiscount);

echo "El precio final es " . $finalPrice . " EUR";

function calcFinalPrice(int $price, int $typeOfDiscount): float {
    switch ($typeOfDiscount) {
        case 1:
            $price = $price - ($price * STUDENT_DISCOUNT);
            break;
        case 2:
            $price = $price - ($price * RETIRED_DISCOUNT);
            break;
        case 3:
            $price = $price - ($price * VIP_DISCOUNT);
            break;
        default:
            echo "Ha habido algún error en calcFinalPrice";
            break;
    }

    return $price;
}

?>