<?php 

# Ejercicio 4. Palíndromo
# Crea una función que determine si una cadena de texto es un palíndromo.
# Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha
# que de derecha a izquierda ("ana", "reconocer", "anilina").

include './includes/funciones.php';
include './includes/variables.php';

$word = "";

do {
    $word = readline("Introduce una palabra o frase: ");

    if (strlen($word) < 3) echo "ERROR: Tiene que tener 3 caracteres como mínimo.\n";
} while (strlen($word) < 3);

if (isPalindrome($word)) {
    echo "Es palíndroma :)\n";
} else {
    echo "NO es palíndroma :(\n";
}

# ---------------------
# Funciones específicas
# ---------------------

function isPalindrome($word) {
    # $left, $right;

    $slicingPoint = (int)(strlen($word) / 2);
    var_dump($slicingPoint);

    # https://www.php.net/manual/en/function.substr.php
    $left = substr($word, 0, $slicingPoint);
    var_dump($left);
    $right = substr($word, $slicingPoint+1, strlen($word));
    var_dump($right);

    $isPalindrome = true;

    for ($i = 0; $i < strlen($left) && $isPalindrome; $i++) {
        for ($j = strlen($right)-1; $j >= 0 && $isPalindrome; $j++) {
            if ($left[$i] !== $right[$j]) {
                $isPalindrome = false;
            }
        }
    }

    return $isPalindrome;
}

?>