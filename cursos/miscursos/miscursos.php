<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="miscursos.css">
    <title>Panel usuario</title>
</head>
<body>
    <div class="cursos" id="cursos">
        <div class="cursoh1"><h1 class="txth1">Mis cursos</h1></div>
<?php
            include("../conec.php");
            $usuario=$_GET['usuario'];  

            $consulta = "SELECT * from python where usuario_reg='$usuario'";
            $resultado = mysqli_query($conex,$consulta);
            
            $consulta1 = "SELECT * from javascript where usuario_reg='$usuario'";
            $resultado1 = mysqli_query($conex,$consulta1);
            
            $consulta2 = "SELECT * from java where usuario_reg='$usuario'";
            $resultado2 = mysqli_query($conex,$consulta2);
            
            $consulta3 = "SELECT * from c where usuario_reg='$usuario'";
            $resultado3 = mysqli_query($conex,$consulta3);
            
            if(mysqli_num_rows($resultado)>0){
                echo'<div class="des-contenedor">
            <div class="des-contenido">
                <div class="tarjeta-wrapper">
                    <div class="tarjeta">
                        <div class="imagen-contenido">
                            <span class="overlay"></span>

                            <div class="tarjeta-imagen">
                                <img class="tarjeta-img" src="../cursos_img/python.png" alt="">
                            </div>
                        </div>
                        <div class="tarjeta-contenido">

                            <h2 class="curso">Curso Python</h2>
                            <p class="descripcion">Python es un lenguaje de alto nivel de programación 
                                interpretado cuya filosofía hace hincapié en la legibilidad de su código, 
                                se utiliza para desarrollar aplicaciones de todo tipo, ejemplos: Instagram, 
                                Netflix, Spotify, Panda3D, entre otros.</p>

                                <div class="python">
                                    <input type="checkbox" id="click">
                                    <label for="click" class="click-me">Ver curso</label>
                                    <div class="contenido">
                                        <div class="cabezera">
                                            <h2>Curso Python</h2>
                                            <label for="click" class="fas fa-times">X</label>
                                        </div>
                                        <center><iframe class="iframe" src="https://www.youtube.com/embed/chPhlsHoEPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </center>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana">Semana 1</p>
                                                <p>Introducción: La programación y los sistemas computacionales</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 2</p>
                                                <p>Instrucciones básicas del lenguaje Python</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 3</p>
                                                <p>Control de flujo</p>
                                            </div>
                                        <div class="linea"></div>
                                        <label for="click" class="close-btn">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>';
            }
            if(mysqli_num_rows($resultado1)>0){
                echo '<div class="des-contenedor">
            <div class="des-contenido">
                <div class="tarjeta-wrapper">
                    <div class="tarjeta">
                        <div class="imagen-contenido">
                            <span class="overlay"></span>

                            <div class="tarjeta-imagen">
                                <img class="tarjeta-img" src="../cursos_img/javascript.png" alt="">
                            </div>
                        </div>
                        <div class="tarjeta-contenido">

                            <h2 class="curso">Curso JavaScript</h2>
                            <p class="descripcion">JavaScript es un lenguaje de programación que los desarrolladores 
                                utilizan para hacer páginas web interactivas. Desde actualizar fuentes de redes sociales 
                                a mostrar animaciones y mapas interactivos, las funciones de JavaScript pueden mejorar 
                                la experiencia del usuario.</p>

                                <div class="javascript">
                                    <input type="checkbox" id="click1">
                                    <label for="click1" class="click-me1">Ver curso</label>
                                    <div class="contenido1">
                                        <div class="cabezera1">
                                            <h2>Curso JavaScript</h2>
                                            <label for="click1" class="fas fa-times1">X</label>
                                        </div>
                                        <center><iframe class="iframe" src="https://www.youtube.com/embed/2SetvwBV-SU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 1</p>
                                                <p style="font-size: 15px;text-align: center;">Introduccion: Como funciona JavaScript</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 2</p>
                                                <p style="font-size: 15px;text-align: center;">Caracteristicas y gramaticas</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 3</p>
                                                <p style="font-size: 15px;text-align: center;">Programacion orientada a objetos</p>
                                            </div>
                                        <div class="linea"></div>
                                        <label for="click1" class="close-btn1">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>';
            }
            if(mysqli_num_rows($resultado2)>0){
                echo '<div class="des-contenedor">
            <div class="des-contenido">
                <div class="tarjeta-wrapper">
                    <div class="tarjeta">
                        <div class="imagen-contenido">
                            <span class="overlay"></span>

                            <div class="tarjeta-imagen">
                                <img class="tarjeta-img" src="../cursos_img/java.png" alt="">
                            </div>
                        </div>
                        <div class="tarjeta-contenido">
                            
                            <h2 class="curso">Curso Java</h2>
                            <p class="descripcion">Java es un lenguaje de programación ampliamente utilizado para 
                                codificar aplicaciones web. Ha sido una opción popular entre los desarrolladores durante 
                                más de dos décadas, con millones de aplicaciones Java en uso en la actualidad. Java es un 
                                lenguaje multiplataforma.</p>

                                <div class="java">
                                    <input type="checkbox" id="click2">
                                    <label for="click2" class="click-me2">Ver curso</label>
                                    <div class="contenido2">
                                        <div class="cabezera2">
                                            <h2>Java</h2>
                                            <label for="click2" class="fas fa-times2">X</label>
                                        </div>
                                        <center><iframe class="iframe" src="https://www.youtube.com/embed/L1oMLsiMusQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 1</p>
                                                <p style="font-size: 15px;text-align: center;">Introduccion e instalación</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 2</p>
                                                <p style="font-size: 15px;text-align: center;">Errores sintacticos y logicos</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 3</p>
                                                <p style="font-size: 15px;text-align: center;">Metodos</p>
                                            </div>
                                        <div class="linea"></div>
                                        <label for="click2" class="close-btn2">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
';
        if(mysqli_num_rows($resultado3)>0){
            echo ' <div class="des-contenedor">
            <div class="des-contenido">
                <div class="tarjeta-wrapper">
                    <div class="tarjeta">
                        <div class="imagen-contenido">
                            <span class="overlay"></span>

                            <div class="tarjeta-imagen">
                                <img class="tarjeta-img" src="../cursos_img/c.png" alt="">
                            </div>
                        </div>
                        <div class="tarjeta-contenido">
                            
                            <h2 class="curso">Curso C#</h2>
                            <p class="descripcion">C# es un lenguaje de programación desarrollado por Microsoft, orientado
                                 a objetos, que ha sido diseñado para compilar diversas aplicaciones que se ejecutan en 
                                 .NET Framework. Se trata de un lenguaje simple, eficaz y con seguridad de tipos.</p>

                                 <div class="c">
                                    <input type="checkbox" id="click3">
                                    <label for="click3" class="click-me3">Ver curso</label>
                                    <div class="contenido3">
                                        <div class="cabezera3">
                                            <h2>C#</h2>
                                            <label for="click3" class="fas fa-times3">X</label>
                                        </div>
                                        <center><iframe class="iframe" src="https://www.youtube.com/embed/wxznTygnRfQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 1</p>
                                                <p style="font-size: 15px;text-align: center;">Introducción a C#</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 2</p>
                                                <p style="font-size: 15px;text-align: center;">Metodos y consultas</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana" style="font-size: 15px;text-align: center;">Semana 3</p>
                                                <p style="font-size: 15px;text-align: center;">Interfaces graficas</p>
                                            </div>
                                        <div class="linea"></div>
                                        <label for="click3" class="close-btn3">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
            }
?>
        </div>
        <div class="regresar"><a href="../frame/panel_usuario.php?usuario=<?php echo $usuario;?>"><button class="boton1">Regresar</button></a></div>

</body>
</html>