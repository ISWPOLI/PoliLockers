<?php
    $u=$_GET['user'];
    $id=$_GET['id'];
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
                var fIni=document.getElementById("fini").value;
                var fFin=document.getElementById("ffin").value;
                var bloque=document.getElementById("bloque_t").value;
                var locker=document.getElementById("idLocker_t").value;
                var user=document.getElementById("user_t").value;
                if(fIni > fFin || fIni == fFin || fIni=="" || fFin==""){
                    var msj = "Porfavor verifique el rango de fechas.\n\nGracias."
                    alert(msj);   
                }else{
                    window.location.href = "solicitud.php?bloque="+bloque+"&id="+locker+"&u="+user+"&fIni="+fIni+"&fFin="+fFin;
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
                                <a class='icon-profesor' href='reportesProf.php?user=$u&fi=&ff='> Reportes</a>
                                ";
                    ?>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>               
        </header>
        <div class="container PL">    
            <h2 id='texto_mapa'> - SOLICITUD DE LOCKER - </h2>
            <HR align="CENTER" size="2" width="75%" color="white" noshade>
            <div class="col-xs-12 col-md-6">
               <div class="pInfo">
                    <p class="etiquetassolicitud">INFO LOCKER</p>  
                    <table class="table table-striped tabla">
                    <?php
                $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
                $consulta="SELECT * FROM lockers WHERE id='$id'";
                $registros=mysqli_query($conexion, $consulta);
                $row=$registros->fetch_array(MYSQLI_BOTH);
                $bloque=$row['bloque'];
                $ubicacion=$row['ubicacion'];
                $descripcion=$row['descripcion'];
                $coordinador=$row['coordinador'];
                echo "  <tr>
                            <td><p class='tit'>Bloque</p></td>
                            <td><p class='res'>$bloque</p></td>
                        </tr> 
                        <tr>
                            <td><p class='tit'>ID</p></td>
                            <td><p class='res'>$id</p></td>
                        </tr> 
                        <tr>
                            <td><p class='tit'>Ubicacion</p></td>
                            <td><p class='res'>$ubicacion</p></td>
                        </tr> 
                        <tr>
                            <td><p class='tit'>Descripcion</p></td>
                            <td><p class='res'>$descripcion</p></td>
                        </tr> 
                        <tr>
                            <td><p class='tit'>Coordinador</p></td>
                            <td><p class='res'>$coordinador</p></td>
                        </tr>";    
            ?>
                   </table>
               </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="pInfo">
                    <div class="col-xs-12 col-sm-6">
                        <form name="fcalen"> 
                            <p class="etiquetassolicitud">FECHA INICIAL</p>    
                            <input type="date" id="fini">
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <form name="fcalen"> 
                            <p class="etiquetassolicitud">FECHA FINAL</p>
                            <input type="date" id="ffin">
                        </form>
                    </div>
                    <input onclick="capturar()" type="submit" value="SOLICITAR" /><BR>
                </div>
            </div>
        </div>
        <form class="datos">
            <?php
                echo    "<input id='idLocker_t' value=$id>
                        <input id='user_t' value=$u>
                        <input id='bloque_t' value=$bloque>";
            ?>
        </form>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>