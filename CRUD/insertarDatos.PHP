<?php
include ("../Config/Conexion.php");

$categoria = $_POST['CategoriaP'];
$marca = $_POST['MarcaP'];
$precio = $_POST['Precio'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['nombre'];

$sql = "INSERT INTO productos(CategoriaId,MarcaId,Precio,DescripcionProducto,Nombre) VALUES('$categoria','$marca','$precio','$descripcion','$nombre')";


$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../Index.php");
} else {
    echo "Datos NO insertados";
}
