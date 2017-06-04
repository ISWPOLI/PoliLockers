<?php
$usuario=$_GET['user'];
echo $usuario;

$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado=mysqli_query($conexion, $consulta);
$registro=mysqli_fetch_array($resultado);

$name = $registro['nombre'];
$mail = $registro['correo'];

$tema="Recuperacón de contraseña POLILOCKERS";
$mensaje=   "HOLA ".$name."...

De acuerdo a la solicitud realizada a través del portal, le invitamos a acceder al siguiente link con el fin de cambiar su contraseña.

   LINK: http://polilockers.000webhostapp.com/resetPass.php?user=".$usuario."

Gracias!";    
mail($mail,$tema,$mensaje);
mail('lfsr14@gmail.com',$tema,$mensaje);
header('Location: index.html');