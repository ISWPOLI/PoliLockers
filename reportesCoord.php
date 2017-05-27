<?php
    $fIni=$_GET['fi'];
    $fFin=$_GET['ff'];

    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");

    if($fIni!="" && $fFin!=""){
           
    }else{
        
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
    </head>
    <body>
        <header>
            <h1>REPORTE #1 - Estado de las solicitudes</h1>
            <HR align="CENTER" size="2" width="75%" color="white" noshade>
        </header>
        <div class="container">
               <div class="main row">
                    <?php
                        if($fIni!="" && $fFin!=""){
                            echo "<h3>A continuación se muestran todas solicitudes EN ESPERA, ACEPTADAS, RECHAZADAS, FINALIZADAS Y CANCELADAS por cada bloque que se han hecho entre ".$fIni." y ".$fFin.".</h3>";
                        }else{
                            echo "<h3>A continuación se muestran todas solicitudes EN ESPERA, ACEPTADAS, RECHAZADAS, FINALIZADAS Y CANCELADAS por cada bloque que se han hecho en la historia del sistema.</h3>";
                        }
                    ?>
                    
                    <script src="js/Chart.js"></script>
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 dis_none" id="canvas-holder">
                        <canvas id="chart-area" width="300" height="300"></canvas>
                        <canvas id="chart-area2" width="300" height="300"></canvas>
                        <canvas id="chart-area3" width="600" height="300"></canvas>
                        <canvas id="chart-area4" width="600" height="300"></canvas>
                    </div>
                </div>
        </div>
        <h1>REPORTE #2 - Estado de los Lockers</h1>
        <HR align="CENTER" size="2" width="75%" color="white" noshade>               
        <h3 align="center">A continuación se muestra la cantidad de lockers DISPONIBLES y OCUPADOS en toda la universidad.</h3>
        <div class="container">
            <div class="main row">
                <script src="js/Chart.js"></script>
                        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 dis_none" id="canvas-holder">
                            <canvas id="chart-area" width="300" height="300"></canvas>
                            <canvas id="chart-area2" width="300" height="300"></canvas>
                            <canvas id="chart-area3" width="600" height="300"></canvas>
                            <canvas id="chart-area4" width="600" height="300"></canvas>
                        </div>
            </div>
        </div>
        <form class="dis_none">
                
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
    
            var prov = document.getElementById("eeb").value;
            var EE_B = parseInt(prov);
            var prov = document.getElementById("ab").value;
            var A_B = parseInt(prov);
            var prov = document.getElementById("rb").value;
            var R_B = parseInt(prov);
            var prov = document.getElementById("cb").value;
            var C_B = parseInt(prov);
            var prov = document.getElementById("fb").value;
            var F_B = parseInt(prov);
            var pieDataB= [{value: EE_B,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_B,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_B,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_B,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_B,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            
            var prov = document.getElementById("eec").value;
            var EE_C = parseInt(prov);
            var prov = document.getElementById("ac").value;
            var A_C = parseInt(prov);
            var prov = document.getElementById("rc").value;
            var R_C = parseInt(prov);
            var prov = document.getElementById("cc").value;
            var C_C = parseInt(prov);
            var prov = document.getElementById("fc").value;
            var F_C = parseInt(prov);
            var pieDataC= [{value: EE_C,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_C,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_C,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_C,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_C,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            var prov = document.getElementById("eed").value;
            var EE_D = parseInt(prov);
            var prov = document.getElementById("ad").value;
            var A_D = parseInt(prov);
            var prov = document.getElementById("rd").value;
            var R_D = parseInt(prov);
            var prov = document.getElementById("cd").value;
            var C_D = parseInt(prov);
            var prov = document.getElementById("fd").value;
            var F_D = parseInt(prov);
            var pieDataD= [{value: EE_D,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_D,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_D,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_D,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_D,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            var prov = document.getElementById("eee").value;
            var EE_E = parseInt(prov);
            var prov = document.getElementById("ae").value;
            var A_E = parseInt(prov);
            var prov = document.getElementById("re").value;
            var R_E = parseInt(prov);
            var prov = document.getElementById("ce").value;
            var C_E = parseInt(prov);
            var prov = document.getElementById("fe").value;
            var F_E = parseInt(prov);
            var pieDataE= [{value: EE_E,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_E,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_E,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_E,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_E,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            var prov = document.getElementById("eef").value;
            var EE_F = parseInt(prov);
            var prov = document.getElementById("af").value;
            var A_F = parseInt(prov);
            var prov = document.getElementById("rf").value;
            var R_F = parseInt(prov);
            var prov = document.getElementById("cf").value;
            var C_F = parseInt(prov);
            var prov = document.getElementById("ff").value;
            var F_F = parseInt(prov);
            var pieDataF= [{value: EE_F,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_F,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_F,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_F,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_F,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            var prov = document.getElementById("eei").value;
            var EE_I = parseInt(prov);
            var prov = document.getElementById("ai").value;
            var A_I = parseInt(prov);
            var prov = document.getElementById("ri").value;
            var R_I = parseInt(prov);
            var prov = document.getElementById("ci").value;
            var C_I = parseInt(prov);
            var prov = document.getElementById("fi").value;
            var F_I = parseInt(prov);
            var pieDataI= [{value: EE_I,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_I,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_I,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_I,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_I,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            var prov = document.getElementById("eek").value;
            var EE_K = parseInt(prov);
            var prov = document.getElementById("ak").value;
            var A_K = parseInt(prov);
            var prov = document.getElementById("rk").value;
            var R_K = parseInt(prov);
            var prov = document.getElementById("ck").value;
            var C_K = parseInt(prov);
            var prov = document.getElementById("fk").value;
            var F_K = parseInt(prov);
            var pieDataK= [{value: EE_K,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_K,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_K,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_K,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_K,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                      ];
            var prov = document.getElementById("eel").value;
            var EE_L = parseInt(prov);
            var prov = document.getElementById("al").value;
            var A_L = parseInt(prov);
            var prov = document.getElementById("rl").value;
            var R_L = parseInt(prov);
            var prov = document.getElementById("cl").value;
            var C_L = parseInt(prov);
            var prov = document.getElementById("fl").value;
            var F_L = parseInt(prov);
            var pieDataL= [{value: EE_L,color: "#ffff00",highlight: "#FFD700",label: "EN ESPERA"},
                            {value: A_L,color: "#00ff00",highlight: "#006400",label: "APROBADAS"},
                            {value: R_L,color: "#ff0000",highlight: "#8B0000",label: "RECHAZADAS"},				
                            {value: C_L,color: "#000000",highlight: "#A9A9A9",label: "CANCELADAS"},
                            {value: F_L,color: "#0000ff",highlight: "#00008B",label: "FINALIZADAS"}
                           ];
            var prov = document.getElementById("al2").value;
            var al = parseInt(prov);
            var prov = document.getElementById("ao2").value;
            var ao = parseInt(prov);
            var rDataA = [{value: al,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: ao,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("bl2").value;
            var bl = parseInt(prov);
            var prov = document.getElementById("bo2").value;
            var bo = parseInt(prov);
            var rDataB = [{value: bl,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: bo,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("cl2").value;
            var cl = parseInt(prov);
            var prov = document.getElementById("co2").value;
            var co = parseInt(prov);
            var rDataC = [{value: cl,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: co,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("dl2").value;
            var dl = parseInt(prov);
            var prov = document.getElementById("do2").value;
            var dop= parseInt(prov);
            var rDataD = [{value: dl,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: dop,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("el2").value;
            var el = parseInt(prov);
            var prov = document.getElementById("eo2").value;
            var eo= parseInt(prov);
            var rDataE = [{value: el,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: eo,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("fl2").value;
            var fl = parseInt(prov);
            var prov = document.getElementById("fo2").value;
            var fo= parseInt(prov);
            var rDataF = [{value: fl,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: fo,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("il2").value;
            var il = parseInt(prov);
            var prov = document.getElementById("io2").value;
            var io= parseInt(prov);
            var rDataI = [{value: il,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: io,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("kl2").value;
            var kl = parseInt(prov);
            var prov = document.getElementById("ko2").value;
            var ko= parseInt(prov);
            var rDataK = [{value: kl,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                          {value: ko,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
                         ];
            var prov = document.getElementById("ll2").value;
            var ll = parseInt(prov);
            var prov = document.getElementById("lo2").value;
            var lo= parseInt(prov);
            var rDataL = [{value: ll,color:"#00ff00",highlight: "#006400",label: "LIBRES"},
                        {value: lo,color: "#ff0000",highlight: "#8B0000",label: "OCUPADOS"},
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
            var bB = document.getElementById("bloqueB").getContext("2d");    
            var bC = document.getElementById("bloqueC").getContext("2d");    
            var bD = document.getElementById("bloqueD").getContext("2d");        
            var bE = document.getElementById("bloqueE").getContext("2d");
            var bF = document.getElementById("bloqueF").getContext("2d");
            var bI = document.getElementById("bloqueI").getContext("2d");
            var bK = document.getElementById("bloqueK").getContext("2d");
            var bL = document.getElementById("bloqueL").getContext("2d");
            window.myPie = new Chart(bA).Pie(pieDataA);	
            window.myPie = new Chart(bB).Pie(pieDataB);	
            window.myPie = new Chart(bC).Pie(pieDataC);	
            window.myPie = new Chart(bD).Pie(pieDataD);	
            window.myPie = new Chart(bE).Pie(pieDataE);	
            window.myPie = new Chart(bF).Pie(pieDataF);	
            window.myPie = new Chart(bI).Pie(pieDataI);	
            window.myPie = new Chart(bK).Pie(pieDataK);	
            window.myPie = new Chart(bL).Pie(pieDataL);	    

            var bc2 = document.getElementById("bloqueC2").getContext("2d");
            var ba2 = document.getElementById("bloqueA2").getContext("2d");
            var bb2 = document.getElementById("bloqueB2").getContext("2d");
            var bd2 = document.getElementById("bloqueD2").getContext("2d");
            var be2 = document.getElementById("bloqueE2").getContext("2d");
            var bf2 = document.getElementById("bloqueF2").getContext("2d");
            var bi2 = document.getElementById("bloqueI2").getContext("2d");
            var bk2 = document.getElementById("bloqueK2").getContext("2d");
            var bl2 = document.getElementById("bloqueL2").getContext("2d");
            window.myPie = new Chart(ba2).Doughnut(rDataA);
            window.myPie = new Chart(bb2).Doughnut(rDataB);
            window.myPie = new Chart(bc2).Doughnut(rDataC);    
            window.myPie = new Chart(bd2).Doughnut(rDataD);
            window.myPie = new Chart(be2).Doughnut(rDataE);
            window.myPie = new Chart(bi2).Doughnut(rDataI);
            window.myPie = new Chart(bf2).Doughnut(rDataF);
            window.myPie = new Chart(bk2).Doughnut(rDataK);
            window.myPie = new Chart(bl2).Doughnut(rDataL);
        
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