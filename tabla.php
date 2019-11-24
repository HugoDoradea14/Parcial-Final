<?php
include_once 'app/Conexion.inc.php';

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="color.css">
    <script type="text/javascript" src="change.js"></script>
    <title>Soccer teams</title>
</head>

<body>
        <div class="contenedor">
            <header class="opciones">
                <a href="tabla.php">
                    <img src="images/logo.jpg" alt="logo_torneo" class="logo">
                </a>
                <nav>
                    <ul class="menuDias" id="menu">
                        <li><a class="ref" href="#" onclick="show_dia1()">¿Que es futbol?</a>
                        <li><a class="ref" href="#" onclick="show_dia2()">Ingresar</a></li>
                        <li><a class="ref" href="#" onclick="show_dia3()">Borrar</a></li>
                        <li><a class="ref" href="tabla.php" >Ver</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    <div class="cuerpo">
                <div href="#" id="intro" class="intro">
                        <h1>Nuestro torneo</h1>
                        <p>
                            Nuestra vision de un torneo es un proyecto diseñado
                            por un conjunto de instituciones que patrocinan y promocionan el
                            deporte, amantes del deporte, este es su momento.
                        </p>
                        <p>
                            Para estar participando en nuestro torneo es tan simple como
                            enviar su informacion ingresando su equpo por este medio, y nosotros
                            les contactamos para enviarles las fechas de sus partidos.
                        </p>
                        <p>
                            Aqui unas reglas para los que nunca han jugado en un torneo.<br>Exitos a todos!!<br>
                        </p>
                        <p>
                            <a class="ref" href="https://ojo.pe/deportes/las-diez-reglas-basicas-de-futbol-noticia/"> 
                                <b>REGLAS</b>
                            </a>
                        </p>
                        <p class="imagen_hacker">
                            <img src="images/torneo.jpg" alt="imagen_futbol" class="hacker">
                        </p>
                    </div>
                <div href="#" id="d1" class="d1 hide">
                <ul class="menuDias actividades">
                    <li class=""><h1>¿Que es el futbol?</h1>
                    <p>
                        Te explicamos qué es el fútbol y cuáles son las principales reglas de este juego.
                         Además, cómo debe ser el campo de juego y el fútbol de sala.
                    </p>
                    <p>
                        El fútbol se define en primer lugar como un juego que incluye dos contrincantes y un árbitro con la capacidad de imponer justicia imparcial. Cada contrincante está compuesto por un equipo de 11 jugadores en campo de juego cada uno, 
                         la opción de incluir jugadores suplentes en el transcurso del partido de fútbol.
                    </p>
                    <p>
                        El objetivo es hacer rodar un balón esférico con el fin de anotar un punto, cuya anotación es válida al cruzar la línea límite del arco contrario. Cada punto logrado es conocido como gol , por lo tanto el equipo que más goles sume 
                        en el transcurso de 90 minutos –tiempo neto de un partido- será el ganador.
                    </p>
                    <p>
                        Cada equipo deberá de incluir en su plantilla un arquero o portero, único jugador capaz de tocar el balón con las manos y con la tarea de impedir que el balón cruce su propio arco; un grupo de defensores; un grupo de volantes y finalmente un grupo de delanteros. Las tácticas de cada
                         plantilla pueden variar en preferencia del director técnico a cargo del equipo de fútbol.
                    </p>
                    <p class="imagen_hacker">
                        <img src="images/fut.jpg" alt="imagen_futbol" class="hacker">     
                    </p>
                    </li>
                    
                </ul>    
                </div>
                <div href="#" id="d2" class="d2 hide">
                    <ul class="menuDias actividades">
                        <LI>
                            <form method="POST" action="app/guardar.inc.php" style="border:1px solid #ccc">
                                <div class="container">
                                  <h1>Inscriba su equipo</h1>
                                  <p>Ingrese los siguientes datos.</p>
                                  <hr>
                              
                                  <label ><b>Nombre del equipo:</b></label>
                                  <input type="text" placeholder="Los crashers" name="nombre" size="40" required>
                                  <label ><b>Pais de origen:</b></label>
                                  <input type="text" placeholder="El Salvador" name="pais" size="60" required>
                                  <label ><b>Director tecnico:</b></label>
                                  <input type="text" placeholder="Aquiles Brinco" name="director" size="40" required>
                                  <label ><b>Capitan:</b></label>
                                  <input type="text" placeholder="Armando Bronca" name="capitan" size="40" required>
                                  <label ><b>Liga:</b></label>
                                  <input type="text" placeholder="Primera" name="liga" size="35" required>
                                 
                              
                                  
                              
                                  <p>Al ingresar su equipo se compromete a participar en el torneo y acatar sus reglas <a href="https://ojo.pe/deportes/las-diez-reglas-basicas-de-futbol-noticia/" style="color:dodgerblue">Reglas</a>.</p>
                              
                                  <div class="clearfix">
                                    <button type="button" class="cancelbtn">Cancelar</button>
                                    <button type="submit" class="signupbtn">Inscribirse</button>
                                  </div>
                                </div>
                              </form>
                            </li>

                        <li class="imgqr">
                            <img src="images/copa.jpeg" alt="QR2" class="qr2 qr">
                        </li>
                </ul>
            </div>
                <div href="#" id="d3" class="d3 hide">
                        <ul class="menuDias actividades">
                                <li class="parrafo">
                                    <form method="POST" action="app/borrar.inc.php" style="border:1px solid #ccc">
                                        <div class="container">
                                            <h1>Aqui puede eliminar su equipo</h1>
                                          <p>Ingrese los siguientes datos.</p>
                                          <hr>
                                      
                                          <label ><b>Nombre del equipo:</b></label>
                                          <input type="text" placeholder="Equipo a eliminar"name="nombre" size="40" required>
                                          <label ><b>Pais de origen:</b></label>
                                          <input type="text" placeholder="Equipo a eliminar" name="pais" size="60" required>
                                        <input type="checkbox" name="checar" value="check" required>
                                            Esta seguro de eliminar su equipo?
                                        <br>
                                        <div class="clearfix">
                                            <button type="button" class="cancelbtn">Cancelar</button>
                                            <button type="submit" class="signupbtn">ELIMINAR</button>
                                          </div>
                                        </div>
                                    </form>
                                    
                    </li>
                    <li class="imgqr">
                            <img src="images/sad.png" alt="QR3" class="qr3 qr">
                        </li>
                    </ul>
                </div>
        <div >
                        <ul class="menuDias actividades">
                            <li><a><h1>"Equipos inscritos"</h1></a>
                                <img src="images/escudos.jpg" class="escudo">
                            </li>
                            <tr>
                                <td>Nombre de equipo--</td>
                                <td>Pais del que procede --</td>
                                <td>Director tecnico--</td>
                                <td>Capitan--</td>
                                <td>Liga--</td>
                                <?php
                                
                                $query = "SELECT * FROM equipos ";
                                $resultado = $conexion->query($query);
                                while($row=$resultado->fetch_assoc()){
                                    ?>
                            <br>
                            <tr>
                                <td><?php echo $row['nombre']; echo"***"?></td>
                                <td><?php echo $row['pais']; echo"***"?></td>
                                <td><?php echo $row['director']; echo"***  "?></td>
                                <td><?php echo $row['capitan']; echo"   ***"?></td>
                                <td><?php echo $row['liga']; ?></td>
                            </tr>
                                <?php
                                }
                                
                                ?>
                                
                            </tr>
                    </ul>
                </div>
            
        </div>
</body>