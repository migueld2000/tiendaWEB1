<?php 
include("Basededatos.php");
if(isset($_POST["botonEnvio"]))
{
    //1.recibir los datos
    $foto=$_POST["foto"];
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];

    //2.crear una copia de la clase BD
    //crear un objeto de la clase BD
    $transaccion=new Basededatos();

    //3.crear una consulta sql para agregar datos
    $consultaSQL="INSERT INTO productos(Imagen, Nombre, Marca, Precio, Descripcion) VALUES ('$foto','$nombre','$marca',' $precio','$descripcion')";

    //4.Utilizar el metodo deagregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    //6. redirecion

    header("location:Productos.php");

}
?>
