
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

 
   <div class="main">
        <h2>Inicio de sesión</h2>
        <br>
        <img src="./img/5f663f5cede459.70630588.png" alt="imagen-logo">

        <?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<style>
          div #hola{color:white; padding:13px; background-color:red;}
          </style>
          <div id='hola'>Usuario y/o contraseña invalidos </div>";
       }
        ?>
         <br>
         
        <p id="cabecera">Ingrese sus credenciales en los campos establecidos</p>
        <br>
        <form action="config_login/loguear.php" method="POST" id="formlg">
            <input type="text" name="usuario" placeholder="Usuario" required />
            <input type="password" name="clave" id="clave"placeholder="Contraseña" required /> 
            <button class="btn-mostrar" type="button" onclick="mostrarContrasena()">M</button>
            <input type="submit" name="botonlg" class="botonlg" value="Iniciar Sesión">
        </form>
        <br>
        <p>¿Olvidó su contraseña? <a href="recuperarcontrasena.php">Recuperar</a><p> 
        <br>
        <p>2022 - City Coffe. Todos los derechos reservados <p> 
    </div>

    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <script src="./js/funciones.js"></script>
</body>
</html>