<?php
include("Basededatos.php");
if(isset($_POST["Editar"]))
{
    //1. recibir los datos a editar
    $imagen=$_POST["EditarFoto"];
    $nombre=$_POST["EditarNombre"];
    $marca=$_POST["EditarMarca"];
    $precio=$_POST["EditarPrecio"];
    $descripcion=$_POST["EditarDescripcion"];

    //2. recibir el id del campo a editar
    $id=$_GET["id"];

    //3. crear un objeto de la clase BasedeDatos

    $transaccion=new Basededatos();

    //4. crear la consulta sql para editar

    $consultaSQl="UPDATE productos  SET Imagen='$imagen',Nombre ='$nombre',Marca='$marca',Precio='$precio' ,Descripcion='$descripcion' WHERE  ID_producto ='$id'";

    //5.llamar al metodo editardatos

    $transaccion->editarDatos($consultaSQl);

    //6. redirecion

    header("location:ProductosBodega.php");

}

?>
