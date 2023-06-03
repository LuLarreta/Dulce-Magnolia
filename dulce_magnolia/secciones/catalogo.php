<?PHP
require_once "libraries/productos.php";
$filtro = $_GET['tipo'] ?? FALSE;

if ($filtro) {
    $catalogo = catalogo_x_tipo($filtro);
} else {
    $catalogo = catalogo_completo();
}
?>

<div class="container">
    <div class="container-fluid ">
        <div class="row ">
            <?PHP
            foreach ($catalogo as $catalogo) { ?>

                <div class="col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch ">
                    <div class="card m-1 bg-rosa shadow">
                        <div class="card-body p-2">
                            <div class="container bg-light shadow p-1 rounded fs-5 align-items-center">
                                <h3 class="card-title bg-light shadow rounded text-center text-deco fs-5 m-2  align-items-stretch"><?= $catalogo['nombre'] ?></h3>
                                <img src="img/productos/<?= $catalogo['imagen'] ?> " class="img-fluid shadow d-block m-auto" alt="Foto de <?= $catalogo['nombre'] ?>"> <!--falta poner dinamico la foto y el alt-->
                                <div class="row ">
                                    <div class="col-12 ">
                                        <p class="card-text m-2 "><?= recortar_palabras($catalogo['detalle'], 15) ?></p>
                                    </div>
                                    <div class="container fs-6">
                                        <div class="row d-flex flex-column">
                                            <div class="col-12">
                                                <div class="container border-bottom">
                                                    <p class="m-1">Peso:</p>
                                                    <p class="m-1"><?= $catalogo['peso'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="container border-bottom">
                                                    <p class="m-1">Fecha de vencimiento:</p>
                                                    <p class="m-1"><?= $catalogo['vencimiento'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="container">
                                                    <p class="m-1">Calorias:</p>
                                                    <p class="m-1"><?= $catalogo['calorias'] ?></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class=" col-12 justify-content-end">
                                                <p class="card-text fs-2 text-end">$<?= number_format($catalogo['precio'], 2, ",", ".") ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row m-1 ">
                                        <div class="col-12 d-flex flex-column-reverse justify-content-evenly"> <a href="index.php?sec=compra&id=<?= $catalogo['id'] ?>" type="button" class="btn bg-magnolia text-white fs-4 p-1">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?PHP } ?>
        </div>
    </div>
</div>