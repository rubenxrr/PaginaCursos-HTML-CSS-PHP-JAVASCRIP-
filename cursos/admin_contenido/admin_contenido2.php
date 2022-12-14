<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_contenido.css">
    <title>Panel admin</title>
</head>
<body>
    <div class="top">
        <a class="top_a">LOGO</a>
        <table class="tbuser">
        <?php
            $usuario = $_GET['usuario'];       
        
            include('../conec.php');
            $sql= "SELECT * FROM admin WHERE usuario='".$usuario."'";
            $result= mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_assoc($result)){
            
            ?>
                <tr>
                    <td class="usuario"><?php echo $mostrar['nombre']?> 
                    <?php echo $mostrar['apellido_p']?>
                    <?php echo $mostrar['apellido_m']?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <br> <br>
    <center><h1>BIENVENIDO A LOS REGISTROS DE LOS USUARIOS</h1></center> <br>
    <div class="contenido" >
        
        <br>
        <h2>Registros</h2>
            <br>
        <table class="tpython" style="width: 100%;">
            <tr>
                <th class="tpython">Id de registro</th>
                <th class="tpython">Usuario</th>
                <th class="tpython">Nombre completo</th>
                <th class="tpython">Correo</th>
                <th class="tpython">Contraseña</th>
                <th class="tpython">Verificación</th>
            </tr>
            <?php
                    
            include('../conec.php');
            $sql= 'select*from registro';
            $result= mysqli_query($conex,$sql);
            $cont=1;
            while($mostrar=mysqli_fetch_array($result)){
            ?>
                        <tr>
                            <td class="tpython"> <?php echo $mostrar['id']?></td>
                            <td class="tpython"> <?php echo $mostrar['usuario']?></td>
                            <td class="tpython"> <?php echo $mostrar['nombre']?>
                            <?php echo $mostrar['apellido_p']?> <?php echo $mostrar['apellido_m']?> </td>
                            <td class="tpython"> <?php echo $mostrar['email']?>
                            <td class="tpython"> <?php echo $mostrar['password']?>
                            <td class="tpython"> <?php echo $mostrar['estatus']?>

                        </tr>
    
                        <?php
    
         $cont++;
            }
            ?>
        </table>
    
        
    </div>

</body>
</html>