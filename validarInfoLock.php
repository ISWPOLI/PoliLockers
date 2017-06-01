<?php
$id=$_POST['txtId'];
$bloque=$_POST['txtBloque'];
$ubicacion=$_POST['txtUbicacion'];
$descripcion=$_POST['txtDescripcion'];

$conexion=mysqli_connect("localhost", "root", "", "bdlockers");


if($_POST[Agregar]){
    $consulta="INSERT INTO lockers VALUES('$id','$bloque','$ubicacion','','$descripcion','','')";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:admin.html");
}
if($_POST[Borrar]){
    $consulta="DELETE FROM lockers WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:admin.html");
}
if($_POST[Actualizar]){
    $consulta="UPDATE lockers SET bloque='$bloque',ubicacion='$ubicacion',descripcion='$descripcion' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:admin.html");
}
if($_POST[Listar]){
    header("location:listarLockers.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);