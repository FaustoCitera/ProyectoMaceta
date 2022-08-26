<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    include("conexion.php");
        if(isset($_GET["myPlanta"])){
            echo "<h2>Tu planta es: " . $_GET["myPlanta"] . "</h2>";

                $query = mysqli_query($conn, "SELECT NombreCientifico, NombreConocido, TemperaturaNecesitada, Humedad, CantidadLuzUV, Dueño FROM planta WHERE NombreConocido = '" . $_GET["myPlanta"] . "'");

                foreach($query->fetch_all() as $row) {
                    echo "<h3>Nombre científico: " . $row[0] . "<br>";
                    echo "Nombre conocido: " . $row[1] . "<br>";
                    echo "Temperatura necesitada: " . $row[2] . "°C<br>";
                    echo "Humedad: " . $row[3] . "%<br>";
                    echo "Cantidad de luz UV: " . $row[4] . " Horas<br>";
                    echo "Dueño: " . $row[5] . "<br>";
                }

            }
    ?>
    <a href="principal.php" style="float:right">regresar</a>
</body>
</html>