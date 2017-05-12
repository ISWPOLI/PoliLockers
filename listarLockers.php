<?php
    $conexion=mysqli_connect("localhost", "root", "", "bdlockers");
    
    $consulta="SELECT * FROM lockers";
    $registros=mysqli_query($conexion, $consulta);
        
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>NUEVO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/estiloListas.css">
    </head>
    <body>
       <header>
            <section>
            <table border="1">
               <h1>LISTADO DE LOCKERS</h1>
                <tr>
                    <td>ID</td><td>BLOQUE</td><td>ESTADO</td><td>COORDINADOR</td><td>PROFESOR</td>
                </tr>
                <?php
                while($row = $registros->fetch_array(MYSQLI_BOTH)){
                    echo    '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['bloque'].'</td>
                            <td>'.$row['estado'].'</td>
                            <td>'.$row['coordinador'].'</td>
                            <td>'.$row['profesor'].'</td>
                            </tr>';
                }
                ?>
            </table>
        </section>
       </header>
    </body>
</html>