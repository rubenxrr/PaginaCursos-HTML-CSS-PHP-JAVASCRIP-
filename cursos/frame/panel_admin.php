<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panel_admin.css">
    <title>Panel admin</title>
</head>
<body>
    <div class="top">
        <a class="top_a">AKDE</a>
        <table>
        <?php
            $usuario = $_GET['usuario'];       
        
            include('../conec.php');
            $sql= "SELECT * FROM admin WHERE usuario='".$usuario."'";
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
    <center><h1>BIENVENIDO AL PANEL DE CONTROL DE ADMINISTRADOR</h1></center> <br>
    <div class="contenido" >
        <div class="misdatos">
            <a href="../admin_contenido/admin_contenido.php"><img class="imgmenu" src="../menu_img/registro.png" alt=""></a>
            <br><a class="mis">Registros de cursos</a>
        </div>

        <div class="misdatos">
            <a href="../admin_contenido/admin_contenido2.php"><img class="imgmenu" src="../menu_img/usuario.png" alt=""></a>
            <br><a class="mis">Registros de usuarios</a>
        </div>

        <div class="misdatos">
            <a href="../registro/csesion.php"><img class="imgmenu" src="../menu_img/atras.png" alt=""></a>
            <br><a class="mis">Cerrar sesión</a>
        </div>

    </div>

</body>
</html>