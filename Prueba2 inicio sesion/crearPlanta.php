<html>

<head>
<meta charset="UTF-8">
<title>CrearPlanta</title>
<link rel="stylesheet" href="estilos.css">
</head>

<body>
<form action="login_register.php" method="POST">
<h2>Agregar Planta</h2>
<input type="text" placeholder="NombreCientifico" name="NombreCientifico" required>
<input type="text" placeholder="NombreConocido" name="NombreConocido" required>
<input type="number" placeholder="TemperaturaNecesitada" name="TemperaturaNecesitada" required>
<input type="number" placeholder="Humedad" name="Humedad" required>
<input type="number" placeholder="CantidadLuzUV" name="CantidadLuzUV" required>
<input type="text" placeholder="Dueño" name="Dueño" required>
<input type="submit" value="Agregar Planta" name="btnagregarPlanta">

<br>
<a href="principal.php" style="float:right">Ver plantas</a>

</form>
</body>
</html> 