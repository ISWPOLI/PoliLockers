<?php
    $u=$_GET['user'];
    $b=$_GET['bloque'];
    $sec=$_GET['seccion'];
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
        <script type="text/javascript">
            function capturar(){
                var seccion=document.getElementById("c").value;
                var usuario=document.getElementById("us").value;
                if(seccion!="Seleccione una sección..." && usuario!=""){
                    window.location.href = "vistaLockers.php?bloque=I&user="+usuario+"&seccion="+seccion;
                }else{
                    alert("Por favor verifique su selección.\n\nGracias.");
                }
            }
        </script>
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
                                <a class='icon-profesor' href='historialProf.php?user=$u'> Historial de solicitudes </a>
                                <a class='icon-profesor' href='reportesProf.php?user=$u&fi=&ff='> Reportes</a>
                                ";
                    ?>                   
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
<div class="col-xs-12 col-sm-6">
                        <br><br><br>
                        <p class="conv"><span class="TAKEN">O-</span> Lockers OCUPADOS</p>
                        <p class="conv"><span class="FREE">O-</span> Lockers DISPONIBLES</p>   
                   </div>
<div class="col-xs-12 col-sm-6">
            <div class="pInfo">
               <h4 class="eti "align="center" color="#ffff">Para ver los lockers de una sección, seleccione :</h4>
                <div class="col-xs-12">
                    <select class="select" id="c">
                        <option>Seleccione una sección...</option>
                        <option>F. Ingeniería</option>
                        <option>F. Mercadeo</option>
                        <option>F. Ciencias Adm.</option>
                        <option>F. Idiomas</option>
                        <option>Sala de Profesores</option>
                        <option>Sótano</option>
                    </select>
                </div>
                <input onclick="capturar()" class="botonV"type="submit" value="FILTRAR" /><BR>
            </div>
        </div>
                   </div>
                    <?php
                    $conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
                    if($sec==""){
                    $consulta="SELECT * FROM lockers WHERE bloque='$b' ORDER BY descripcion DESC,ubicacion,id";
                    $registros=mysqli_query($conexion, $consulta);
                    }else{
                    $consulta="SELECT * FROM lockers WHERE ubicacion ='$sec'";
                    $registros=mysqli_query($conexion, $consulta);
                    }
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
<form class="dis_none">
<?php
                echo    "   <input id='us' value='$u'>";
?>
</form>
       <script src="js/jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>