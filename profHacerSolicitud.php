<?php
$id=$_POST['lck'];

$conexion=mysqli_connect("localhost", "root", "", "bdlockers");

if($_POST[Solicitar]){
    $consulta="INSERT INTO solicitudes VALUES('EN ESPERA','$id','user')";
    $resultado=mysqli_query($conexion, $consulta);
    header("prof.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);