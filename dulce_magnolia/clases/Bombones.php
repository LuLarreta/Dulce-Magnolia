<?PHP 

class Bombones
{
    private $id;
    private $nombre;
    private $tipo_bombones_id;
    private $imagen;
    private $precio;
    private $vencimiento;
    private $peso;
    private $detalle;
    private $calorias;
    private $chocolate_id;
    private $ingredientes_destacados_id;


    /**
     * Devuelve el catalogo completo
     */
public function catalogo_completo(): array
{
    $conexion = (new Conexion())->getConexion();
$query = "SELECT * FROM bombones";

$PDOStatement = $conexion->prepare($query);
$PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
$PDOStatement->execute();

 $catalogo = $PDOStatement->fetchAll();
 /*
echo "<pre>";
print_r($catalogo);
echo "</pre>";*/

return $catalogo;

}




/**
 * Devuelve el catalogo de un tipo particular
 * @param string $tipo Un string con el tipo de chocolate que es
 * @return Bombones[] Un array de bombones.
 */
public function catalogo_x_tipo(int $tipo_bombones_id): array
{
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM bombones WHERE tipo_bombones_id = $tipo_bombones_id";
    
    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
  $PDOStatement->execute();
    
     $catalogo = $PDOStatement->fetchAll();
     return $catalogo;
    
}



/**
 * Devuelve los datos de un producto en particular del catalogo
 * @param int $idProducto EL id del producto, es irrepetible
 * @return mixed Un array con los datos del producto o Null si no se encontro nada
 */
public function producto_x_id(int $idProducto): ?Bombones
{ 
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM bombones WHERE id = $idProducto";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatement->execute();
    
     $resultado = $PDOStatement->fetch();

     return $resultado ?? null;
}

public function precio_formateado(): string
{
    return number_format($this->precio, 2, ",", ".");
}

/**
 * Recorta una cantidad de palabras en un parrafo
 * @param string $texto Parrafo a reducir
 * @param int $cantidad Opcional Cantidad de palabras que muestra
 * @return string Devuelve las primeras x cantidad de palabras de un parrafo 
 */
public function recortar_palabras(int $cantidad = 20):string
{
$texto = $this->detalle;

    $array = explode(" ", $texto);
    if (count($array) <= $cantidad) {
        $resultado = $texto;
    } else {
        array_splice($array, $cantidad);
        $resultado = implode(" ", $array) . "...";
    }
    return $resultado;
}

   /**
     * trae el valor del ID
     */
    public function getId(){
        return $this->id;
    }

     /**
     * trae el valor del nombre
     */
    public function getNombre(){
        return $this->nombre;
    }

     /**
     * trae el valor del tipo_bombones
     */
    public function getTipoBombones(){
        return $this->tipo_bombones_id;
    }
    /**
     * trae el valor de imagen
     */
    public function getImagen(){
        return $this->imagen;
    }
     /**
     * trae el valor de precio
     */
    public function getPrecio(){
        return $this->precio_formateado();
    }
    /**
     * trae el valor de vencimiento
     */
    public function getVencimiento(){
        return $this->vencimiento;
    }
      /**
     * trae el valor de peso
     */
    public function getPeso(){
        return $this->peso;
    }
        /**
     * trae el valor de detalle
     */
    public function getDetalle(){
        return $this->detalle;
    }
    /**
     * trae el valor de calorias
     */
    public function getCalorias(){
        return $this->calorias;
    }
    /**
     * trae el valor de chocolate_id
     */
    public function getChocolateId(){
        $chocolate = (new Chocolate())->get_x_chocolate($this->chocolate_id);
        $nombreChocolate = $chocolate->getNombreChocolate();

        return $nombreChocolate ;
    }
    /**
     * trae el valor de ingredientes_destacados_id
     */
    public function getIngredientesDestacados(){
        $ingredientes = (new Ingredientes())->get_x_ingrediente($this->ingredientes_destacados_id);
        $nombreIngredientes = $ingredientes->getNombreIngredientes();

        return $nombreIngredientes;
    }

    public function getNombrePais(){
        $chocolate = (new Chocolate())->get_x_chocolate($this->chocolate_id);
        $nombrePais = $chocolate->getOrigenPais();
        return $nombrePais;
        
    }
    public function getCalidadChocolate(){
        $chocolate = (new Chocolate())->get_x_chocolate($this->chocolate_id);
        $calidad = $chocolate->getCalidad();
        return $calidad;
        
    }

    public function getTipoChocolate(){
        $chocolate = (new Chocolate())->get_x_chocolate($this->chocolate_id);
        $tipoChoco = $chocolate->getTipoChocolate();
        return $tipoChoco;
        
    }

}

