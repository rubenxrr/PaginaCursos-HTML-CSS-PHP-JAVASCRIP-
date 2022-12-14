<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panel_usuario.css">
    <title>Panel usuario</title>
</head>
<body>
    <div class="top">
        <a class="top_a">AKDE</a>
    <table>
        <?php
            $usuario = $_GET['usuario'];       
        
            include('../conec.php');
            $sql= "SELECT * FROM registro WHERE usuario='".$usuario."'";
            $result= mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_assoc($result)){
            
            ?>
                <tr>
                    <td class="usuario"><?php echo $mostrar['nombre']?> 
                    <?php echo $mostrar['apellido_p']?></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
    <br> <br>
    <center><h1>BIENVENIDO AL PANEL DE CONTROL</h1></center> <br>
    <div class="contenido" >
        <div class="misdatos">
            <a href=""><img class="imgmenu" src="../menu_img/inicio.png" alt=""></a>
            <br><a class="mis">Inicio</a>
        </div>

        <div class="misdatos">
            <a href="../miscursos/misdatos.php?usuario=<?php echo $usuario;?>"><img class="imgmenu" src="../menu_img/cuenta.png" alt=""></a>
            <br><a class="mis">Mis datos</a>
        </div>

        <div class="misdatos">
            <a href="../miscursos/miscursos.php?usuario=<?php echo $usuario;?>"><img class="imgmenu" src="../menu_img/curso.png" alt=""></a>
            <br><a class="mis">Mis cursos</a>
        </div>

    </div>

    <div class="contenido2" >
        <div class="misdatos">
            <a href="../cursos/cursos.php?usuario=<?php echo $usuario;?>"><img class="imgmenu" src="../menu_img/producto.png" alt=""></a>
            <br><a class="mis">Cursos</a>
        </div>

        <div class="misdatos">
            <a><img class="imgmenu" src="../menu_img/evento.png" alt=""></a>
            <br><a class="mis">Eventos</a>
        </div>

        <div class="misdatos">
            <a><img class="imgmenu" src="../menu_img/facturacion.png" alt=""></a>
            <br><a class="mis">Facturacion</a>
        </div>

    </div>

    <div class="contenido3" >
        <div class="misdatos">
            <a><img class="imgmenu" src="../menu_img/referir.png" alt=""></a>
            <br><a class="mis">Referidos</a>
        </div>

        <div class="misdatos">
            <a><img class="imgmenu" src="../menu_img/documentos.png" alt=""></a>
            <br><a class="mis">Mis documentos</a>
        </div>

        <div class="misdatos">
            <a href="../registro/csesion.php"><img class="imgmenu" src="../menu_img/atras.png" alt=""></a>
            <br><a class="mis">Cerrar sesión</a>
        </div>

    </div>

</body>
</html>