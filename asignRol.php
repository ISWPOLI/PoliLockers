<?php
if(isset($_GET['user']) && isset($_GET['rol'])){
    $u=$_GET['user'];
    $r=$_GET['rol'];
}
$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
$consulta="UPDATE usuarios SET rol='$r' WHERE nombre='$u'";
$registros=mysqli_query($conexion, $consulta);

header("Location:dec.php");