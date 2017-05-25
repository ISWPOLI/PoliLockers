<?php
    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
    $consulta="SELECT * FROM usuarios";
    $registros=mysqli_query($conexion, $consulta);      
    $registros1=mysqli_query($conexion, $consulta);  
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>POLILOCKERS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estiloListas.css">
    </head>
    <body>
       <header>
            <h1>LISTADO DE USUARIOS</h1>
            <HR align="CENTER" size="2" width="75%" color="white" noshade>
            <section class="container">
            <div id="f_users">
               <?php
                    while($row = $registros1->fetch_array(MYSQLI_BOTH)){
                        echo '  <form>
                                    <label class="tit">Usuario :&nbsp;</label><label class="res">'.$row['usuario'].'</label><br>
                                    <label class="tit">Nombre :&nbsp;</label><label class="res">'.$row['nombre'].'</label><br>
                                    <label class="tit">Rol :&nbsp;</label><label class="res">'.$row['rol'].'</label><br>
                                    <label class="tit">Correo :&nbsp;</label><label class="res">'.$row['correo'].'</label><br>
                                </form>';
                    }
                ?>
            </div>
            <table class="table table-striped tabla" id="t_users" border="1">
                <tr>
                    <td><strong>USUARIO</strong></td><td><strong>NOMBRE</strong></td><td><strong>ROL</strong></td><td><strong>CORREO</strong></td>
                </tr>
                <?php
                    while($row = $registros->fetch_array(MYSQLI_BOTH)){
                        echo    '<tr>
                                <td>'.$row['usuario'].'</td>
                                <td>'.$row['nombre'].'</td>
                                <td>'.$row['rol'].'</td>
                                <td>'.$row['correo'].'</td>
                                </tr>';
                    }
                ?>
            </table>
        </section>
       </header>
       <script src="js/jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>