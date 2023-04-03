<?php
$link=mysqli_connect("localhost","root","")or die("F no se conecto");
mysqli_select_db($link,"quiz");

    $nombre=$_POST['nombre'];
    $precio=$_POST['costo'];

    $miconsulta=mysqli_query($link,"INSERT INTO productos (Nombre,Costo) VALUES ('$nombre','$precio')");
    header("location:inicio.php");
    echo'<script>alert("producto diario creado")</script>';

   
    
?>