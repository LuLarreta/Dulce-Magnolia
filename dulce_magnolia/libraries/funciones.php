<?PHP



/**
 * Recorta una cantidad de palabras en un parrafo
 * @param string $texto Parrafo a reducir
 * @param int $cantidad Opcional Cantidad de palabras que muestra
 * @return string Devuelve las primeras x cantidad de palabras de un parrafo 
 */
function recortar_palabras(string $texto, int $cantidad = 10):string
{
    $array = explode(" ", $texto);
    if (count($array) <= $cantidad) {
        $resultado = $texto;
    } else {
        array_splice($array, $cantidad);
        $resultado = implode(" ", $array) . "...";
    }
    return $resultado;
}


