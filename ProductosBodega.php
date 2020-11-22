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
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Productos.php">Productos<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ProductosBodega.php">Bodega</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <?php foreach ($productos as $producto) : ?>
                        <div class="card h-100">
                            <img src="<?php echo ($producto["Imagen"]) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo ($producto["Nombre"]) ?></h5>
                                <p class="card-text"><?php echo ($producto["Marca"]) ?></p>
                                <p class="card-text"><?php echo ($producto["Precio"]) ?></p>
                                <p class="card-text"><?php echo ($producto["Descripcion"]) ?></p>
                                <a href="eliminarproducto.php?id=<?php echo ($producto["ID_producto"]) ?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo ($producto["ID_producto"]) ?>">
                                    Editar
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="editar<?php echo ($producto["ID_producto"]) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edicion del producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="EditarProductos.php?id=<?php echo ($producto["ID_producto"]) ?>" method="POST">
                  <div class="form-group">
                    <label>Foto</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="EditarFoto" value="<?php echo ($producto["Imagen"]) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nombre del producto</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="EditarNombre" value="<?php echo ($producto["Nombre"]) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nombre del producto</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="EditarMarca" value="<?php echo ($producto["Marca"]) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nombre del producto</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="EditarPrecio" value="<?php echo ($producto["Precio"]) ?>">
                  </div>
                  <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="EditarDescripcion" rows="3"><?php echo ($producto["Descripcion"]) ?></textarea>
                  </div>
                  <button type="submit" class="btn btn-info" name="Editar">Editar</button>
                </form>
              </div>
            </div>
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