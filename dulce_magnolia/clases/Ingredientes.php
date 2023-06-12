<?PHP 
class Ingredientes 
{
    private $id;
    private $nombre;



/**
 * Devuelve los datos de un ingrediente en particular
 */
public function get_x_ingrediente(int $id): ?Ingredientes

{ 
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM ingredientes WHERE id = $id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatement->execute();
    
     $resultado = $PDOStatement->fetch();

     return $resultado ?? null;
}
public function getNombreIngredientes()
{
    return $this->nombre;
}

}