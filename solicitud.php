<?php
    $bloq=$_GET['bloque'];
    $id_l=$_GET['id'];
    $user=$_GET['u'];
    $fecha_ini=$_GET['fIni'];
    $fecha_fin=$_GET['fFin'];
    
    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");

    $consulta="SELECT coordinador FROM bloque WHERE letra_bloque='$bloq'";
    $resultado=mysqli_query($conexion, $consulta);
    $coord=mysqli_fetch_row($resultado);

    $consulta="SELECT usuario FROM usuarios WHERE nombre='$coord[0]'";
    $resultado=mysqli_query($conexion, $consulta);
    $us_c=mysqli_fetch_row($resultado);

    $consulta="INSERT INTO solicitudes VALUES('','$bloq','$id_l','$user','$us_c[0]','$fecha_ini','$fecha_fin','EN ESPERA')";
    $registros=mysqli_query($conexion, $consulta);
    
    header("location:prof.php?user=$user&nc=$coord[0]&uc=$us_c[0]&b=$bloq");