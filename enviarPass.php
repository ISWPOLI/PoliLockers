<?php
$usuario=$_POST['usuario'];

$conexion=mysqli_connect("localhost", "root", "", "bdlockers");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario'";
$resultado=mysqli_query($conexion, $consulta);
$registro=mysqli_fetch_array($resultado);

$pass = $registro['clave'];
$name = $registro['nombre'];
$rol = $registro['rol'];
$mail = $registro['correo'];

$tema="Recuperacón de contraseña POLILOCKERS";
$mensaje=   "De acuerdo a la solicitud realizada a traves del portal, le recordamos<br>
            que sus datos registrados en la plataforma son:
            Usuario: $usuario<br>
            Contraseña: $pass<br>
            Nombre: $name<br>
            Rol: $rol<br>
            <br>
            Si desea cambiar esta información, por favor pongase en contacto con el<br>
            administrador del portal en:
            > admin.polilockers@poligran.edu.co
            Gracias!
            ";    
mail($mail,$tema,$mensaje,$headers);
mail('lfsr14@gmail.com',$tema,$mensaje);

header("location:index.html");