<?php
if(isset($_GET['ubi']) && isset($_GET['c'])){
    $u=$_GET['ubi'];
    $coord=$_GET['c'];
}
$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
$consulta="UPDATE bloque SET coordinador='$coord' WHERE ubicacion='$u'";
$registros=mysqli_query($conexion, $consulta);   
$consulta2="UPDATE lockers SET coordinador='$coord' WHERE ubicacion='$u'";
$registros=mysqli_query($conexion, $consulta2);   
header("location:dec.php");