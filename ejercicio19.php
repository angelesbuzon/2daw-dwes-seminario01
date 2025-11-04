<?php

# WIP Ejercicio 19. Eliminar vocales
# Crea una función que, dada una cadena de texto, elimine todas las vocales de la cadena.
# Ejemplo: eliminarVocales("Hola Mundo") → "Hl Mnd"

include './includes/funciones.php';

$text = promptString("Introduce un texto y le quitaré las vocales: ");

var_dump($text);

$textWithoutVowels = removeVowels($text);

echo $textWithoutVowels;

function removeVowels(string $text): string {
    foreach ($text as $char) {
        /*
        si este char pasado a minus es una vocal,
        eliminar y recomponer el array

        o bien no un foreach sino un map?
        */

    }

    return $text;
}


?>