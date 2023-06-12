<?PHP

class Chocolate
{
    private $id;
    private $nombre;
    private $origen_id;
    private $tipo_chocolate_id;




    /**
 * Devuelve los datos de un chocolate en particular
 */
public function get_x_chocolate(int $id): ?Chocolate

{ 
    $conexion = (new Conexion())->getConexion();
    $query = "SELECT * FROM chocolate WHERE id = $id";

    $PDOStatement = $conexion->prepare($query);
    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatement->execute();
    
     $resultado = $PDOStatement->fetch();

     return $resultado ?? null;
}

    public function getNombreChocolate()
    {
        return $this->nombre;
    }

    public function getOrigenPais()
    {
        $origen = (new Origen())->get_x_origen($this->origen_id);
        $paisOrigen = $origen->getPais();
        return $paisOrigen;
    }
    public function getTipoChocolate()
    {
        $tipo = (new TipoChocolate())->get_x_tipo($this->tipo_chocolate_id);
        $tipoChocolate = $tipo->getTipoChocolate();
        return $tipoChocolate;
    }

    public function getCalidad()
    {
        $origen = (new Origen())->get_x_origen($this->origen_id);
        $calidadChocolate = $origen->getCalidad();
        return $calidadChocolate;
    }

   


}