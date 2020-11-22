<?php
//1. incliur el archivo base de datos
include("Basededatos.php");
//2.Reciba el Id a eliminar
$id=$_GET["id"];
//3. Crear un objeto(sacar copia) de la clase Base de datos
$transaccion=new Basededatos();
//4. crear una consulta para eliminar datos
$consultaSQl="DELETE FROM productos WHERE ID_producto='$id'";

//5.ejecutar el metodo eliminarUsuarios
$transaccion->eliminarDatos($consultaSQl);

//6. redirección
encabezado("location:ProductosBodega.php");
?>
