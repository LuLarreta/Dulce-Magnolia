<?PHP
$filtro = $_GET['tipo'] ?? FALSE;


$misBombones = new Bombones();


if ($filtro && ($filtro != "completo")) {
    $catalogo = $misBombones->catalogo_x_tipo($filtro);
} else {
    $catalogo = $misBombones->catalogo_completo();
}
?>

<div class="container">
    <div class="container-fluid ">
    <?PHP if (!empty($catalogo)) { ?>
        <div class="row ">
            <?PHP
            foreach ($catalogo as $misBombones) { ?>

                <div class="col-lg-3 col-md-4 col-sm-12 d-flex align-items-stretch ">
                    <div class="card m-1 bg-rosa shadow">
                        <div class="card-body p-2">
                            <div class="container bg-light shadow p-1 rounded fs-5 align-items-center">
                                <h3 class="card-title bg-light shadow rounded text-center text-deco fs-5 m-2  align-items-stretch"><?= $misBombones->getNombre() ?></h3>
                                <img src="img/productos/<?= $misBombones->getImagen()?> " class="img-fluid shadow d-block m-auto" alt="Foto de <?= $misBombones->getNombre() ?>"> 
                                <div class="row ">
                                    <div class="col-12 ">
                                        <p class="card-text m-2 "><?= $misBombones->recortar_palabras() ?></p>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class=" col-12 justify-content-end">
                                                <p class="card-text fs-2 text-end">$<?= $misBombones->getPrecio()?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row m-1 ">
                                        <div class="col-12 d-flex flex-column-reverse justify-content-evenly"> <a href="index.php?sec=compra&id=<?= $misBombones->getId() ?>" type="button" class="btn bg-magnolia text-white fs-4 p-1">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
         


            <?PHP } ?>
       <?PHP } else { ?>
                    <div class="col">
                        <h2 class="text-center m-5">No se encontró el producto deseado.</h2>
                    </div>
                <?PHP } ?>



        </div>
    </div>
</div>