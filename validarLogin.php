<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

// conexion con db
$conexion=mysqli_connect("localhost", "root", "", "bdlockers");

if($_POST[ingresar]){
    $consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);
    
    if($filas==1){
        header("location:admin.html");            
    }else{
        header("location:index.html");
    }
}
if($_POST[reestablecer]){
    header("location:index.html");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
