<?php
    $u=$_GET['user'];

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>POLILOCKERS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
        <link rel="stylesheet" href="css/estilos.css">
        <script type="text/javascript">
            var msj = "Contraseña actualizada!\nYa puede ingresar al sistema..."
            var msj2 = "Las contraseñas no coinciden..."
            function resetP() {
                var user = document.getElementById("caja_u").value;
                var pass = document.getElementById("pas").value;
                var passC = document.getElementById("pasC").value;
                if(pass!="" && pass==passC){
                    window.location="cambiarPass.php?user="+user+"&name="+pass;
                    alert(msj);
                }else{
                    alert(msj2);
                }
            }
        </script>
    </head>
    <body>
        <div>
            <img id="imgPrincipal" src="./images/IUPG.png" style="width:192px;height:47px;">   
        </div>
        <div>
            <form>
<?php
echo "<input id='caja_u' type='hidden' value='$u'>";
?>
                <h1>- Recuperación de contraseña -</h1>
                <p>Ingrese su nueva contraseña, y confirmela para continuar...</p>
                <input id="pas" class="camposForm" type="password" placeholder ="&#128477; Contraseña" required name="confirm">
                <input id="pasC" class="camposForm" type="password" placeholder="&#128477; Confirmar Contraseña" required name="clave">
                <a id="cambio" class="camposForm" href="javascript:resetP()">ACTUALIZAR</a>
            </form>   
        </div>
    </body>
</html>