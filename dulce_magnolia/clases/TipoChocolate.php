<?PHP 

class TipoChocolate {

    private $id;
    private $nombre;


    public function get_x_tipo(int $id): ?TipoChocolate

{ 
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM tipos_chocolate WHERE id = $id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatement->execute();
    
     $resultado = $PDOStatement->fetch();

     return $resultado ?? null;
}
  
public function getTipoChocolate()
{
    return $this->nombre;
}

}