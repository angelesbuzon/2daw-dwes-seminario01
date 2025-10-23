<?php 

# Ejercicio 4. Palíndromo
# Crea una función que determine si una cadena de texto es un palíndromo.
# Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha
# que de derecha a izquierda ("ana", "reconocer", "anilina").

include "./includes/funciones.php";

$word = "";

do {
    $word = promptString();
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
    $slicingPoint = (int)(strlen($word) / 2);
    #var_dump($slicingPoint);

    # https://www.php.net/manual/en/function.substr.php
    $left = substr($word, 0, $slicingPoint);
    $right = substr($word, $slicingPoint+1, strlen($word));

    # var_dump($left);
    # var_dump($right);

    $isPalindrome = true;
    $j = strlen($right)-1;

    for ($i = 0; $i < strlen($left) && $isPalindrome; $i++) {
        # echo $left[$i] . ", " . $right[$j] . "\n";

        if ($left[$i] !== $right[$j]) {
            $isPalindrome = false;
        } else {
            $j--;
        }
    }

    return $isPalindrome;
}

?>