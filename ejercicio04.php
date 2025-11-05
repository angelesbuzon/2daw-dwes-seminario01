<?php 

# Ejercicio 4. Palíndromo
# Crea una función que determine si una cadena de texto es un palíndromo.
# Un palíndromo es una palabra o frase que se lee igual de izquierda a derecha
# que de derecha a izquierda ("ana", "reconocer", "anilina").

include "./includes/funciones.php";

$word = "";

do {
    $word = promptString("Introduce una palabra o frase: ");
    if (strlen($word) < 3) echo "ERROR: Tiene que tener 3 caracteres como mínimo.\n";
} while (strlen($word) < 3);

if (isPalindrome($word)) {
    echo "Es palíndroma :)\n";
} else {
    echo "NO es palíndroma :(\n";
}

# isPalindrome() está en includes/funciones.php porque lo uso luego en ej22

?>