<?php
$user=$_GET['user'];
$pass=$_GET['name'];

$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
$consulta="UPDATE usuarios SET clave='$pass' WHERE usuario='$user'";
$registros=mysqli_query($conexion, $consulta);   
header("location:index.html");