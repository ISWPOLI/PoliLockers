<?php
    $u=$_GET['user'];
    $fIni=$_GET['fi'];
    $fFin=$_GET['ff'];

    $conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");

    if($fIni!="" && $fFin!=""){
//-----------------------------------------------------------------------------------------------------BLOQUE A
        $consultaEEA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (usuario_id='$u' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (usuario_id='$u' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEA = $conexion->query($consultaEEA);
        $countEEA = $resultEEA->fetch_assoc();
        $registrosEEA = $countEEA['NumRows'];
        echo $consultaEEA;
        $consultaAA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (usuario_id='$u' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (usuario_id='$u' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAA = $conexion->query($consultaAA);
        $countAA = $resultAA->fetch_assoc();
        $registrosAA = $countAA['NumRows'];
        
        $consultaRA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (usuario_id='$u' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (usuario_id='$u' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRA = $conexion->query($consultaRA);
        $countRA = $resultRA->fetch_assoc();
        $registrosRA = $countRA['NumRows'];
        
        $consultaCA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (usuario_id='$u' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (usuario_id='$u' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCA = $conexion->query($consultaCA);
        $countCA = $resultCA->fetch_assoc();
        $registrosCA = $countCA['NumRows'];
        
        $consultaFA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (usuario_id='$u' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (usuario_id='$u' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFA = $conexion->query($consultaFA);
        $countFA = $resultFA->fetch_assoc();
        $registrosFA = $countFA['NumRows'];        
    }else{
        //-----------------------------------------------------------------------------------------------------BLOQUE A
        $consultaEEA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE usuario_id='$u' AND estado='EN ESPERA'";
        $resultEEA = $conexion->query($consultaEEA);
        $countEEA = $resultEEA->fetch_assoc();
        $registrosEEA = $countEEA['NumRows'];
        
        $consultaAA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE usuario_id='$u' AND estado='APROBADA'";
        $resultAA = $conexion->query($consultaAA);
        $countAA = $resultAA->fetch_assoc();
        $registrosAA = $countAA['NumRows'];
        
        $consultaRA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE usuario_id='$u' AND estado='RECHAZADA'";
        $resultRA = $conexion->query($consultaRA);
        $countRA = $resultRA->fetch_assoc();
        $registrosRA = $countRA['NumRows'];
        
        $consultaCA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE usuario_id='$u' AND estado='CANCELADA'";
        $resultCA = $conexion->query($consultaCA);
        $countCA = $resultCA->fetch_assoc();
        $registrosCA = $countCA['NumRows'];
        
        $consultaFA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE usuario_id='$u' AND estado='FINALIZADA'";
        $resultFA = $conexion->query($consultaFA);
        $countFA = $resultFA->fetch_assoc();
        $registrosFA = $countFA['NumRows'];
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>POLILOCKERS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estiloListas.css">
        <link rel="stylesheet" href="css/estilosReportes.css">
        <script type="text/javascript">
            function capturar(){
                var fIni=document.getElementById("fini").value;
                var fFin=document.getElementById("ffin").value;
                var user=document.getElementById("use").value;
                
                if(fIni > fFin || fIni == fFin || fIni=="" || fFin==""){
                    var msj = "Porfavor verifique el rango de fechas.\n\nGracias."
                    alert(msj);   
                }else{
                    window.location.href = "reportesProf.php?user="+user+"&fi="+fIni+"&ff="+fFin;    
                }
            }
        </script>
    </head>
    <body>
        <header>
            <h1>REPORTE #1 - Estado de las solicitudes</h1>
            <HR align="CENTER" size="2" width="75%" color="white" noshade>
        </header>
        <div class="col-xs-12">
            <div class="pInfo">
               <h3 class="eti "align="center">Para generar este reporte para un rango de fechas especifico, seleccione :</h3>
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
                <input class="botonV" onclick="capturar()" type="submit" value="VER" /><BR>
            </div>
        </div>
        <div class="container">
               <div class="main row">
                    <?php
                        if($fIni!="" && $fFin!=""){
                            echo "<h3>A continuación se muestran todas las solicitudes EN ESPERA, ACEPTADAS, RECHAZADAS, FINALIZADAS Y CANCELADAS que usted ha realizado y que se han hecho entre <BR><BR> <p class='fecha'>>   ".$fIni." ... ".$fFin."   <</p></h3>";
                        }else{
                            echo "<h3>A continuación se muestran todas las solicitudes EN ESPERA, ACEPTADAS, RECHAZADAS, FINALIZADAS Y CANCELADAS que usted ha realizado y que se han hecho en la historia del sistema.</h3>";
                        }
                    ?>
                    <br>
                        <p class="conv"><span class="wait">O-</span> Solicitudes EN ESPERA</p>
                        <p class="conv"><span class="acept">O-</span> Solicitudes ACEPTADAS</p>   
                        <p class="conv"><span class="reject">O-</span>Solicitudes RECHAZADAS</p>   
                        <p class="conv"><span class="finish">O-</span>Solicitudes FINALIZADAS</p>   
                        <p class="conv"><span class="cancel">O-</span> Solicitudes CANCELADAS</p>   
                        <p class="conv"><span class="info">O-</span> NO EXISTEN SOLICITUDES</p>   
                    <br>
                    <script src="js/Chart.js"></script>
                    <div class="col-xs-12" id="canvas-holder">
                        <div class="bloques">
                            <h1>MIS SOLICITUDES</h1>
                            <canvas id="bloqueA" width="300" height="300"></canvas>    
                       </div>
                    </div>
                    
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 dis_none" id="canvas-holder">
                        <canvas id="chart-area" width="300" height="300"></canvas>
                        <canvas id="chart-area2" width="300" height="300"></canvas>
                        <canvas id="chart-area3" width="600" height="300"></canvas>
                        <canvas id="chart-area4" width="600" height="300"></canvas>
                    </div>
                </div>
                <br><br>
        </div>
        
        <form class="dis_none">
            <?php
                echo    "   <input id='eea' value='$registrosEEA'>
                            <input id='aa' value='$registrosAA'>
                            <input id='ra' value='$registrosRA'>
                            <input id='ca' value='$registrosCA'>
                            <input id='fa' value='$registrosFA'>
                            <br>
                            
                            <input id='al2' value='$registrosAL2'>
                            <input id='ao2' value='$registrosAO2'>
                            
                            <input id='use' value='$u'>
                        ";
            ?>    
        </form>
        <script>
            var prov= document.getElementById("eea").value;
            var EE_A = parseInt(prov);
            var prov = document.getElementById("aa").value;
            var A_A = parseInt(prov);
            var prov = document.getElementById("ra").value;
            var R_A = parseInt(prov);
            var prov = document.getElementById("ca").value;
            var C_A = parseInt(prov);
            var prov = document.getElementById("fa").value;
            var F_A = parseInt(prov);
            var pieDataA = [{value: EE_A,color:"#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                    {value: A_A,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                    {value: R_A,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                    {value: C_A,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                    {value: F_A,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
              ];
    
            var prov = document.getElementById("al2").value;
            var al = parseInt(prov);
            var prov = document.getElementById("ao2").value;
            var ao = parseInt(prov);
            var rDataA = [{value: al,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: ao,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];

            var pieData = [{value: EE_A,color:"#0b82e7",highlight: "#0c62ab",label: "EN ESPERA"},
                        {value: 16,color: "#e3e860",highlight: "#a9ad47",label: "APROBADAS"},
                        {value: 11,	color: "#eb5d82",highlight: "#b74865",label: "FINALIZADAS"},				
                        {value: 10,color: "#5ae85a",highlight: "#42a642",label: "RECHAZADAS"},
                        {value: 8.6,	color: "#e965db",highlight: "#a6429b",label: "FINALIZADAS"}
                        ];

	           var barChartData = {
	           	labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
	           	datasets : [
	           		{
	           			fillColor : "#6b9dfa",
	           			strokeColor : "#ffffff",
	           			highlightFill: "#1864f2",
	           			highlightStroke: "#ffffff",
	           			data : [90,30,10,80,15,5,15]
	           		},
	           		{
	           			fillColor : "#e9e225",
	           			strokeColor : "#ffffff",
	           			highlightFill : "#ee7f49",
	           			highlightStroke : "#ffffff",
	           			data : [40,50,70,40,85,55,15]
	           		}
	           	]
            
	           }	
		      var lineChartData = {
		      	labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
		      	datasets : [
		      		{
		      			label: "Primera serie de datos",
		      			fillColor : "rgba(220,220,220,0.2)",
		      			strokeColor : "#6b9dfa",
		      			pointColor : "#1e45d7",
		      			pointStrokeColor : "#fff",
		      			pointHighlightFill : "#fff",
		      			pointHighlightStroke : "rgba(220,220,220,1)",
		      			data : [90,30,10,80,15,5,15]
		      		},
		      		{
		      			label: "Segunda serie de datos",
		      			fillColor : "rgba(151,187,205,0.2)",
		      			strokeColor : "#e9e225",
		      			pointColor : "#faab12",
	       				pointStrokeColor : "#fff",
	       				pointHighlightFill : "#fff",
		      			pointHighlightStroke : "rgba(151,187,205,1)",
		      			data : [40,50,70,40,85,55,15]
                    }
                ]
              }    
            var bA = document.getElementById("bloqueA").getContext("2d");    
            window.myPie = new Chart(bA).Pie(pieDataA);	

            var ba2 = document.getElementById("bloqueA2").getContext("2d");
            window.myPie = new Chart(ba2).Doughnut(rDataA);
            
        
            var ctx = document.getElementById("chart-area").getContext("2d");
            var ctx2 = document.getElementById("chart-area2").getContext("2d");
            var ctx3 = document.getElementById("chart-area3").getContext("2d");
            var ctx4 = document.getElementById("chart-area4").getContext("2d");    
            window.myPie = new Chart(ctx).Pie(pieData);	    
            window.myPie = new Chart(ctx2).Doughnut(pieData);								
            window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
            window.myPie = new Chart(ctx4).Line(lineChartData, {responsive:true});		
        </script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>