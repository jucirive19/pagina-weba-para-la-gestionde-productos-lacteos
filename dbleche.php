<?php
    try {
        $link=mysqli_connect("localhost","root","")or die("F no se conecto");
        mysqli_select_db($link,"quiz");
        $cantidad= $_POST["cantidad"];
        $precio= $_POST["costo"];
        $fechaHoy= $_POST['fecha'];
        $ganacia=$precio*$cantidad;
    
        $miconsulta=mysqli_query($link,"INSERT INTO leche (fecha,costo,cantidad,ganancia) VALUES ('$fechaHoy','$precio','$cantidad','$ganacia')")or die(mysqli_error($link)."<p>Error al insertar</p>");
        header("location:inicio.php");
        
    } catch (\Throwable $th) {
        echo($th);	
    }
    ?>