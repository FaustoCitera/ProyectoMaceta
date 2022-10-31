<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contsent="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ImagenProyectoSiva.webp" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>Proyecto Shiva</title>

<body background="Fondo para proyecto.jpg">
    </head>

    <body>
        <main class="main">
            <div class="card">
                <div class="cardHeader">
                    <h2>Crea tu planta </h2>
                </div>
                <div class="cardBody">
                    <form method="post" class="form" action = "login_register.php">
                        <div class="formInfoContainer">
                            <div class="formInfo">
                                <label for="text">Nombre cientifico de la planta</label>
                                <input placeholder="Nombre Cientifico" type="text" name="NombreCientifico" />
                                <label for="text">Porcentaje de Humedad?</label>
                                <input placeholder="Humedad" type="text" name="Humedad" />
                                <label for="text">Horas de sol?</label>
                                <input placeholder="Horas de Luz" type="text" name="CantidadLuzUV" />
                            </div>
                            <div class="formInfo">
                                <label for="text">Nombre conocido de la planta</label>
                                <input placeholder="Nombre Conocido" type="text" name="NombreConocido" />
                                <label for="text">Cuanta temperatura necesita?</label>
                                <input placeholder="Temperatura Necesitada" type="text" name="TemperaturaNecesitada" />
                            </div>
                        </div>
                        <div class="btnContainer">
                                <button class="btnenviar" name="btnenviar" type="submit">Guardar información</button>
                                <a href="Prueba.php"> Vuelva a la seleccion de plantas </a>
                            </div>
                    </form>
                </div>
                <div class="Ancla">
                </div>
            </div>
        </main>
    </body>

</html>