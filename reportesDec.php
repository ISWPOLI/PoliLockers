<?php
    $fIni=$_GET['fIni'];
    $fFin=$_GET['fFin'];
    
    $conexion=mysqli_connect("localhost", "id1813498_admin_pl", "admin123", "id1813498_bdlockers");
//    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");

    if($fIni!="" && $fFin!=""){
//-----------------------------------------------------------------------------------------------------BLOQUE A
        $consultaEEA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (ubicacion='F. Ingeniería' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (ubicacion='F. Ingeniería' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEA = $conexion->query($consultaEEA);
        $countEEA = $resultEEA->fetch_assoc();
        $registrosEEA = $countEEA['NumRows'];
        
        $consultaAA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (ubicacion='F. Ingeniería' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (ubicacion='F. Ingeniería' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAA = $conexion->query($consultaAA);
        $countAA = $resultAA->fetch_assoc();
        $registrosAA = $countAA['NumRows'];
        
        $consultaRA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (ubicacion='F. Ingeniería' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (ubicacion='F. Ingeniería' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRA = $conexion->query($consultaRA);
        $countRA = $resultRA->fetch_assoc();
        $registrosRA = $countRA['NumRows'];
        
        $consultaCA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (ubicacion='F. Ingeniería' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (ubicacion='F. Ingeniería' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCA = $conexion->query($consultaCA);
        $countCA = $resultCA->fetch_assoc();
        $registrosCA = $countCA['NumRows'];
        
        $consultaFA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (ubicacion='F. Ingeniería' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (ubicacion='F. Ingeniería' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFA = $conexion->query($consultaFA);
        $countFA = $resultFA->fetch_assoc();
        $registrosFA = $countFA['NumRows'];        
//-----------------------------------------------------------------------------------------------------BLOQUE B
        $consultaEEB ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='B' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='B' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEB = $conexion->query($consultaEEB);
        $countEEB = $resultEEB->fetch_assoc();
        $registrosEEB = $countEEB['NumRows'];
        
        $consultaAB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='B' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='B' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAB = $conexion->query($consultaAB);
        $countAB = $resultAB->fetch_assoc();
        $registrosAB = $countAB['NumRows'];
        
        $consultaRB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='B' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='B' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))"; 
        $resultRB = $conexion->query($consultaRB);
        $countRB = $resultRB->fetch_assoc();
        $registrosRB = $countRB['NumRows'];
        
        $consultaCB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='B' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='B' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCB = $conexion->query($consultaCB);
        $countCB = $resultCB->fetch_assoc();
        $registrosCB = $countCB['NumRows'];
        
        $consultaFB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='B' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='B' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFB = $conexion->query($consultaFB);
        $countFB = $resultFB->fetch_assoc();
        $registrosFB = $countFB['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE C
        $consultaEEC ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='C' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='C' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEC = $conexion->query($consultaEEC);
        $countEEC = $resultEEC->fetch_assoc();
        $registrosEEC = $countEEC['NumRows'];
        
        $consultaAC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='C' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='C' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAC = $conexion->query($consultaAC);
        $countAC = $resultAC->fetch_assoc();
        $registrosAC = $countAC['NumRows'];
        
        $consultaRC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='C' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='C' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRC = $conexion->query($consultaRC);
        $countRC = $resultRC->fetch_assoc();
        $registrosRC = $countRC['NumRows'];
        
        $consultaCC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='C' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='C' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCC = $conexion->query($consultaCC);
        $countCC = $resultCC->fetch_assoc();
        $registrosCC = $countCC['NumRows'];
        
        $consultaFC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='C' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='C' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFC = $conexion->query($consultaFC);
        $countFC = $resultFC->fetch_assoc();
        $registrosFC = $countFC['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE D
        $consultaEED ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='D' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='D' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEED = $conexion->query($consultaEED);
        $countEED = $resultEED->fetch_assoc();
        $registrosEED = $countEED['NumRows'];
        
        $consultaAD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='D' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='D' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAD = $conexion->query($consultaAD);
        $countAD = $resultAD->fetch_assoc();
        $registrosAD = $countAD['NumRows'];
        
        $consultaRD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='D' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='D' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRD = $conexion->query($consultaRD);
        $countRD = $resultRD->fetch_assoc();
        $registrosRD = $countRD['NumRows'];
        
        $consultaCD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='D' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='D' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCD = $conexion->query($consultaCD);
        $countCD = $resultCD->fetch_assoc();
        $registrosCD = $countCD['NumRows'];
        
        $consultaFD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='D' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='D' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFD = $conexion->query($consultaFD);
        $countFD = $resultFD->fetch_assoc();
        $registrosFD = $countFD['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE E
        $consultaEEE ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='E' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='E' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEE = $conexion->query($consultaEEE);
        $countEEE = $resultEEE->fetch_assoc();
        $registrosEEE = $countEEE['NumRows'];
        
        $consultaAE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='E' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='E' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAE = $conexion->query($consultaAE);
        $countAE = $resultAE->fetch_assoc();
        $registrosAE = $countAE['NumRows'];
        
        $consultaRE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='E' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='E' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRE = $conexion->query($consultaRE);
        $countRE = $resultRE->fetch_assoc();
        $registrosRE = $countRE['NumRows'];
        
        $consultaCE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='E' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='E' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCE = $conexion->query($consultaCE);
        $countCE = $resultCE->fetch_assoc();
        $registrosCE = $countCE['NumRows'];
        
        $consultaFE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='E' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='E' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFE = $conexion->query($consultaFE);
        $countFE = $resultFE->fetch_assoc();
        $registrosFE = $countFE['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE F
        $consultaEEF ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='F' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='F' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEF = $conexion->query($consultaEEF);
        $countEEF = $resultEEF->fetch_assoc();
        $registrosEEF = $countEEF['NumRows'];
        
        $consultaAF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='F' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='F' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAF = $conexion->query($consultaAF);
        $countAF = $resultAF->fetch_assoc();
        $registrosAF = $countAF['NumRows'];
        
        $consultaRF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='F' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='F' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRF = $conexion->query($consultaRF);
        $countRF = $resultRF->fetch_assoc();
        $registrosRF = $countRF['NumRows'];
        
        $consultaCF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='F' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='F' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCF = $conexion->query($consultaCF);
        $countCF = $resultCF->fetch_assoc();
        $registrosCF = $countCF['NumRows'];
        
        $consultaFF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='F' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='F' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFF = $conexion->query($consultaFF);
        $countFF = $resultFF->fetch_assoc();
        $registrosFF = $countFF['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE I
        $consultaEEI ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='I' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='I' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEI = $conexion->query($consultaEEI);
        $countEEI = $resultEEI->fetch_assoc();
        $registrosEEI = $countEEI['NumRows'];
        
        $consultaAI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='I' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='I' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAI = $conexion->query($consultaAI);
        $countAI = $resultAI->fetch_assoc();
        $registrosAI = $countAI['NumRows'];
        
        $consultaRI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='I' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='I' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRI = $conexion->query($consultaRI);
        $countRI = $resultRI->fetch_assoc();
        $registrosRI = $countRI['NumRows'];
        
        $consultaCI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='I' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='I' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCI = $conexion->query($consultaCI);
        $countCI = $resultCI->fetch_assoc();
        $registrosCI = $countCI['NumRows'];
        
        $consultaFI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='I' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='I' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFI = $conexion->query($consultaFI);
        $countFI = $resultFI->fetch_assoc();
        $registrosFI = $countFI['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE K
        $consultaEEK ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='K' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='K' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEK = $conexion->query($consultaEEK);
        $countEEK = $resultEEK->fetch_assoc();
        $registrosEEK = $countEEK['NumRows'];
        
        $consultaAK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='K' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='K' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAK = $conexion->query($consultaAK);
        $countAK = $resultAK->fetch_assoc();
        $registrosAK = $countAK['NumRows'];
        
        $consultaRK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='K' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='K' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRK = $conexion->query($consultaRK);
        $countRK = $resultRK->fetch_assoc();
        $registrosRK = $countRK['NumRows'];
        
        $consultaCK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='K' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='K' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCK = $conexion->query($consultaCK);
        $countCK = $resultCK->fetch_assoc();
        $registrosCK = $countCK['NumRows'];
        
        $consultaFK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='K' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='K' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFK = $conexion->query($consultaFK);
        $countFK = $resultFK->fetch_assoc();
        $registrosFK = $countFK['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE L
        $consultaEEL ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='L' AND estado='EN ESPERA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='L' AND estado='EN ESPERA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultEEL = $conexion->query($consultaEEL);
        $countEEL = $resultEEL->fetch_assoc();
        $registrosEEL = $countEEL['NumRows'];
        
        $consultaAL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='L' AND estado='APROBADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='L' AND estado='APROBADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultAL = $conexion->query($consultaAL);
        $countAL = $resultAL->fetch_assoc();
        $registrosAL = $countAL['NumRows'];
        
        $consultaRL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='L' AND estado='RECHAZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='L' AND estado='RECHAZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultRL = $conexion->query($consultaRL);
        $countRL = $resultRL->fetch_assoc();
        $registrosRL = $countRL['NumRows'];
        
        $consultaCL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='L' AND estado='CANCELADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='L' AND estado='CANCELADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultCL = $conexion->query($consultaCL);
        $countCL = $resultCL->fetch_assoc();
        $registrosCL = $countCL['NumRows'];
        
        $consultaFL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE (bloque='L' AND estado='FINALIZADA' AND fecha_inicio BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE)) OR (bloque='L' AND estado='FINALIZADA' AND fecha_fin BETWEEN CAST('$fIni' AS DATE) AND CAST('$fFin' AS DATE))";
        $resultFL = $conexion->query($consultaFL);
        $countFL = $resultFL->fetch_assoc();
        $registrosFL = $countFL['NumRows'];
    }else{
        //-----------------------------------------------------------------------------------------------------BLOQUE A
        $consultaEEA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE ubicacion='F. Ingeniería' AND estado='EN ESPERA'";
        $resultEEA = $conexion->query($consultaEEA);
        $countEEA = $resultEEA->fetch_assoc();
        $registrosEEA = $countEEA['NumRows'];
        
        $consultaAA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE ubicacion='F. Ingeniería' AND estado='APROBADA'";
        $resultAA = $conexion->query($consultaAA);
        $countAA = $resultAA->fetch_assoc();
        $registrosAA = $countAA['NumRows'];
        
        $consultaRA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE ubicacion='F. Ingeniería' AND estado='RECHAZADA'";
        $resultRA = $conexion->query($consultaRA);
        $countRA = $resultRA->fetch_assoc();
        $registrosRA = $countRA['NumRows'];
        
        $consultaCA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE ubicacion='F. Ingeniería' AND estado='CANCELADA'";
        $resultCA = $conexion->query($consultaCA);
        $countCA = $resultCA->fetch_assoc();
        $registrosCA = $countCA['NumRows'];
        
        $consultaFA="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE ubicacion='F. Ingeniería' AND estado='FINALIZADA'";
        $resultFA = $conexion->query($consultaFA);
        $countFA = $resultFA->fetch_assoc();
        $registrosFA = $countFA['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE B
        $consultaEEB ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='B' AND estado='EN ESPERA'";
        $resultEEB = $conexion->query($consultaEEB);
        $countEEB = $resultEEB->fetch_assoc();
        $registrosEEB = $countEEB['NumRows'];
        
        $consultaAB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='B' AND estado='APROBADA'";
        $resultAB = $conexion->query($consultaAB);
        $countAB = $resultAB->fetch_assoc();
        $registrosAB = $countAB['NumRows'];
        
        $consultaRB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='B' AND estado='RECHAZADA'";
        $resultRB = $conexion->query($consultaRB);
        $countRB = $resultRB->fetch_assoc();
        $registrosRB = $countRB['NumRows'];
        
        $consultaCB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='B' AND estado='CANCELADA'";
        $resultCB = $conexion->query($consultaCB);
        $countCB = $resultCB->fetch_assoc();
        $registrosCB = $countCB['NumRows'];
        
        $consultaFB="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='B' AND estado='FINALIZADA'";
        $resultFB = $conexion->query($consultaFB);
        $countFB = $resultFB->fetch_assoc();
        $registrosFB = $countFB['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE C
        $consultaEEC ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='C' AND estado='EN ESPERA'";
        $resultEEC = $conexion->query($consultaEEC);
        $countEEC = $resultEEC->fetch_assoc();
        $registrosEEC = $countEEC['NumRows'];
        
        $consultaAC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='C' AND estado='APROBADA'";
        $resultAC = $conexion->query($consultaAC);
        $countAC = $resultAC->fetch_assoc();
        $registrosAC = $countAC['NumRows'];
        
        $consultaRC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='C' AND estado='RECHAZADA'";
        $resultRC = $conexion->query($consultaRC);
        $countRC = $resultRC->fetch_assoc();
        $registrosRC = $countRC['NumRows'];
        
        $consultaCC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='C' AND estado='CANCELADA'";
        $resultCC = $conexion->query($consultaCC);
        $countCC = $resultCC->fetch_assoc();
        $registrosCC = $countCC['NumRows'];
        
        $consultaFC="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='C' AND estado='FINALIZADA'";
        $resultFC = $conexion->query($consultaFC);
        $countFC = $resultFC->fetch_assoc();
        $registrosFC = $countFC['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE D
        $consultaEED ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='D' AND estado='EN ESPERA'";
        $resultEED = $conexion->query($consultaEED);
        $countEED = $resultEED->fetch_assoc();
        $registrosEED = $countEED['NumRows'];
        
        $consultaAD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='D' AND estado='APROBADA'";
        $resultAD = $conexion->query($consultaAD);
        $countAD = $resultAD->fetch_assoc();
        $registrosAD = $countAD['NumRows'];
        
        $consultaRD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='D' AND estado='RECHAZADA'";
        $resultRD = $conexion->query($consultaRD);
        $countRD = $resultRD->fetch_assoc();
        $registrosRD = $countRD['NumRows'];
        
        $consultaCD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='D' AND estado='CANCELADA'";
        $resultCD = $conexion->query($consultaCD);
        $countCD = $resultCD->fetch_assoc();
        $registrosCD = $countCD['NumRows'];
        
        $consultaFD="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='D' AND estado='FINALIZADA'";
        $resultFD = $conexion->query($consultaFD);
        $countFD = $resultFD->fetch_assoc();
        $registrosFD = $countFD['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE E
        $consultaEEE ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='E' AND estado='EN ESPERA'";
        $resultEEE = $conexion->query($consultaEEE);
        $countEEE = $resultEEE->fetch_assoc();
        $registrosEEE = $countEEE['NumRows'];
        
        $consultaAE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='E' AND estado='APROBADA'";
        $resultAE = $conexion->query($consultaAE);
        $countAE = $resultAE->fetch_assoc();
        $registrosAE = $countAE['NumRows'];
        
        $consultaRE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='E' AND estado='RECHAZADA'";
        $resultRE = $conexion->query($consultaRE);
        $countRE = $resultRE->fetch_assoc();
        $registrosRE = $countRE['NumRows'];
        
        $consultaCE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='E' AND estado='CANCELADA'";
        $resultCE = $conexion->query($consultaCE);
        $countCE = $resultCE->fetch_assoc();
        $registrosCE = $countCE['NumRows'];
        
        $consultaFE="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='E' AND estado='FINALIZADA'";
        $resultFE = $conexion->query($consultaFE);
        $countFE = $resultFE->fetch_assoc();
        $registrosFE = $countFE['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE F
        $consultaEEF ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='F' AND estado='EN ESPERA'";
        $resultEEF = $conexion->query($consultaEEF);
        $countEEF = $resultEEF->fetch_assoc();
        $registrosEEF = $countEEF['NumRows'];
        
        $consultaAF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='F' AND estado='APROBADA'";
        $resultAF = $conexion->query($consultaAF);
        $countAF = $resultAF->fetch_assoc();
        $registrosAF = $countAF['NumRows'];
        
        $consultaRF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='F' AND estado='RECHAZADA'";
        $resultRF = $conexion->query($consultaRF);
        $countRF = $resultRF->fetch_assoc();
        $registrosRF = $countRF['NumRows'];
        
        $consultaCF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='F' AND estado='CANCELADA'";
        $resultCF = $conexion->query($consultaCF);
        $countCF = $resultCF->fetch_assoc();
        $registrosCF = $countCF['NumRows'];
        
        $consultaFF="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='F' AND estado='FINALIZADA'";
        $resultFF = $conexion->query($consultaFF);
        $countFF = $resultFF->fetch_assoc();
        $registrosFF = $countFF['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE I
        $consultaEEI ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='I' AND estado='EN ESPERA'";
        $resultEEI = $conexion->query($consultaEEI);
        $countEEI = $resultEEI->fetch_assoc();
        $registrosEEI = $countEEI['NumRows'];
        
        $consultaAI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='I' AND estado='APROBADA'";
        $resultAI = $conexion->query($consultaAI);
        $countAI = $resultAI->fetch_assoc();
        $registrosAI = $countAI['NumRows'];
        
        $consultaRI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='I' AND estado='RECHAZADA'";
        $resultRI = $conexion->query($consultaRI);
        $countRI = $resultRI->fetch_assoc();
        $registrosRI = $countRI['NumRows'];
        
        $consultaCI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='I' AND estado='CANCELADA'";
        $resultCI = $conexion->query($consultaCI);
        $countCI = $resultCI->fetch_assoc();
        $registrosCI = $countCI['NumRows'];
        
        $consultaFI="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='I' AND estado='FINALIZADA'";
        $resultFI = $conexion->query($consultaFI);
        $countFI = $resultFI->fetch_assoc();
        $registrosFI = $countFI['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE K
        $consultaEEK ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='K' AND estado='EN ESPERA'";
        $resultEEK = $conexion->query($consultaEEK);
        $countEEK = $resultEEK->fetch_assoc();
        $registrosEEK = $countEEK['NumRows'];
        
        $consultaAK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='K' AND estado='APROBADA'";
        $resultAK = $conexion->query($consultaAK);
        $countAK = $resultAK->fetch_assoc();
        $registrosAK = $countAK['NumRows'];
        
        $consultaRK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='K' AND estado='RECHAZADA'";
        $resultRK = $conexion->query($consultaRK);
        $countRK = $resultRK->fetch_assoc();
        $registrosRK = $countRK['NumRows'];
        
        $consultaCK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='K' AND estado='CANCELADA'";
        $resultCK = $conexion->query($consultaCK);
        $countCK = $resultCK->fetch_assoc();
        $registrosCK = $countCK['NumRows'];
        
        $consultaFK="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='K' AND estado='FINALIZADA'";
        $resultFK = $conexion->query($consultaFK);
        $countFK = $resultFK->fetch_assoc();
        $registrosFK = $countFK['NumRows'];
        //-----------------------------------------------------------------------------------------------------BLOQUE L
        $consultaEEL ="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='L' AND estado='EN ESPERA'";
        $resultEEL = $conexion->query($consultaEEL);
        $countEEL = $resultEEL->fetch_assoc();
        $registrosEEL = $countEEL['NumRows'];
        
        $consultaAL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='L' AND estado='APROBADA'";
        $resultAL = $conexion->query($consultaAL);
        $countAL = $resultAL->fetch_assoc();
        $registrosAL = $countAL['NumRows'];
        
        $consultaRL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='L' AND estado='RECHAZADA'";
        $resultRL = $conexion->query($consultaRL);
        $countRL = $resultRL->fetch_assoc();
        $registrosRL = $countRL['NumRows'];
        
        $consultaCL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='L' AND estado='CANCELADA'";
        $resultCL = $conexion->query($consultaCL);
        $countCL = $resultCL->fetch_assoc();
        $registrosCL = $countCL['NumRows'];
        
        $consultaFL="SELECT COUNT(*) AS NumRows FROM solicitudes WHERE bloque='L' AND estado='FINALIZADA'";
        $resultFL = $conexion->query($consultaFL);
        $countFL = $resultFL->fetch_assoc();
        $registrosFL = $countFL['NumRows'];
    }
    //-----------------------------------------------------------------------------------------------------BLOQUE A LOCKERS LIBRES/OCUPADOS
    $consultaAL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE ubicacion='F. Ingeniería' AND ocupado=0";
    $resultAL2 = $conexion->query($consultaAL2);
    $countAL2 = $resultAL2->fetch_assoc();
    $registrosAL2 = $countAL2['NumRows'];
    
    $consultaAO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE ubicacion='F. Ingeniería' AND ocupado=1";
    $resultAO2 = $conexion->query($consultaAO2);
    $countAO2 = $resultAO2->fetch_assoc();
    $registrosAO2 = $countAO2['NumRows'];
    //-----------------------------------------------------------------------------------------------------BLOQUE B LOCKERS LIBRES/OCUPADOS
    $consultaBL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='B' AND ocupado=0";
    $resultBL2 = $conexion->query($consultaBL2);
    $countBL2 = $resultBL2->fetch_assoc();
    $registrosBL2 = $countBL2['NumRows'];
    
    $consultaBO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='B' AND ocupado=1";
    $resultBO2 = $conexion->query($consultaBO2);
    $countBO2 = $resultBO2->fetch_assoc();
    $registrosBO2 = $countBO2['NumRows'];
    //-----------------------------------------------------------------------------------------------------BLOQUE C LOCKERS LIBRES/OCUPADOS
    $consultaCL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='C' AND ocupado=0";
    $resultCL2 = $conexion->query($consultaCL2);
    $countCL2 = $resultCL2->fetch_assoc();
    $registrosCL2 = $countCL2['NumRows'];
    
    $consultaCO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='C' AND ocupado=1";
    $resultCO2 = $conexion->query($consultaCO2);
    $countCO2 = $resultCO2->fetch_assoc();
    $registrosCO2 = $countCO2['NumRows'];
//-----------------------------------------------------------------------------------------------------BLOQUE D LOCKERS LIBRES/OCUPADOS
    $consultaDL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='D' AND ocupado=0";
    $resultDL2 = $conexion->query($consultaDL2);
    $countDL2 = $resultDL2->fetch_assoc();
    $registrosDL2 = $countDL2['NumRows'];
    
    $consultaDO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='D' AND ocupado=1";
    $resultDO2 = $conexion->query($consultaDO2);
    $countDO2 = $resultDO2->fetch_assoc();
    $registrosDO2 = $countDO2['NumRows'];
//-----------------------------------------------------------------------------------------------------BLOQUE E LOCKERS LIBRES/OCUPADOS
    $consultaEL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='E' AND ocupado=0";
    $resultEL2 = $conexion->query($consultaEL2);
    $countEL2 = $resultEL2->fetch_assoc();
    $registrosEL2 = $countEL2['NumRows'];
    
    $consultaEO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='E' AND ocupado=1";
    $resultEO2 = $conexion->query($consultaEO2);
    $countEO2 = $resultEO2->fetch_assoc();
    $registrosEO2 = $countEO2['NumRows'];
    //-----------------------------------------------------------------------------------------------------BLOQUE F LOCKERS LIBRES/OCUPADOS
    $consultaFL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='F' AND ocupado=0";
    $resultFL2 = $conexion->query($consultaFL2);
    $countFL2 = $resultFL2->fetch_assoc();
    $registrosFL2 = $countFL2['NumRows'];
    
    $consultaFO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='F' AND ocupado=1";
    $resultFO2 = $conexion->query($consultaFO2);
    $countFO2 = $resultFO2->fetch_assoc();
    $registrosFO2 = $countFO2['NumRows'];
    //-----------------------------------------------------------------------------------------------------BLOQUE I LOCKERS LIBRES/OCUPADOS
    $consultaIL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='I' AND ocupado=0";
    $resultIL2 = $conexion->query($consultaIL2);
    $countIL2 = $resultIL2->fetch_assoc();
    $registrosIL2 = $countIL2['NumRows'];
    
    $consultaIO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='I' AND ocupado=1";
    $resultIO2 = $conexion->query($consultaIO2);
    $countIO2 = $resultIO2->fetch_assoc();
    $registrosIO2 = $countIO2['NumRows'];
    //-----------------------------------------------------------------------------------------------------BLOQUE K LOCKERS LIBRES/OCUPADOS
    $consultaKL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='K' AND ocupado=0";
    $resultKL2 = $conexion->query($consultaKL2);
    $countKL2 = $resultKL2->fetch_assoc();
    $registrosKL2 = $countKL2['NumRows'];
    
    $consultaKO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='K' AND ocupado=1";
    $resultKO2 = $conexion->query($consultaKO2);
    $countKO2 = $resultKO2->fetch_assoc();
    $registrosKO2 = $countKO2['NumRows'];
    //-----------------------------------------------------------------------------------------------------BLOQUE L LOCKERS LIBRES/OCUPADOS
    $consultaLL2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='L' AND ocupado=0";
    $resultLL2 = $conexion->query($consultaLL2);
    $countLL2 = $resultLL2->fetch_assoc();
    $registrosLL2 = $countLL2['NumRows'];
    
    $consultaLO2 ="SELECT COUNT(*) AS NumRows FROM lockers WHERE bloque='L' AND ocupado=1";
    $resultLO2 = $conexion->query($consultaLO2);
    $countLO2 = $resultLO2->fetch_assoc();
    $registrosLO2 = $countLO2['NumRows'];
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
                
                if(fIni > fFin || fIni == fFin || fIni=="" || fFin==""){
                    var msj = "Porfavor verifique el rango de fechas.\n\nGracias."
                    alert(msj);   
                }else{
                    window.location.href = "reportesDec.php?fIni="+fIni+"&fFin="+fFin;    
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
                            echo "<h3>A continuación se muestran todas las solicitudes EN ESPERA, ACEPTADAS, RECHAZADAS, FINALIZADAS Y CANCELADAS por cada bloque que se han hecho entre <BR><BR> <p class='fecha'>>   ".$fIni." ... ".$fFin."   <</p></h3>";
                        }else{
                            echo "<h3>A continuación se muestran todas las solicitudes EN ESPERA, ACEPTADAS, RECHAZADAS, FINALIZADAS Y CANCELADAS por cada bloque que se han hecho en la historia del sistema.</h3>";
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
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                        <div class="bloques">
                            <h1>BLOQUE A</h1>
                            <canvas id="bloqueA" width="300" height="300"></canvas>    
                       </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE B</h1>
                        <canvas id="bloqueB" width="300" height="300"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE C</h1>
                        <canvas id="bloqueC" width="300" height="300"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE D</h1>
                        <canvas id="bloqueD" width="300" height="300"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE E</h1>
                        <canvas id="bloqueE" width="300" height="300"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE F</h1>
                        <canvas id="bloqueF" width="300" height="300"></canvas>
                        </div>
                    </div>
<!--                        
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE G</h1>
                        <canvas id="bloqueG" width="300" height="300"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE H</h1>
                        <canvas id="bloqueH" width="300" height="300"></canvas>
                        </div>
                    </div>
-->                        
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE I</h1>
                        <canvas id="bloqueI" width="300" height="300"></canvas>
                        </div>
                    </div>
<!--                        
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE J</h1>
                        <canvas id="bloqueJ" width="300" height="300"></canvas>
                        </div>
                    </div>
-->                        
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE K</h1>
                        <canvas id="bloqueK" width="300" height="300"></canvas>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                      <div class="bloques">
                       <h1>BLOQUE L</h1>
                        <canvas id="bloqueL" width="300" height="300"></canvas>
                        </div>
                    </div>
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
        <br>
            <p class="conv"><span class="acept">O-</span> Lockers DISPONIBLES</p>   
            <p class="conv"><span class="reject">O-</span> Lockers OCUPADOS</p>   
        <br>
        <div class="container">
            <div class="main row">
                <script src="js/Chart.js"></script>
                <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                           <div class="bloques">
                                <h1>FACULTAAD DE INGENIERÍA</h1>
                                <canvas id="bloqueA2" width="300" height="300"></canvas>    
                           </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE B</h1>
                            <canvas id="bloqueB2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE C</h1>
                            <canvas id="bloqueC2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE D</h1>
                            <canvas id="bloqueD2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE E</h1>
                            <canvas id="bloqueE2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE F</h1>
                            <canvas id="bloqueF2" width="300" height="300"></canvas>
                            </div>
                        </div>
<!--                        
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE G</h1>
                            <canvas id="bloqueG2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE H</h1>
                            <canvas id="bloqueH2" width="300" height="300"></canvas>
                            </div>
                        </div>
-->                        
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE I</h1>
                            <canvas id="bloqueI2" width="300" height="300"></canvas>
                            </div>
                        </div>
<!--                        
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE J</h1>
                            <canvas id="bloqueJ2" width="300" height="300"></canvas>
                            </div>
                        </div>
-->                        
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE K</h1>
                            <canvas id="bloqueK2" width="300" height="300"></canvas>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4" id="canvas-holder">
                          <div class="bloques">
                           <h1>BLOQUE L</h1>
                            <canvas id="bloqueL2" width="300" height="300"></canvas>
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
                            <input id='eeb' value='$registrosEEB'>
                            <input id='ab' value='$registrosAB'>
                            <input id='rb' value='$registrosRB'>
                            <input id='cb' value='$registrosCB'>
                            <input id='fb' value='$registrosFB'>
                            <br>
                            <input id='eec' value='$registrosEEC'>
                            <input id='ac' value='$registrosAC'>
                            <input id='rc' value='$registrosRC'>
                            <input id='cc' value='$registrosCC'>
                            <input id='fc' value='$registrosFC'>
                            <br>
                            <input id='eed' value='$registrosEED'>
                            <input id='ad' value='$registrosAD'>
                            <input id='rd' value='$registrosRD'>
                            <input id='cd' value='$registrosCD'>
                            <input id='fd' value='$registrosFD'>
                            <br>
                            <input id='eee' value='$registrosEEE'>
                            <input id='ae' value='$registrosAE'>
                            <input id='re' value='$registrosRE'>
                            <input id='ce' value='$registrosCE'>
                            <input id='fe' value='$registrosFE'>
                            <br>
                            <input id='eef' value='$registrosEEF'>
                            <input id='af' value='$registrosAF'>
                            <input id='rf' value='$registrosRF'>
                            <input id='cf' value='$registrosCF'>
                            <input id='ff' value='$registrosFF'>
                            <br>
                            <input id='eei' value='$registrosEEI'>
                            <input id='ai' value='$registrosAI'>
                            <input id='ri' value='$registrosRI'>
                            <input id='ci' value='$registrosCI'>
                            <input id='fi' value='$registrosFI'>
                            <br>
                            <input id='eek' value='$registrosEEK'>
                            <input id='ak' value='$registrosAK'>
                            <input id='rk' value='$registrosRK'>
                            <input id='ck' value='$registrosCK'>
                            <input id='fk' value='$registrosFK'>
                            <br>
                            <input id='eel' value='$registrosEEL'>
                            <input id='al' value='$registrosAL'>
                            <input id='rl' value='$registrosRL'>
                            <input id='cl' value='$registrosCL'>
                            <input id='fl' value='$registrosFL'>
                            <br>
                            <input id='al2' value='$registrosAL2'>
                            <input id='ao2' value='$registrosAO2'>
                            <br>
                            <input id='bl2' value='$registrosBL2'>
                            <input id='bo2' value='$registrosBO2'>
                            <br>
                            <input id='cl2' value='$registrosCL2'>
                            <input id='co2' value='$registrosCO2'>
                            <br>
                            <input id='dl2' value='$registrosDL2'>
                            <input id='do2' value='$registrosDO2'>
                            <br>
                            <input id='el2' value='$registrosEL2'>
                            <input id='eo2' value='$registrosEO2'>
                            <br>
                            <input id='fl2' value='$registrosFL2'>
                            <input id='fo2' value='$registrosFO2'>
                            <br>
                            <input id='il2' value='$registrosIL2'>
                            <input id='io2' value='$registrosIO2'>
                            <br>
                            <input id='kl2' value='$registrosKL2'>
                            <input id='ko2' value='$registrosKO2'>
                            <br>
                            <input id='ll2' value='$registrosLL2'>
                            <input id='lo2' value='$registrosLO2'>
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