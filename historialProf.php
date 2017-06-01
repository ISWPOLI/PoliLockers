<?php
    $u=$_GET['user'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>POLILOCKERS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estiloCoor.css">
        <link rel="stylesheet" href="css/estiloMenu.css">
    </head>
    <body>
        <header>
            <div class="contenedor">
                <h1 class="icon-admin"> Profesor</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu "for="menu-bar"></label>
                <nav class="menu">
                    <?php
                        echo "  <a class='icon-profesor' href='prof.php?user=$u'> Solicitar locker</a>
                                <a class='icon-profesor' href='reportesProf.php?user=$u&fi=&ff='> Reportes</a>
                                ";
                    ?>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
        </header>
        <div class="container PL">    
            <h2 id='titulo'> - HISTORIAL DE SOLICITUDES - </h2>
            <HR id="linea" align="CENTER" size="2" width="75%" color="white" noshade>
            <div class="main row">
                <div class='col-xs-12'>
                   <div class="resp">
                        <?php
                        $conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
                        $consulta="SELECT * FROM solicitudes WHERE usuario_id='$u'";
                        $registros=mysqli_query($conexion, $consulta);
                        while($row = $registros->fetch_array(MYSQLI_BOTH)){
                            $id=$row['id'];
                            $bl=$row['bloque'];
                            $locker=$row['locker_id'];
                            $user=$row['usuario_id'];
                            $fini=$row['fecha_inicio'];
                            $ffin=$row['fecha_fin'];
                            $e=$row['estado'];
                            if($e=="EN ESPERA"){
                                $c="wait";
                                $dis="dis_none";
                                $dis1="dis_ok";
                            }if($e=="APROBADA"){
                                $c="check";
                                $dis="dis_ok";
                                $dis1="dis_none";
                            }else if($e=="RECHAZADA"){
                                $c="reject";
                                $dis="dis_none";
                                $dis1="dis_none";
                            }else if($e=="FINALIZADA"){
                                $c="finish";
                                $dis="dis_none";
                                $dis1="dis_none";
                            }else if($e=="CANCELADA"){
                                $c="cancel";
                                $dis="dis_none";
                                $dis1="dis_none";
                            }
                            echo    "   <form>
                                            <label class='tit'>ID SOLICITUD :&nbsp</label><label class='res'>$id</label><BR>
                                            <label class='tit'>ESTADO :&nbsp</label><label><p class='$c'>$e</p></label><BR>
                                            <label class='tit'>BLOQUE :&nbsp</label><label class='res'>$bl</label><BR>
                                            <label class='tit'>LOCKER :&nbsp</label><label class='res'>$locker</label><BR>
                                            <label class='tit'>USUARIO :&nbsp</label><label class='res'>$user</label><BR>
                                            <label class='tit'>FECHA INICIAL :&nbsp</label><label class='res'>$fini</label><BR>
                                            <label class='tit'>FECHA FINAL :&nbsp</label><label class='res'>$ffin</label><BR>
                                            <a href='cerrarSolicitud.php?respuesta=CP&id=$id&user=$u&lock=$locker'><input id='$dis1' type='submit' value='CANCELAR'/></a>
                                            <a href='cerrarSolicitud.php?respuesta=FP&id=$id&user=$u&lock=$locker'><label class='btn r'  id='$dis'>FINALIZAR</label></a>
                                        </form>";                             
                            }
                        ?>
                    </div>
                    <table class="table table-striped tabla" id="t_coord">
                        <tr>
                            <td><strong>ID SOLICITUD</strong></td>
                            <td><strong>ESTADO</strong></td>
                            <td><strong>BLOQUE</strong></td>
                            <td><strong>LOCKER</strong></td>
                            <td><strong>USUARIO</strong></td>
                            <td><strong>FECHA INICIO</strong></td>
                            <td><strong>FECHA FIN</strong></td>
                            <td></td>
                        </tr>
                        <?php
                        $conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
                        $consulta="SELECT * FROM solicitudes WHERE usuario_id='$u'";
                        $registros=mysqli_query($conexion, $consulta);
                        while($row = $registros->fetch_array(MYSQLI_BOTH)){
                            $id=$row['id'];
                            $bl=$row['bloque'];
                            $locker=$row['locker_id'];
                            $user=$row['usuario_id'];
                            $fini=$row['fecha_inicio'];
                            $ffin=$row['fecha_fin'];
                            $e=$row['estado'];
                            if($e=="EN ESPERA"){
                                $c="wait";
                                $dis="dis_none";
                                $dis1="dis_ok";
                            }if($e=="APROBADA"){
                                $c="check";
                                $dis="dis_ok";
                                $dis1="dis_none";
                            }else if($e=="RECHAZADA"){
                                $c="reject";
                                $dis="dis_none";
                                $dis1="dis_none";
                            }else if($e=="FINALIZADA"){
                                $c="finish";
                                $dis="dis_none";
                                $dis1="dis_none";
                            }else if($e=="CANCELADA"){
                                $c="cancel";
                                $dis="dis_none";
                                $dis1="dis_none";
                            }
                            echo    "   <tr>    
                                    <td>$id</td>
                                    <td><p class='$c'>$e</p></td>
                                    <td>$bl</td>
                                    <td>$locker</td>
                                    <td>$user</td>
                                    <td>$fini</td>
                                    <td>$ffin</td>
                                    <td>
                                    <a href='cerrarSolicitud.php?respuesta=CP&id=$id&user=$u&lock=$locker'><input id='$dis1' type='submit' value='CANCELAR'/></a>
                                    <a href='cerrarSolicitud.php?respuesta=FP&id=$id&user=$u&lock=$locker'><input class='r' id='$dis' type='submit' value='FINALIZAR'/></a>
                                    </td>
                                    </tr>";                             
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>