<?php
    $conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
    $consulta="SELECT * FROM bloque";
    $registros=mysqli_query($conexion, $consulta);      
    $consulta1="SELECT * FROM bloque";
    $registros1=mysqli_query($conexion, $consulta1);
    $consulta2="SELECT * FROM bloque";
    $registros2=mysqli_query($conexion, $consulta2);      
    $consulta3="SELECT * FROM usuarios WHERE rol='Coordinador'";
    $registros3=mysqli_query($conexion, $consulta3);   
    $consulta4="SELECT * FROM usuarios WHERE rol='Coordinador' OR rol='Profesor'";
    $registros4=mysqli_query($conexion, $consulta4);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>DECANO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estiloDec.css">
        <link rel="stylesheet" href="css/estiloMenu.css">
        <script type="text/javascript">
            function capturar(){
                var ubic=document.getElementById("l_b").value;
                var coord=document.getElementById("c").value;
                if(ubic!="Seleccione una ubicación..." && coord!="Seleccione un Coordinador..."){
                    window.location.href = "asignCoord.php?ubi="+ubic+"&c="+coord;    
                }else{
                    var msj = "Porfavor verifique su selección.\n\nGracias."
                    alert(msj);   
                }
            }
            function capturar2(){
                var us=document.getElementById("l_b2").value;
                var rol=document.getElementById("c2").value;
                if(us!="Seleccione un usuario..." && rol!="Seleccione un Rol..."){
                    window.location.href = "asignRol.php?user="+us+"&rol="+rol;    
                }else{
                    var msj = "Porfavor verifique su selección.\n\nGracias."
                    alert(msj);   
                }
            }
        </script>
    </head>
    <body>
        <header>
            <div class="contenedor">
                <h1 class="icon-decano">Decano</h1>
                <h1 class="icon-decano" id="resp"> D</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu "for="menu-bar"></label>
                <nav class="menu">
                   <a class="icon-decano" href="reportesDec.php?fIni=&fFin="> Reportes</a>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
        </header>
        <div class="container panelPrincipal">
            <div class="col-xs-12">
                <div class="panelIzq" width=100% height=100%>
                    <h2 class="titulo">Bloques</h2>
                    <HR align="CENTER" size="2" width="75%" color="white" noshade>
<div class="centro" id="f_bloques">
               <?php
                    while($row = $registros1->fetch_array(MYSQLI_BOTH)){
                        echo '  <form>
                                    <label class="tit">Bloque :&nbsp;</label><label class="res">'.$row['letra_bloque'].'</label><br>
                                    <label class="tit">Ubicación:&nbsp;</label><label class="res">'.$row['ubicacion'].'</label><br>
                                    <label class="tit">Coordinador :&nbsp;</label><label class="res">'.$row['coordinador'].'</label><br>
                                </form>';
                    }
                ?>
            </div>
                <table class="table table-striped tabla" border="1">
                    <tr>
                        <td><strong>BLOQUE</strong></td><td><strong>UBICACIÓN</strong></td><td><strong>COORDINADOR</strong></td>
                    </tr>
                    <?php
                        while($row1 = $registros->fetch_array(MYSQLI_BOTH)){
                            echo    '<tr>
                                    <td>'.$row1['letra_bloque'].'</td>
                                    <td>'.$row1['ubicacion'].'</td>
                                    <td>'.$row1['coordinador'].'</td>
                                    </tr>';
                        }
                    ?>
                </table>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panelDer" width=100% height=100%>
                    <h2 class="titulo">Asignar Coordinador a Bloque</h2>
                    <HR align="CENTER" size="2" width="75%" color="white" noshade>
                    <select class="select" id="l_b">
                        <option>Seleccione una ubicación...</option>
                        <?php 
                            while($row2 = $registros2->fetch_array(MYSQLI_BOTH)){
                                echo    '<option>'.$row2['ubicacion'].'</option>';
                            }
                        ?>
                    </select>
                    <select class="select" id="c">
                        <option>Seleccione un Coordinador...</option>
                        <?php 
                            while($row3 = $registros3->fetch_array(MYSQLI_BOTH)){
                                echo    '<option>'.$row3['nombre'].'</option>';
                            }
                        ?>
                    </select><BR>
                    <input onclick="capturar()" type="submit" name="asignar" value="ASIGNAR" /><BR>
                </div>  
            </div>
<div class="col-xs-12 col-sm-6">
                <div class="panelDer" width=100% height=100%>
                    <h2 class="titulo">Cambiar Rol</h2>
                    <HR align="CENTER" size="2" width="75%" color="white" noshade>
                    <select class="select" id="l_b2">
                        <option>Seleccione un usuario...</option>
                        <?php 
                            while($row4 = $registros4->fetch_array(MYSQLI_BOTH)){
                                echo    '<option>'.$row4['nombre'].'</option>';
                            }
                        ?>
                    </select>
                    <select class="select" id="c2">
                        <option>Seleccione un Rol...</option>
                        <option>Profesor</option>
                        <option>Coordinador</option>
                    </select><BR>
                    <input onclick="capturar2()" type="submit" name="asignar" value="ASIGNAR" /><BR>
                </div>  
            </div>
        </div>
    </body>
</html>