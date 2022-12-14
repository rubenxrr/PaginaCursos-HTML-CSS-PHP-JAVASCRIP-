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
    <center><h1>BIENVENIDO A LOS REGISTROS DE CURSOS</h1></center> <br>
    <div class="contenido" >
        
        <br>
        <h2>Registros del curso de los usuarios</h2>
            <br>
        <table class="tpython" style="width: 100%;">
            <tr>
                <th class="tpython">Id de registro</th>
                <th class="tpython">Usuario</th>
                <th class="tpython">Fecha de registro</th>
            </tr>
            <?php
                    
            include('../conec.php');
            $sql= 'select*from python';
            $result= mysqli_query($conex,$sql);
            $cont=1;
            while($mostrar=mysqli_fetch_array($result)){
            ?>
                        <tr>
                            <td class="tpython"> <?php echo $mostrar['id']?></td>
                            <td class="tpython"> <?php echo $mostrar['usuario_reg']?></td>
                            <td class="tpython"> <?php echo $mostrar['fecha_reg']?> </td>

                        </tr>
    
                        <?php
    
         $cont++;
            }
            ?>
        </table>
        
        <br>
        <h2>Registros del curso de JavaScript</h2>
            <br>
        <table class="tpython" style="width: 100%;">
            <tr>
                <th class="tpython">Id de registro</th>
                <th class="tpython">Usuario</th>
                <th class="tpython">Fecha de registro</th>
            </tr>
            <?php
                    
            include('../conec.php');
            $sql= 'select*from javascript';
            $result= mysqli_query($conex,$sql);
            $cont=1;
            while($mostrar=mysqli_fetch_array($result)){
            ?>
                        <tr>
                            <td class="tpython"> <?php echo $mostrar['id']?></td>
                            <td class="tpython"> <?php echo $mostrar['usuario_reg']?></td>
                            <td class="tpython"> <?php echo $mostrar['fecha_reg']?> </td>

                        </tr>
    
                        <?php
    
         $cont++;
            }
            ?>
        </table>
        
        <br>
        <h2>Registros del curso de Java</h2>
            <br>
        <table class="tpython" style="width: 100%;">
            <tr>
                <th class="tpython">Id de registro</th>
                <th class="tpython">Usuario</th>
                <th class="tpython">Fecha de registro</th>
            </tr>
            <?php
                    
            include('../conec.php');
            $sql= 'select*from java';
            $result= mysqli_query($conex,$sql);
            $cont=1;
            while($mostrar=mysqli_fetch_array($result)){
            ?>
                        <tr>
                            <td class="tpython"> <?php echo $mostrar['id']?></td>
                            <td class="tpython"> <?php echo $mostrar['usuario_reg']?></td>
                            <td class="tpython"> <?php echo $mostrar['fecha_reg']?> </td>

                        </tr>
    
                        <?php
    
         $cont++;
            }
            ?>
        </table>
        
        <br>
        <h2>Registros del curso de C#</h2>
            <br>
        <table class="tpython" style="width: 100%;">
            <tr>
                <th class="tpython">Id de registro</th>
                <th class="tpython">Usuario</th>
                <th class="tpython">Fecha de registro</th>
            </tr>
            <?php
                    
            include('../conec.php');
            $sql= 'select*from c';
            $result= mysqli_query($conex,$sql);
            $cont=1;
            while($mostrar=mysqli_fetch_array($result)){
            ?>
                        <tr>
                            <td class="tpython"> <?php echo $mostrar['id']?></td>
                            <td class="tpython"> <?php echo $mostrar['usuario_reg']?></td>
                            <td class="tpython"> <?php echo $mostrar['fecha_reg']?> </td>

                        </tr>
    
                        <?php
    
         $cont++;
            }
            ?>
        </table>

        
    </div>

</body>
</html>