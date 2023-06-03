<?PHP

echo "<pre>";
print_r($_GET);
echo "</pre>";


$nombre = $_GET['nombre'];

$apellido = $_GET['apellido'];

$telefono = $_GET['telefono'];

$ciudad = $_GET['ciudad'];

$email = $_GET['email'];

$consulta = $_GET['consulta'];



echo "<p>El dato del campo nombre es: ".$nombre." </p>";
echo "<p>El dato del campo apellido es: $apellido </p>";
echo "<p>El dato del campo telefono es: $telefono </p>";
echo "<p>El dato del campo ciudad es: $ciudad </p>";
echo "<p>El dato del campo email es: $email </p>";
echo "<p>El dato del campo consulta es: $consulta </p>";
?>