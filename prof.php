<?php
    $u=$_GET['user'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title> POLILOCKERS </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/estiloMenu.css">
        <link rel="stylesheet" href="css/estiloProf.css">
        
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
                        echo "  <a class='icon-profesor' href='historialProf.php?user=$u'> Historial de solicitudes </a>
                                ";
                    ?>
                    <a class="icon-profesor" href="reportesProf.php?fi=&ff="> Reportes</a>
                    <a class="icon-salir" href="index.html"> Salir</a>
                </nav>
            </div>
        </header>
        <div style="overflow:auto" class="panelPrincipal" width=100% height=100%>
                <h2 id="texto_mapa"> MAPA I.U. POLITECNICO GRANCOLOMBIANO</h2>
                <HR align="CENTER" size="2" width="75%" color="white" noshade>
                <h4 id="texto_mapa"> A continuación, por favor seleccione el bloque en el cual desea apartar su locker, para mas opciones dirijase al   menu que se encuentra en la esquina superior derecha.</h4>
                <img  id="mapaPoli"src="./images/mapa_poli.png" alt="Mapa BLoques IUPG-Polilockers" usemap="#mapa">
                <?php
                    echo "  <form id='f_res'>
                                <a class='lblBloques' href='vistaLockers.php?bloque=A&user=$u'><label class='btn'>BLOQUE A</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=B&user=$u'><label class='btn'>BLOQUE B</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=C&user=$u'><label class='btn'>BLOQUE C</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=D&user=$u'><label class='btn'>BLOQUE D</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=E&user=$u'><label class='btn'>BLOQUE E</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=F&user=$u'><label class='btn'>BLOQUE F</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=G&user=$u'><label class='btn'>BLOQUE G</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=H&user=$u'><label class='btn'>BLOQUE H<label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=I&user=$u'><label class='btn'>BLOQUE I</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=J&user=$u'><label class='btn'>BLOQUE J</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=K&user=$u'><label class='btn'>BLOQUE K</label></a>
                                <BR><BR>
                                <a class='lblBloques' href='vistaLockers.php?bloque=L&user=$u'><label class='btn'>BLOQUE L</label></a>
                                <BR><BR>
                            </form>";    
                ?>
                <map name="mapa">
                  <?php
                        echo    "<area class='areaMapa' id='bloqueA' alt='Bloque A' shape='circle' coords='350,380,40' href='vistaLockers.php?                 bloque=A&user=$u'>
                                <area class='areaMapa' id='bloqueB' alt='Bloque B' shape='circle' coords='310,300,40' href='vistaLockers.php?bloque=B&user=$u'>
                                <area class='areaMapa' id='bloqueC' alt='Bloque C' shape='circle' coords='150,260,40' href='vistaLockers.php?bloque=C&user=$u'>
                                <area class='areaMapa' id='bloqueD' alt='Bloque D' shape='circle' coords='300,210,30' href='vistaLockers.php?bloque=D&user=$u'>
                                <area class='areaMapa' id='bloqueE' alt='Bloque E' shape='circle' coords='220,200,30' href='vistaLockers.php?bloque=E&user=$u'>
                                <area class='areaMapa' id='bloqueF' alt='Bloque F' shape='circle' coords='130,155,40' href='vistaLockers.php?bloque=F&user=$u'>
                                <area class='areaMapa' id='bloqueG' alt='Bloque G' shape='circle' coords='180,90,40' href='vistaLockers.php?bloque=G&user=$u'>
                                <area class='areaMapa' id='bloqueH' alt='Bloque H' shape='circle' coords='330,130,40' href='vistaLockers.php?bloque=H&user=$u'>
                                <area class='areaMapa' id='bloqueI' alt='Bloque I' shape='circle' coords='265,385,40' href='vistaLockers.php?bloque=I&user=$u'>
                                <area class='areaMapa' id='bloqueJ' alt='Bloque J' shape='circle' coords='380,50,40' href='vistaLockers.php?bloque=J&user=$u'>
                                <area class='areaMapa' id='bloqueK' alt='Bloque K' shape='circle' coords='530,330,30' href='vistaLockers.php?bloque=K&user=$u'>
                                <area class='areaMapa' id='bloqueL' alt='Bloque L' shape='circle' coords='470,200,40' href='vistaLockers.php?bloque=L&user=$u'>";
                    ?>
                   <!--ORIGINALES
                   <area class="areaMapa" id="bloqueB" alt="Bloque B" shape="circle" coords="310,300,40" href="vistaLockers.php?bloque=B">
                   <area class=areaMapa id="bloqueC" alt="Bloque C" shape="circle" coords="150,260,40" href="vistaLockers.php?bloque=C">
                   <area class=areaMapa id="bloqueD" alt="Bloque D" shape="circle" coords="300,210,30" href="vistaLockers.php?bloque=D">
                   <area class=areaMapa id="bloqueE" alt="Bloque E" shape="circle" coords="220,200,30" href="vistaLockers.php?bloque=E">
                   <area class=areaMapa id="bloqueF" alt="Bloque F" shape="circle" coords="130,155,40" href="vistaLockers.php?bloque=F">
                   <area class=areaMapa id="bloqueG" alt="Bloque G" shape="circle" coords="180,90,40" href="vistaLockers.php?bloque=G">
                   <area class=areaMapa id="bloqueH" alt="Bloque H" shape="circle" coords="330,130,40" href="vistaLockers.php?bloque=H">
                   <area class=areaMapa id="bloqueI" alt="Bloque I" shape="circle" coords="265,385,40" href="vistaLockers.php?bloque=I">
                   <area class=areaMapa id="bloqueJ" alt="Bloque J" shape="circle" coords="380,50,40" href="vistaLockers.php?bloque=J">
                   <area class=areaMapa id="bloqueK" alt="Bloque K" shape="circle" coords="530,330,30" href="vistaLockers.php?bloque=K">
                   <area class=areaMapa id="bloqueL" alt="Bloque L" shape="circle" coords="470,200,40" href="vistaLockers.php?bloque=L">
                   <!---->
                   <!--AREAS SIN LOCKERS
                   <area class=areaMapa id="canchaMultiple" alt="Cancha Multiple" shape="circle" coords="90,380,40" href="vistaLockers.php?bloque=CM">
                   <area class=areaMapa id="Cancha Tenis" alt="Cancha Tenis" shape="circle" coords="610,330,30" href="vistaLockers.php?bloque=CT">
                   <area class=areaMapa id="Biblioteca" alt="Biblioteca" shape="circle" coords="550,260,30" href="vistaLockers.php?bloque=BB">
                   -->
                </map>
            </div>
    </body>
</html>