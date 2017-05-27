<?php
    $u=$_GET['user'];
    $b=$_GET['bloque'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> POLILOCKERS </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estiloProf.css">
        <link rel="stylesheet" href="css/estiloMenu.css">
    </head>
    <body>
       <header>
            <div class="contenedor">
                <h1 class="icon-admin"> Profesor</h1>
                <h1 class="icon-admin"  id="resp"> P</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu "for="menu-bar"></label>
                <nav class="menu">
                    <?php
                        echo "  <a class='icon-profesor' href='prof.php?user=$u'> Solicitar locker</a>
                                ";
                    ?>
                    <a class="icon-profesor" href="reportesProf.php?fi=&ff="> Reportes</a>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>               
       </header>
       <div class="container PL">
               <div class="main row">
                   <div class="cabecera">
                       <?php
                            echo "<h2 id='texto_mapa'> - LOCKERS BLOQUE $b -</h2>";
                       ?>
                       <HR align="CENTER" size="2" width="75%" color="white" noshade>
                        <h4 id='texto_mapa'>Por favor seleccione el locker que desea solicitar...</h4>
                        <br>
                        <p class="conv"><span class="TAKEN">O-</span> Lockers OCUPADOS</p>
                        <p class="conv"><span class="FREE">O-</span> Lockers DISPONIBLES</p>   
                        <br>
                   </div>
                    <?php
                    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
                    $consulta="SELECT * FROM lockers WHERE bloque='$b'";
                    $registros=mysqli_query($conexion, $consulta);
                    while($row = $registros->fetch_array(MYSQLI_BOTH)){
                        $id=$row['id'];
                        $ubicacion=$row['ubicacion'];
                        $ocupado=$row['ocupado'];
                        $descripcion=$row['descripcion'];
                        $coordinador=$row['coordinador'];
                        $profesor=$row['profesor'];
                        if($ocupado==1){
                            $clase="TAKEN";
                            $E="O";
                        }else{
                            $clase="FREE";
                            $E="L";
                        }
                        echo    "<div class='col-xs-4 col-sm-3 col-md-2 col-lg-1 panelLocker'><a href=solicitar_locker.php?id=$id&user=$u>
                                    <p class='etiquetasLocker'>ID: $id</p>
                                    <p class='etiquetasLocker2'>$ubicacion</p>
                                    <div class='panelImagen'>
                                        <p class='etiquetasLocker'><span class='$clase'>'$E'</span></p>
                                    </div>
                                </a></div>";
                    }
                    ?>   
               </div>
            </div>
       <script src="js/jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>