<?php

# Ejercicio 7. Capitalizar palabras
# Crea una función que ponga en mayúscula la primera letra de cada palabra de un texto

include './includes/funciones.php';

$text = promptString("Introduce un texto: ");

echo ucwords($text . "\n");

?>