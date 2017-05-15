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
        <script>
            function capturar()
            {
                // obtenemos e valor por el numero de elemento
                //var porElementos=document.forms["form1"].elements[4].value;
                // Obtenemos el valor por el id
                //var porId=document.getElementById("seleccion").value;
                // Obtenemos el valor por el Nombre
                //var porNombre=document.getElementsByName("seleccion")[0].value;
                // Obtenemos el valor por el tipo de tag
                //var porTagName=document.getElementsByTagName("select")[0].value;
                // Obtenemos el valor por el nombre de la clase
                //var porClassName=document.getElementsByClassName("formulario_select")[0].value;
                var letra=document.getElementById("b_l").value;
                var coord=document.getElementById("c").value;
                <?php
                    $conexion4=mysqli_connect("localhost", "root", "", "bdlockers");
                    $consulta4="UPDATE bloque SET coordinador='coord' WHERE letra_bloque='letra'";
                    $registros4=mysqli_query($conexion, $consulta3);   
                    
                ?>
                
            }
        </script>
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estiloDec.css">
        <link rel="stylesheet" href="css/estiloMenu.css">
        
    </head>
    <body>
        <header>
            <div class="contenedor">
                <h1 class="icon-decano">Decano</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu "for="menu-bar"></label>
                <nav class="menu">
                    <a class="icon-decano"> -</a>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
            <div style="overflow:auto" class="panelPrincipal" width=100% height=100%>
                <div class="panelIzq" width=100% height=100%>
                    <h2 class="titulo">Bloques</h2>
                <table border="1">
                    <tr>
                        <td>BLOQUE</td><td>COORDINADOR</td>
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
                <div class="panelDer" width=100% height=100%>
                    <h2 class="titulo">Asignar Coordinador</h2>
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
                    <input type="submit" name="asignar" value="ASIGNAR" onclick="capturar()"/><BR>
                    
                </div>  
        </header>
    </body>
</html>