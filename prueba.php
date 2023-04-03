<?php
try {
	$link=mysqli_connect("localhost","root","")or die("F no se conecto");
		mysqli_select_db($link,"quiz");
	$nombre= $_POST["nombre"];
	$precio= $_POST["costo"];

	$miconsulta=mysqli_query($link,"INSERT INTO productos (Nombre,Costo) VALUES ('$nombre','$precio')")or die(mysqli_error($link)."<p>Error al insertar</p>");
	echo'<script>alert("Creado con exito")</script>';
	header("location:inicio.php");
} catch (\Throwable $th) {
	echo($th);	
}

?>
