<?php
$res=$_GET['respuesta'];
$id=$_GET['id'];
$u=$_GET['user'];
$locker=$_GET['lock'];

$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
if($res=="A"){
    $consulta="UPDATE solicitudes SET estado='APROBADA' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET ocupado=1 WHERE id='$locker'";
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET profesor='$u' WHERE id='$locker'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:coor.php?user=$u");
}else if($res=="R"){
    $consulta="UPDATE solicitudes SET estado='RECHAZADA' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:coor.php?user=$u");
}else if($res=="FC"){
    $consulta="UPDATE solicitudes SET estado='FINALIZADA' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET ocupado=0 WHERE id='$locker'";
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET profesor='' WHERE id='$locker'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:historialCoord.php?user=$u");
}else if($res=="FP"){
    $consulta="UPDATE solicitudes SET estado='FINALIZADA' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET ocupado=0 WHERE id='$locker'";
    $resultado=mysqli_query($conexion, $consulta);
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET profesor='' WHERE id='$locker'";
    header("location:historialProf.php?user=$u");
}else if($res=="CP"){
    $consulta="UPDATE solicitudes SET estado='CANCELADA' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $consulta);
    $consulta="UPDATE lockers SET ocupado=0 WHERE id='$locker'";
    $resultado=mysqli_query($conexion, $consulta);
    header("location:historialProf.php?user=$u");
}