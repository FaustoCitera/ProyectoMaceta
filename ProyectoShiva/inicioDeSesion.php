<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width,initial-scale-1.0">
    <title>Proyecto Shiva</title>
    <link rel="shortcut icon" href="ImagenProyectoSiva.webp" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    -->
</head>

<body>
    <main class="main"> 
        <div class="card"> 
            <div class="cardHeader"> 
                <h1>Inicia Sesion</h1>
            </div>
            <div class="cardBody">
                <form method="post" class="form" action = "Prueba.php">
                    <label for="username">Nombre de usuario</label>
                    <input placeholder="Nombre de usuario" type="text" name="username"/>
                    <label for="password">Contraseña</label>
                    <input placeholder="Contraseña" type="password" name="password"/>
                    <div class="btnContainer">
                        <button class="btnenviar" input type="submit">Iniciar Sesion</button>
                    </div>
                </form>
            </div>
            <div class="registrarse">
                No tienes cuenta? <a href="Registro.php"> registrarse</a>
            </div>
        </div>
    </main>
        <!--<div class="formulario">
            <h1>Inicio de sesion</h1>
        <form method="post">
            <div class="username">
                <label>Nombre de usuario</label>
                <input type="text" required>
            </div>
            <div class="contrasena">
                <label>Contraseña</label>
                <input type="password" required>
            </div>
            <div class="recordar"></div>
            <input type="submit" value="Iniciar">
            </div> -->

    
</body>

</html>