<?PHP 
class Origen 
{
    private $id;
    private $pais;
    private $imagen;
    private $calidad;



/**
 * Devuelve los datos de un ingrediente en particular
 */
public function get_x_origen(int $id): ?Origen

{ 
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM origen_chocolate WHERE id = $id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatement->execute();
    
     $resultado = $PDOStatement->fetch();

     return $resultado ?? null;
}
public function getPais()
{
    return $this->pais;
}
public function getCalidad()
{
    return $this->calidad;
}
public function getImagen()
{
    return $this->imagen;
}



}