<?php
$id=$_POST['txtid'];
$bloque=$_POST['txtBloque'];
$estado=$_POST['txtEstado'];
$coord=$_POST['txtCoordinador'];
$prof=$_POST['txtDocente'];

$conexion=mysqli_connect("localhost", "root", "", "bdlockers");


if($_POST[Agregar]){
    $consulta="INSERT INTO lockers VALUES('$id','$bloque','$estado','$coord','$prof')";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:adminLocker.html");
}
if($_POST[Borrar]){
    $consulta="DELETE FROM lockers WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:adminLocker.html");
}
if($_POST[Actualizar]){
    $consulta="UPDATE lockers SET bloque='$bloque',estado='$estado',coordinador='$coord',profesor='$prof' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:adminLocker.html");
}
if($_POST[Listar]){
    header("location:listarLockers.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);