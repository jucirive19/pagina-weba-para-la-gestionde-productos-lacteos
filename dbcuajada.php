<?php
    try {
        $link=mysqli_connect("localhost","root","")or die("F no se conecto");
        mysqli_select_db($link,"quiz");
        $cantidad= $_POST["cantidadP"];
        $cmp=$_POST['cantidadM'];
        $cin=$_POST['cantidadI'];
        $precio= $_POST["costoV"];
        $fechaHoy= $_POST['fecha'];
        $cospro=$cmp+$cin;
        $ganacia=(($precio*$cantidad)-$cospro);
    
        $miconsulta=mysqli_query($link,"INSERT INTO cuajada (fecha,cantidad,costoPr,ganancia) VALUES ('$fechaHoy','$cantidad','$cospro','$ganacia')")or die(mysqli_error($link)."<p>Error al insertar</p>");
        header("location:inicio.php");
        
    } catch (\Throwable $th) {
        echo($th);	
    }
    ?>