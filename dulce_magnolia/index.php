<?PHP

require_once "libraries/funciones.php";

$secciones_validas = [
//para que en la pestana arriba aparezca el titulo de la seccion en donde estemos
    "home" => [
        "titulo" => "Home"
    ], "catalogo" => [
        "titulo" => "Nuestro Catalogo"
    ], "compra" => [
        "titulo" => "Comprar Online"
    ], "galeria" => [
        "titulo" => "Galeria de Fotos"
    ], "formulario" => [
        "titulo" => "Contactenos"
    ], "datos_del_alumno" => [
        "titulo" => "Quienes Somos"
    ]
];

$seccion = isset($_GET['sec']) ? $_GET['sec'] :  "home";
//evitar que se puedan ver archivos que no hay que ver
if (array_key_exists($seccion, $secciones_validas)) {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'] ;
} else {
    $vista = "404";
    $titulo = "404 - No se encontro la pagina";
}


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulce Magnolia | <?=$titulo?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/css.css">

</head>

<body class="bg-magnolia">
    <header class="bg-magnolia">
        <h1 class="d-none">Dulce Magnolia</h1>
    </header>

    <div>
        <div class="container-fluid bg-texto p-0 ">

            <nav class="navbar navbar-expand-lg p-3  bg-lucia bg-gradient">
                <a class="navbar-brand mx-auto">
                    <p class="text-deco text-center pt-3">Dulce Magnolia</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraNavegacion" aria-controls="barraNavegacion" aria-expanded="false" aria-label="Despliega Navegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="barraNavegacion">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item my-lg-2"><a class="text-dark text-decoration-none ms-1  ps-1 pe-2 py-2 border_nav  " href="index.php?sec=home">Home</a></li>
                        <li class="nav-item  my-2"><a class="nav-link  text-dark text-decoration-none ms-1  pe-2  py-2  border_nav" role="button" data-bs-toggle="dropdown" aria-expanded="false"  href="index.php?sec=catalogo" >Catalogo</a>   <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?sec=catalogo">Catalogo Completo</a></li>
            <li><a class="dropdown-item" href="index.php?sec=catalogo&tipo=praline">Praline</a></li>
            <li><a class="dropdown-item" href="index.php?sec=catalogo&tipo=bombones">Bombones</a></li>
            <li><a class="dropdown-item" href="index.php?sec=catalogo&tipo=trufas">Trufas</a></li>
          </ul> </li>
                        <li class="nav-item my-2"><a class="text-dark text-decoration-none ms-1 pe-2 py-2  border_nav " href="index.php?sec=compra">Comprar Online</a></li>
                        <li class="nav-item my-2"><a class="text-dark text-decoration-none ms-1 pe-2  py-2 border_nav" href="index.php?sec=galeria">Galería</a></li>
                        <li class="nav-item my-2"><a class="text-dark text-decoration-none ms-1 pe-2  py-2 border_nav" href="index.php?sec=datos_del_alumno">Quienes Somos</a></li>
                        <li class="nav-item my-2"><a class="text-dark text-decoration-none  ms-1 pe-py-2 me-1 " href="index.php?sec=formulario">Contacto</a></li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>


    <main class="m-3">
        <?PHP



        require_once file_exists("secciones/$vista.php") ? "secciones/$vista.php" : "secciones/404.php";





        ?>


    </main>

    <footer>

        <!--  <div class="d-flex container justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="img/yo.jpg" class="rounded-circle img-fluid shadow-lg my-3" alt="Mi foto">
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <div class="my-3 fs-3 text-black ">
                        <p class="text-deco">Lucia Muñoz Larreta</p>
                        <p>22 años 21/06/2000</p>
                        <p>lucia.munoz@davinci.edu.ar</p>
                        <p><a class="text-decoration-none text-black" href="https://www.instagram.com/lucia_larreta_/">@lucia_larreta_</a></p>
                    </div>
                </div>
            </div>
        </div> -->




    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>