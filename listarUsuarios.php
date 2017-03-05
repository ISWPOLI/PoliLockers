<?php
    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
    
    $consulta="SELECT * FROM usuarios";
    $registros=mysqli_query($conexion, $consulta);
        
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>NUEVO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estilosAdm.css">
        <link rel="stylesheet" href="css/estiloMenu.css">
    </head>
    <body>
       <header>
           <div class="contenedor">
                <h1 class="icon-admin"> Lista de usuarios</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu "for="menu-bar"></label>
                <nav class="menu">
                    <a class="icon-profesor" href="adminUser.html"> Administrar Usuarios</a>
                    <a class="icon-locker" href="adminLocker.html"> Administrar Lockers</a>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
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