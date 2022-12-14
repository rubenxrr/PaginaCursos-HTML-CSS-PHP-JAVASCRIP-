<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script defer src="../js/menu.js"></script>
    <title>REGISTRO</title>
</head>
<body>
    
    <header id="Header">
        <a class="logo">AKDE</a>
        
        <button class="button">
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
        </button>

        <nav class="nav">
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Equipo</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a class="registro" href="registro.php">Registrar</a></li>
                <li><a class="ingresar" href="login.php">Ingresar</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="contenedor">
        <center><h1 class="titulo">LOGIN</h1></center>
        <form action="" method="POST">
            <?php 
            include("loginc.php");
            ?>
           <input class="datos" name="usuario" type="text" placeholder="Usuario">
           <br>
           <input class="datos" name="contra" type="password" placeholder="Contraseña">
           <br>
           <input class="recordar" type="radio" name="" id=""> <label class="recordar">Recordar</label>
           <br> <br>
           <input class="boton" type="submit" name="boton" value="INICIAR SESION">
        </form>
            <a class="sesion" href="registro.php">Registrarse</a>
    </div>
</body>
</html>