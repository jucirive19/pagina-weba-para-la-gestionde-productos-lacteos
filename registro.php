<?php
$link=mysqli_connect("localhost","root","")or die("F no se conecto");
mysqli_select_db($link,"quiz");

        
    $cedula=$_POST['Cedula'];
    $apellido=$_POST['Apellido'];
    $nombre=$_POST['Nombre'];
    $usuario=$_POST['Usuario'];
    $Passwor=$_POST['Passwor'];

    $miconsulta=mysqli_query($link,"INSERT INTO prouser (Cedula,Apellido,Nombre,Usuario,Passwor) VALUES ('$cedula','$apellido','$nombre','$usuario','$Passwor')") or die(mysqli_error($link)."<p>Error al insertar</p>");	

	/*$miconsulta=mysqli_query($link,"INSERT INTO usuarios (Cedula,Apellido,Nombre,Direccion,Usuario,Passwor) VALUES ('$cedula','$apellido','$nombre','$direccion','$usuario','$Passwor')") or die(mysql_error($link)."<p>Error al insertar</p>");
    */
	header("location:index.php");

?>