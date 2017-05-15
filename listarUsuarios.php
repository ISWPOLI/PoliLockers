<?php
    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
    $consulta="SELECT * FROM usuarios";
    $registros=mysqli_query($conexion, $consulta);      
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/estiloListas.css">
    </head>
    <body>
       <header>
            <h1>LISTADO DE USUARIOS</h1>
            <section>
            <table border="1">
                <tr>
                    <td>USUARIO</td><td>CONTRASEÑA</td><td>NOMBRE</td><td>ROL</td><td>CORREO</td>
                </tr>
                <?php
                    while($row = $registros->fetch_array(MYSQLI_BOTH)){
                        echo    '<tr>
                                <td>'.$row['usuario'].'</td>
                                <td>'.$row['clave'].'</td>
                                <td>'.$row['nombre'].'</td>
                                <td>'.$row['rol'].'</td>
                                <td>'.$row['correo'].'</td>
                                </tr>';
                    }
                ?>
            </table>
        </section>
       </header>
    </body>
</html>