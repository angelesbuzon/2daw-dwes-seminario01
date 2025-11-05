<?php

# Ejercicio 21. Invertir cadena
# Crea una función que invierta una cadena de texto. Por ejemplo, "hola" debería convertirse en "aloh".

include './includes/funciones.php';

$originalString = promptString("Introduce un texto y le daré la vuelta: ");

$inversedString = inverseString($originalString);

echo $inversedString . "\n";

function inverseString(string $text): string {
    # Convierto string a array para poder usar el reverse() y luego lo vuelvo a convertir en string
    $draftArray = str_split($text);
    $draftArray = array_reverse($draftArray);
    $text = join("", $draftArray);

    return $text;
}

?>