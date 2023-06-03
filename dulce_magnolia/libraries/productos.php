<?PHP

/**
 * Devuelve el catalogo completo
 * @return array Devuelve un array con el catalogo completo
 */
function catalogo_completo(): array
{
    $catalogoJson = file_get_contents('datos/catalogo.json');
    $resultado = json_decode($catalogoJson, TRUE);
    return $resultado;
}

/**
 * Devuelve el catalogo de un tipo particular
 *@param string $tipo Un string con el tipo de chocolate que es
 */
function catalogo_x_tipo(string $tipo): array
{
    $resultado = [];
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        if ($p['tipo'] == $tipo) {
            $resultado[] = $p;
        }
    }

    return $resultado;
}
/**
 * Devuelve los datos de un producto en particular del catalogo
 * @param int $idProducto EL id del producto, es irrepetible
 * @return mixed Un array con los datos del producto o Null si no se encontro nada
 */
function producto_x_id(int $idProducto): mixed
{

    $catalogo = catalogo_completo();
    foreach ($catalogo as $p) {
        if ($p['id'] == $idProducto) {
            return $p;
        }
    }
    return null;
}
