<?php
    $u=$_GET['user'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>COORDINADOR</title>
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
                <h1 class="icon-admin"> Coordinador</h1>
                <h1 class="icon-admin" id="resp"> C</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu "for="menu-bar"></label>
                <nav class="menu">
                   <?php
                        echo "  <a class='icon-profesor' href='historialCoord.php?user=$u'> Historial de solicitudes</a>
                                <a class='icon-admin' href='reportesCoord.php?user=$u&fi=&ff='> Reportes</a>
                                ";
                    ?>
                    
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
        </header>
        <div class="container PL">    
            <h2 id='titulo'> - SOLICITUDES PENDIENTES - </h2>
            <HR id="linea" align="CENTER" size="2" width="75%" color="white" noshade>
            <div class="main row">
                <div class='col-xs-12'>
                    <div class="resp">
                        <?php
                        $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
                        $consulta="SELECT * FROM solicitudes WHERE u_coord='$u' and estado='EN ESPERA'";
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
                            }else if($e=="APROBADA"){
                                $c="check";
                            }else if($e=="RECHAZADA"){
                                $c="reject";
                            }else if($e=="FINALIZADA"){
                                $c="finish";
                            }
                            $consulta2="SELECT * FROM lockers WHERE id='$locker'";
                            $registro=mysqli_query($conexion, $consulta2);
                            while($row = $registro->fetch_array(MYSQLI_BOTH)){
                                $ocupado=$row['ocupado'];
                                if($ocupado==1){
                                    $clase="TAKEN";
                                    $E="O";
                                }else{
                                    $clase="FREE";
                                    $E="L";
                                }    
                            }
                            
                            echo    "   <form>
                                            <p class='etiquetasLocker'><span class='$clase'>'$E'</span></p>
                                            <label class='tit'>ID SOLICITUD :&nbsp</label><label class='res'>$id</label><BR>
                                            <label class='tit'>ESTADO :&nbsp</label><label><p class='$c'>$e</p></label><BR>
                                            <label class='tit'>BLOQUE :&nbsp</label><label class='res'>$bl</label><BR>
                                            <label class='tit'>LOCKER :&nbsp</label><label class='res'>$locker</label><BR>
                                            <label class='tit'>USUARIO :&nbsp</label><label class='res'>$user</label><BR>
                                            <label class='tit'>FECHA INICIAL :&nbsp</label><label class='res'>$fini</label><BR>
                                            <label class='tit'>FECHA FINAL :&nbsp</label><label class='res'>$ffin</label><BR>
                                            <a href='cerrarSolicitud.php?respuesta=A&id=$id&user=$u&lock=$locker'><label class='btn'>ACEPTAR</label></a><BR>
                                            <a href='cerrarSolicitud.php?respuesta=R&id=$id&user=$u&lock=$locker'><label class='btn' id='r'>RECHAZAR</label></a><BR>
                                        </form>";                             
                            }
                        ?>
                    </div>                       
                    </table>
                    <table class="table table-striped tabla" id="t_coord">
                        <tr>
                           <td></td>
                            <td><strong>ID SOLICITUD</strong></td>
                            <td><strong>ESTADO</strong></td>
                            <td><strong>BLOQUE</strong></td>
                            <td><strong>LOCKER</strong></td>
                            <td><strong>USUARIO</strong></td>
                            <td><strong>FECHA INICIO</strong></td>
                            <td><strong>FECHA FIN</strong></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                        $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
                        $consulta="SELECT * FROM solicitudes WHERE u_coord='$u' and estado='EN ESPERA'";
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
                            }else if($e=="APROBADA"){
                                $c="check";
                            }else if($e=="RECHAZADA"){
                                $c="reject";
                            }else if($e=="FINALIZADA"){
                                $c="finish";
                            }
                            $consulta2="SELECT * FROM lockers WHERE id='$locker'";
                            $registro=mysqli_query($conexion, $consulta2);
                            while($row = $registro->fetch_array(MYSQLI_BOTH)){
                                $ocupado=$row['ocupado'];
                                if($ocupado==1){
                                    $clase="TAKEN";
                                    $E="O";
                                }else{
                                    $clase="FREE";
                                    $E="L";
                                }    
                            }
                            echo    "   <tr>    
                                    <td><p class='etiquetasLocker'><span class='$clase'>'$E'</span></p></td>
                                    <td>$id</td>
                                    <td><p class='$c'>$e</p></td>
                                    <td>$bl</td>
                                    <td>$locker</td>
                                    <td>$user</td>
                                    <td>$fini</td>
                                    <td>$ffin</td>
                                    <td><a href='cerrarSolicitud.php?respuesta=A&id=$id&user=$u&lock=$locker'><input type='submit' value='ACEPTAR'/></a></td>
                                    <td><a href='cerrarSolicitud.php?respuesta=R&id=$id&user=$u&lock=$locker'><input class='r' type='submit' value='RECHAZAR'/></a></td>
                                    </tr>";                             
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>