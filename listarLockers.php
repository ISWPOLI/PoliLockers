<?php
$conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
    $consulta="SELECT * FROM lockers";
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
           <h1>LISTADO DE LOCKERS</h1>
           <HR align="CENTER" size="2" width="75%" color="white" noshade>
            <section class="container">
            <div id="f_lockers">
               <?php
                    while($row = $registros1->fetch_array(MYSQLI_BOTH)){
                        echo '  <form>
                                    <label class="tit">Id :&nbsp;</label><label class="res">'.$row['id'].'</label><br>
                                    <label class="tit">Bloque :&nbsp;</label><label class="res">'.$row['bloque'].'</label><br>
                                    <label class="tit">Ubicacion :&nbsp;</label><label class="res">'.$row['ubicacion'].'</label><br>
                                    <label class="tit">Descripcion :&nbsp;</label><label class="res">'.$row['descripcion'].'</label><br>
                                </form>';
                    }
                ?>
            </div>
            <table class="table table-striped tabla" id="t_lockers" border="1">
               
                <tr>
                    <td><strong>ID</strong></td><td><strong>BLOQUE</strong></td><td><strong>UBICACION</strong></td><td><strong>DESCRIPCION</strong></td>
                </tr>
                <?php
                while($row = $registros->fetch_array(MYSQLI_BOTH)){
                    echo    '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['bloque'].'</td>
                            <td>'.$row['ubicacion'].'</td>
                            <td>'.$row['descripcion'].'</td>
                            
                            </tr>';
                }
                ?>
            </table>
        </section>
       </header>
    </body>
</html>