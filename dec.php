<?php
    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
    $consulta="SELECT * FROM bloque";
    $registros=mysqli_query($conexion, $consulta);      
    $consulta2="SELECT * FROM bloque";
    $registros2=mysqli_query($conexion, $consulta2);      
    $consulta3="SELECT * FROM usuarios WHERE rol='Coordinador'";
    $registros3=mysqli_query($conexion, $consulta3);   
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
                var letra=document.getElementById("l_b").value;
                var coord=document.getElementById("c").value;
                window.location.href = "asignCoord.php?l="+letra+"&c="+coord;
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
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
        </header>
        <div class="container panelPrincipal">
            <div class="col-xs-12 col-md-6">
                <div class="panelIzq" width=100% height=100%>
                    <h2 class="titulo">Bloques</h2>
                    <HR align="CENTER" size="2" width="75%" color="white" noshade>
                <table class="table table-striped tabla" border="1">
                    <tr>
                        <td><strong>BLOQUE</strong></td><td><strong>COORDINADOR</strong></td>
                    </tr>
                    <?php
                        while($row1 = $registros->fetch_array(MYSQLI_BOTH)){
                            echo    '<tr>
                                    <td>'.$row1['letra_bloque'].'</td>
                                    <td>'.$row1['coordinador'].'</td>
                                    </tr>';
                        }
                    ?>
                </table>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="panelDer" width=100% height=100%>
                    <h2 class="titulo">Asignar Coordinador</h2>
                    <HR align="CENTER" size="2" width="75%" color="white" noshade>
                    <select class="select" id="l_b">
                        <option>Seleccione un Bloque...</option>
                        <?php 
                            while($row2 = $registros2->fetch_array(MYSQLI_BOTH)){
                                echo    '<option>'.$row2['letra_bloque'].'</option>';
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
        </div>
    </body>
</html>