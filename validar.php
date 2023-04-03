<?php
$username=$_POST['Usuario'];
$pass=$_POST['Passwor'];
session_start();
$_SESSION['Usuario']=$username;

$link=mysqli_connect("localhost","root", "") or die("No se pudo establecer conexion");

mysqli_select_db($link,"quiz");

$mysqli="SELECT * FROM prouser WHERE Usuario ='$username' and Passwor='$pass'";
$resultado=mysqli_query($link,$mysqli);
$filas=mysqli_num_rows($resultado);

if($filas){ 
    header("location:inicio.php");
}else{
    ?>
    <?php
    echo'<script>alert("contraseña inorecta")</script>';
    include("index.php");
}
mysqli_free_result($resultado);
mysqli_close($link);

