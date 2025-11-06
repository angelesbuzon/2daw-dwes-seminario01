<?php 

# WIP: Ejercicio 13. Generador de tabla HTML
# Crea una función que dada una cadena de texto con formato Emmet devuelva su correspondiente etiqueta HTML,
# teniendo en cuenta sólo los atributos de clase e id. Ej:
# in: a -> out: <a></a>
# in: div.oferta -> out: <div class="oferta"></div>
# in: div.coche#VWPolo -> out: <div class="coche" id="VWPolo"></div>

include "./includes/funciones.php";

$shortcut = promptString("Introduce el atajo en formato Emmet: ");
$tag = getHTMLTag($shortcut);

echo "\n" . $tag . "\n";

function getHTMLTag(string $shortcut): string {
    $finalTag = "";
    $selector = "";
    $class = "";
    $id = "";

    echo "Shortcut: " . var_dump($shortcut);

    # Distinguir de algun modo los . y los #...
    # $usuario = substr($email, 0, strpos($email, "@"));
    $class = substr($shortcut, strpos($shortcut, "."), strpos($shortcut, "#"));
    $id = substr($shortcut, strpos($shortcut, "#"), strpos($shortcut, "."));

    $selector = str_replace(("." . $class), "", $shortcut);
    $selector = str_replace(("#" . $id), "", $shortcut);

    echo "Selector: " . var_dump($selector);
    echo "Class: " . var_dump($class);
    echo "ID: " . var_dump($id);

    # Resultado
    if ($class != "" && $id != "") {
        $finalTag = "<$selector class=\"$class\" id =\"$id\"></$selector>";
    } else if ($class != "") {
        $finalTag = "<$selector class=\"$class\"></$selector>";
    } else if ($id != "") {
        $finalTag = "<$selector id=\"$id\"></$selector>";
    } else {
        $finalTag = "<$selector></$selector>";
    }

    return $finalTag;

}

?>