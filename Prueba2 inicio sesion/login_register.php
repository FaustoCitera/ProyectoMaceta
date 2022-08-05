<?php

include("conexion.php");

$nombre = $_POST["Usuario"];
$pass   = $_POST["Contraseña"];
$Plant = $_POST["Planta"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM usuario WHERE Usuario = '$nombre' AND Contraseña ='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='principal.php' </script>";
    }else
    {
	    echo "<script> alert('Usuario no existe'); window.location='index.html' </script>";
    }
}
    
//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO usuario (Usuario,Contraseña) values ('$nombre','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
} 

if(isset($_POST["Planta"]))
{
	$query2 = mysqli_query($conn2,"SELECT NombreCientifico FROM planta");
	$nr2 = mysqli_num_rows($query2);

	if($nr2==1)
	{
		echo "<script> alert('Usted paso a ver la informacion de la planta'); window.location='planta.html' </script>";
    }
}

?>