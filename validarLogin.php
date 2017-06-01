<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

// conexion con db
$conexion=mysqli_connect("localhost", "root", "", "bdlockers");

if($_POST[ingresar]){
    $consulta="SELECT rol FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
    $resultado=mysqli_query($conexion, $consulta);

    $rol=mysqli_fetch_row($resultado);
    
    if($rol[0] == 'Administrador'){
        header("location:admin.html");                
    }else if($rol[0] == 'Decano'){
        header("location:dec.php");                
    }else if($rol[0] == 'Coordinador'){
        header("location:coor.php?user=$usuario");                
    }else if($rol[0] == 'Profesor'){
        header("location:prof.php?user=$usuario");                
    }else{
        header("location:index.html");    
    }
    
}
if($_POST[reestablecer]){
    header("location:index.html");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
