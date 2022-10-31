<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ImagenProyectoSiva.webp" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <title>infoPlanta</title>
    <body background="Fondo para proyecto.jpg">
    <?php 
     include("conexion.php");
         if(isset($_GET["myPlanta"])){
             $sal="";
             $sal.= "<h2>Tu planta es: " . $_GET["myPlanta"] . "</h2>";

                 $query = mysqli_query($conn, "SELECT NombreCientifico, NombreConocido, TemperaturaNecesitada, Humedad, CantidadLuzUV, Dueño FROM planta WHERE NombreConocido = '" . $_GET["myPlanta"] . "'");

                 foreach($query->fetch_all() as $row) {
                         $sal.= '<div class="formInfoContainer"><div><label>Nombre científico: ' . $row[0] . '</label><br>
                         <label>Nombre conocido: ' . $row[1] . "</label><br>
                         <label>Temperatura necesitada: " . $row[2] . "°C</label></div>
                         <div><label>Humedad: " . $row[3] . "%<br>
                         <label>Horas de luz: " . $row[4] . "Horas</label><br>
                         <label>Dueño: " . $row[5] . "</label></div></div>";

                 }
                 
             }
     ?>
</head>

<body>
<div class="card">
<div class="cardHeader"> 
             <h1>Información De Tu Planta</h1>
            </div>
            <div class="cardBody">
            <form method="post" class="form" action = "login_register.php">
            <div class="formInfo">
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
                        echo $sal;

    <a href="Prueba.php" style="float:right">regresar</a>
     </div>
    </div>
        </div>
        </form>
</body>
</html>
</body>
</html>