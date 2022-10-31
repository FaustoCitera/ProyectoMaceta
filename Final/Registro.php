<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Proyecto Shiva</title>
   <link rel="shortcut icon" href="ImagenProyectoSiva.webp" type="image/x-icon">
   <link rel="stylesheet" href="estilo.css">
   <body background="Fondo para proyecto.jpg">
</head>

<body>
   <main class="main">
      <div class="card">
         <div class="cardHeader">
            <h1>Registro</h1>
         </div>
         <div class="cardBody">
            <form method="post" class="form" action = "login_register.php">
               <label>Nombre de usuario</label>
               <input placeholder="&#128273; Nombre de usuario" type="text" class="textRegistro" name="Usuario" required>
               <label>Contraseña</label>
               <input  placeholder="&#128274; Contraseña" type="password" class="contraseñaRegistro" name="Contraseña" required>
               <div class="recordar"> </div>
               <div class="btnContainer">
                  <input type="submit" value="Registrarse" class="registrarseBtn" name="btnregistrar">
               </div>
            </form>
         </div>
         <div class="registrarseExtra">
         <span style="margin-right: 1%">No tienes cuenta?</span> <a href="inicioDeSesion.php">Inicio de Sesión</a>
         </div>
      </div>
   </main>
</body>

</html>