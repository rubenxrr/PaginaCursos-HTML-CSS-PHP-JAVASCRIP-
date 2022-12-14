<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cursos.css">
    <title>Registro de cursos</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    
    <?php
         $usuario = $_GET['usuario'];    
        ?>
        
        <?php
        include("../conec.php");
        $sql = "SELECT * FROM python";
        if ($result=mysqli_query($conex,$sql)) {
        $rowcount=mysqli_num_rows($result);
        }
        

        $sql1 = "SELECT * FROM javascript";
        if ($result1=mysqli_query($conex,$sql1)) {
        $rowcount1=mysqli_num_rows($result1);
        }
        

        $sql2 = "SELECT * FROM java";
        if ($result2=mysqli_query($conex,$sql2)) {
        $rowcount2=mysqli_num_rows($result2);
        }

        $sql3 = "SELECT * FROM c";
        if ($result3=mysqli_query($conex,$sql3)) {
        $rowcount3=mysqli_num_rows($result3);
        }
?>


    <div class="cursos" id="cursos">
        <div class="cursoh1"><h1 class="txth1">Cursos abiertos actualmente</h1></div>
        <div class="des-contenedor">
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
                                    <label for="click" class="click-me">Suscríbete</label>
                                    <center><label><?php echo "Total de registros: ".$rowcount; echo "/30"?></label></center>
                                    <div class="contenido">
                                        <div class="cabezera">
                                            <h2>Curso Python</h2>
                                            <label for="click" class="fas fa-times">X</label>
                                        </div>
                                        <p>Decía Steve Jobs que “todo el mundo debería aprender a programar un ordenador 
                                            porque esto te ayuda a pensar”. Hoy en día la programación es una herramienta 
                                            fundamental para el desarrollo de la tecnología moderna. Este curso te introduce 
                                            en el mundo de la programación en el lenguaje Python. De una forma práctica, 
                                            aprenderás de forma gradual desde el tratamiento básico de variables hasta la programación 
                                            de algoritmos para construir tus propios juegos. Además, te familiarizarás con los conceptos 
                                            fundamentales para el desarrollo de algoritmos y su programación. </p>
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
                                        <a href="registrocursos.php?usuario=<?php echo $usuario;?>"><button class="boton" name="python">Suscríbete</button></a>
                                        
                                        <label for="click" class="close-btn">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="des-contenedor">
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
                                    <label for="click1" class="click-me1">Suscríbete</label>
                                    <center><label><?php echo "Total de registros: ".$rowcount1; echo "/30"?></label></center>
                                    <div class="contenido1">
                                        <div class="cabezera1">
                                            <h2>Curso JavaScript</h2>
                                            <label for="click1" class="fas fa-times1">X</label>
                                        </div>
                                        <p>¡Bienvenido(a)! En este curso gratuito de JavaScript aprenderás paso a paso todo lo que necesitas saber para comenzar a trabajar con este lenguaje de programación, el cual es muy importante para aprender desarrollo web y otras aplicaciones.El curso está diseñado para que aprendas JavaScript paso a paso a través de la práctica con ejemplos y proyectos cortos que te ayudarán a aplicar tus conocimientos. Los temas están enfocados en conceptos específicos pero aquí los he dividido en categorías principales para darte una idea general del contenido.</p>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana">Semana 1</p>
                                                <p>Introduccion: Como funciona JavaScript</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 2</p>
                                                <p>Caracteristicas y gramaticas</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 3</p>
                                                <p>Programacion orientada a objetos</p>
                                            </div>
                                        <div class="linea"></div>
                                        <a href="registrocursos2.php?usuario=<?php echo $usuario;?>"><button class="boton">Suscríbete</button></a>
                                        <label for="click1" class="close-btn1">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="des-contenedor">
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
                                    <label for="click2" class="click-me2">Suscríbete</label>
                                    <center><label><?php echo "Total de registros: ".$rowcount2; echo "/30"?></label></center>
                                    <div class="contenido2">
                                        <div class="cabezera2">
                                            <h2>Java</h2>
                                            <label for="click2" class="fas fa-times2">X</label>
                                        </div>
                                        <p>El lenguaje Java es uno de los que más me ha gustado en mis 45 años que llevo programando. Si bien te podrá parecer un poco complicado empezar a programar en Java, una vez que cubras los conceptos básicos verás qué rápido se avanza.
Java, como todos los lenguajes de programación bien hechos, te dejan hacer cualquier cosa (algunas de ellas con más trabajo que en otros lenguajes y otras casi directamente de cómo piensas la solución al problema). 
Pero una vez que pasas esa primera etapa, programar te va a hacer sentir casi como un sacerdote de un culto extraño, que puede hacer que las cosas sucedan a placer.</p>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana">Semana 1</p>
                                                <p>Introduccion e instalación</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 2</p>
                                                <p>Errores sintacticos y logicos</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 3</p>
                                                <p>Metodos</p>
                                            </div>
                                        <div class="linea"></div>
                                        <a href="registrocursos3.php?usuario=<?php echo $usuario;?>"><button class="boton">Suscríbete</button></a>
                                        <label for="click2" class="close-btn2">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="des-contenedor">
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
                                    <label for="click3" class="click-me3">Suscríbete</label>
                                    <center><label><?php echo "Total de registros: ".$rowcount3; echo "/30"?></label></center>
                                    <div class="contenido3">
                                        <div class="cabezera3">
                                            <h2>C#</h2>
                                            <label for="click3" class="fas fa-times3">X</label>
                                        </div>
                                        <p>En este curso de curso de C# aprenderás a utilizar las herramientas de este lenguaje de programación, para llevar a cabo la creación de datos complejos, la definición de operaciones sobre los datos complejos, la relación de los datos complejos entre ellos e implementar múltiples patrones de diseño. Es fácil de aprender y solo se requiere tener conocimientos elementales.</p>
                                            <br>
                                            <div class="semanas">
                                                <p class="psemana">Semana 1</p>
                                                <p>Introducción a C#</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 2</p>
                                                <p>Metodos y consultas</p>
                                            </div>
                                            <div class="semanas">
                                                <p class="psemana">Semana 3</p>
                                                <p>Interfaces graficas</p>
                                            </div>
                                        <div class="linea"></div>
                                        <a href="registrocursos4.php?usuario=<?php echo $usuario;?>"><button class="boton">Suscríbete</button></a>
                                        <label for="click3" class="close-btn3">Cerrar</label>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="regresar"><a href="../frame/panel_usuario.php?usuario=<?php echo $usuario;?>"><button class="boton1">Regresar</button></a></div>
    
</body>
</html>