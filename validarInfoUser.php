<?php
$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
$usuario=$_POST['txtUser'];
$clave=$_POST['txtPass'];
$nombre=$_POST['txtNombre'];
$rol=$_POST['txtRol'];
$correo=$_POST['txtCorreo'];
if($_POST[Agregar]){
    $consulta="INSERT INTO usuarios VALUES('$usuario','$clave','$nombre','$rol','$correo')";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:admin.html");
}
if($_POST[Borrar]){
    $consulta="DELETE FROM usuarios WHERE usuario='$usuario'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:admin.html");
}
if($_POST[Actualizar]){
    $consulta="UPDATE usuarios SET clave='$clave',nombre='$nombre',rol='$rol',correo='$correo' WHERE usuario='$usuario'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:admin.html");
}
if($_POST[Listar]){
    header("location:listarUsuarios.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);