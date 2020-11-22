<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Productos.php">Productos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ProductosBodega.php">Bodega</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <form action="registrarproductos.php" method="POST">
                <h1>REGISTRO DE PRODUCTOS</h1>
                <hr>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre del producto" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca" name="marca">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="url" name="foto">
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
            </form>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>