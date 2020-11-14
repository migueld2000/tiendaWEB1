<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRODUCTOS BODEGA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body>
    <main>
    <?php
        //1. crear una copia de la clase Bd
        //crear un objeto  de la clase bd
        include("Basededatos.php");
        $transaccion = new Basededatos();

        //2.Crear la consulta para buscar datos
        $consultaSQL = "SELECT * FROM productos WHERE 1";

        //3.Utilizar el metodo consultarDatos
        $productos = $transaccion->consultarDatos($consultaSQL);
        print_r($productos)
    ?>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <?php foreach($productos as $producto): ?>
                    <div class="card">
                        <img src="<?php echo($producto["Imagen"])?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo($producto["Nombre"])?></h5>
                            <p class="card-text"><?php echo($producto["Marca"]) ?></p>
                            <p class="card-text"><?php echo($producto["Precio"]) ?></p>
                            <p class="card-text"><?php echo($producto["Descripcion"]) ?></p>
                        <a href="eliminarproducto.php?id=<?php echo($producto["ID_producto"])?>"class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>