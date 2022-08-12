<?php

include("conexion.php");

$nombre = $_POST["Usuario"];
$pass   = $_POST["Contraseña"];
$Plant = $_POST["myPlanta"];
$NombreCientifico = $_POST["NombreCientifico"];
$NombreConocido = $_POST["NombreConocido"];
$Temperatura = $_POST["TemperaturaNecesitada"];
$Humedad = $_POST["Humedad"];
$CantidadLuzUV = $_POST["CantidadLuzUV"];
$Dueño = $_POST["Dueño"];

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

if(isset($_POST["myPlanta"]))
{
	$query = mysqli_query($conn,"SELECT (NombreCientifico,NombreConocido,TemperaturaNecesitada,Humedad,CantidadLuzUV,Dueño) FROM planta WHERE NombreConocido = $Plant");
	$nr = mysqli_num_rows($query);

	if ($nr==1)	
	{ 
		echo "<script> alert('Usted paso a ver la informacion de la planta'); window.location='planta.php' </script>";
    }else
    {
	    echo "<script> alert('La planta no existe'); window.location='principal.php' </script>";
    }	
}

if(isset($_POST["btnagregarPlanta"]))
{
	$sqlgrabar = "INSERT INTO planta (NombreCientifico,NombreConocido,TemperaturaNecesitada,Humedad,CantidadLuzUV,Dueño) values ('$NombreCientifico','$NombreConocido','$Temperatura','$Humedad','$CantidadLuzUV','$Dueño')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Planta registrado con exito: $NombreConocido'); window.location='principal.php' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
	}
} 
?>