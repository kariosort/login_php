<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones de recuperación</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

   <div class="main">
        <h2>Recuperación de contraseña</h2>
        <br>

        <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true'){
            echo "<style>
            div #hola{color:white; padding:13px; background-color:red;}
            </style>
            <div id='hola'>Usuario no existe </div>";
            }
        ?>
        <br>

        <p>Ingrese el usuario y seleccione el método de recuperación</p>
        <br>
        <form action="config_login/rec_opciones.php" method="POST">
                <input type="text" name="usuario_rec" placeholder="Usuario" required />
                <p><input type="submit" name="rec_correo" value="Recuperar por preguntas de seguridad" /></p>
        </form>
        <br>
    </div>

    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
</body>
</html>