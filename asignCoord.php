<?php
if(isset($_GET['l']) && isset($_GET['c'])){
    $bloque=$_GET['l'];
    $coord=$_GET['c'];
}
$conexion=mysqli_connect("localhost", "root", "", "bdlockers");
$consulta="UPDATE bloque SET coordinador='$coord' WHERE letra_bloque='$bloque'";
$registros=mysqli_query($conexion, $consulta);   
$consulta2="UPDATE lockers SET coordinador='$coord' WHERE bloque='$bloque'";
$registros=mysqli_query($conexion, $consulta2);   
header("location:dec.php");    

