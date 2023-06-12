<?PHP

$id = $_GET['id'] ?? FALSE;
$bombonesId = new Bombones();
$producto = $bombonesId->producto_x_id($id);
?>

<?PHP if (!empty($producto)) { ?>
    <div class="container bg-light shadow ancho">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12  my-3">
                    <div class="card bg-rosa shadow">
                        <div class="card-body">
                            <div class="container">
                                <div class="row bg-light shadow my-3 py-2 rounded fs-5 align-items-center">
                                    <div class=" col-12 col-lg-6">
                                        <img src="img/productos/<?= $producto->getImagen(); ?>" class="img-fluid shadow d-block m-auto" alt="Foto de <?= $producto->getNombre(); ?>">
                                    </div>
                                    <div class=" col-12 col-lg-6">
                                        <h3 class="card-title bg-light shadow rounded text-center my-3 text-deco py-2 "><?= $producto->getNombre(); ?></h3>
                                        <div class="col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 ">
                                                        <p class="card-text text-center "><?= $producto->getDetalle(); ?></p>
                                                    </div>
                                                    <div class="container fs-6">
                                                        <div class="row d-flex flex-column">
                                                            <div class="col-12">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Peso:</p>
                                                                    <p class="m-1"><?= $producto->getPeso(); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Fecha de vencimiento:</p>
                                                                    <p class="m-1"><?= $producto->getVencimiento(); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Calorias:</p>
                                                                    <p class="m-1"><?= $producto->getCalorias(); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Chocolate Utilizado:</p>
                                                                    <p class="m-1"><?= $producto->getChocolateId(); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Tipo de Chocolate:</p>
                                                                    <p class="m-1"><?= $producto->getTipoChocolate(); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            <div class="col-6">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Pais de Origen:</p>
                                                                    <p class="m-1"><?= $producto->getNombrePais(); ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Calidad:</p>
                                                                    <p class="m-1"><?= $producto->getCalidadChocolate(); ?></p>
                                                                </div>
                                                            </div></div>
                                                            <div class="col-12">
                                                                <div class="container border-bottom">
                                                                    <p class="m-1">Ingredientes Destacados:</p>
                                                                    <p class="m-1"><?= $producto->getIngredientesDestacados(); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" col-12">
                                                        <p class="card-text fs-1 text-center">$<?= $producto->getPrecio(); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row justify-content-evenly">
                                                <div class="col-8 my-3  d-flex flex-column-reverse"> <a href="#" type="button" class="btn fs-3 bg-magnolia text-white">Comprar</a>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-3 d-flex flex-column-reverse align-items-center justify-content-around">
                                                            <p>Visa</p>
                                                            <img src="img/tarjeta/visa.jpg" class="img-fluid" alt="tarjeta visa">
                                                        </div>
                                                        <div class="col-3 d-flex flex-column-reverse align-items-center justify-content-around">
                                                            <p>Mastercard</p>
                                                            <img src="img/tarjeta/mastercard.jpg" class="img-fluid" alt="tarjeta mastercard">
                                                        </div>
                                                        <div class="col-3 d-flex flex-column-reverse align-items-center justify-content-around">
                                                            <p>Naranja</p>
                                                            <img src="img/tarjeta/naranja.jpg" class="img-fluid" alt="tarjeta naranja">
                                                        </div>
                                                        <div class="col-3 d-flex flex-column-reverse align-items-center justify-content-around">
                                                            <p>American Express</p>
                                                            <img src="img/tarjeta/american.jpg" class="img-fluid" alt="tarjeta american express">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?PHP } else { ?>
    <div class="col">
        <h2 class="text-center m-5">No se encontró el producto deseado.</h2>
    </div>
<?PHP } ?>