<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Proyecto Shiva</title>
   <link rel="shortcut icon" href="ImagenProyectoSiva.webp" type="image/x-icon">
   <link rel="stylesheet" href="estilo.css">
</head>

<body>
   <main class="main">
      <div class="card">
         <div class="cardHeader">
            <h1>Registro</h1>
         </div>
         <div class="cardBody">
            <form method="post" class="form">
               <label>Nombre de usuario</label>
               <input placeholder="Nombre de usuario" type="text" class="textRegistro" required>
               <label>Contraseña</label>
               <input  placeholder="contraseña" type="password" class="contraseñaRegistro" required>
               <div class="recordar"> </div>
               <input type="submit" value="Registrarse" class="registrarseBtn">
            </form>
         </div>
         <div class="registrarse">
            Ya tienes una cuenta? <a href="inicioDeSesion.php">inicio de sesión</a>
         </div>
      </div>
   </main>
</body>

</html>