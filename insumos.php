<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
		body{font-family: Arial; background-color: #1779A6; box-sizing: border-box;}

        form{
            background-color: white;
            border-radius: 12px;
            color: #999;
            font-size: 0.8em;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
        }

        input, textarea{
            outline: none;      
            width: 260px;
        }

        .field{
            border: solid 1px #ccc;
            padding: 10px;

            
        }

        .field:focus{
            border-color: #1779A6;
        }

        .center-content{
            text-align: center;
        }

	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-blue bg-light ">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">Mleko</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            </ul>
            </div>
        </div>
        </nav>
        <br>
<?php 
try {
            date_default_timezone_set('America/Bogota');
            $fecha=date("Y-m-d H:i:s");


        $link=mysqli_connect("localhost","root","")or die("F no se conecto");
                mysqli_select_db($link,"quiz");
            

        if( !isset($_POST['boton']) ){
        $codigo=$_POST['codigo'];
        $consulta=mysqli_query($link,"SELECT * FROM cosproducto WHERE id =$codigo")or die (mysqli_error($link));
        $row=mysqli_fetch_array($consulta);

        //$codigo=$row['id'];
        $nombrein=$_POST['NombreIN'];
        $costoin=$_POST['CostoIN'];
        $nombre=$row['Nombre'];
        $precio=$row['Costo'];
        $codigo=$row['id'];
        $cantidad=$row['Cantidad'];
        $prcos=$row['costoPr'];

        

        echo "<form name=x action='' method=post>";

        echo"<p>Nombre del producto</p>";
        echo "<input type=text class=form-control value=".$nombre." name=nombre readonly />";
        echo "<br>";
        echo "<br>";
        echo"<p>fecha</p>";
        echo "<input type=text class=form-control name=fecha value=".$fecha." readonly />";
        echo "<br>";
        echo "<br>";
        echo"<p>Nombre del Insumo</p>";
        echo "<input type=text class=form-control name=nombrein value=".$nombrein." />";
        echo "<br>";
        echo "<br>";
        echo"<p>Costo del Insumo</p>";
        echo "<input type=number class=form-control name=costoin value=".$costoin." />";
        echo "<br>";
        echo "<br>";
        echo"<p>Cantidad de productos echos</p>";
        echo "<input type=number class=form-control name=cantidad value=".$cantidad."  />";
        echo "<br>";
        echo "<br>";
        echo"<p>valor del producto</p>";
        echo "<input type=text class=form-control value=".$precio." name=Costo readonly />";
        echo "<br>";
        echo "<br>";
        echo"<p>Coste de producion</p>";
        echo "<input type=text class=form-control value=".$prcos." name=preciocos readonly />";
        echo "<br>";
        echo "<br>";
        echo"<p>Codigo del producto</p>";
        echo "<input type=text class=form-control value=".$codigo." name= codigo readonly/>";
        echo "<br>";
        echo "<br>";
        echo "<input type=submit class=btn btn-primary name=boton value='confirmar'/>";
        echo "</form>";

        }
        else{
            $codigo=$_POST['codigo'];
            $nombre=$_POST['nombre'];
            $precio=$_POST['Costo'];
            $costoIN=$_POST['costoin'];
            $nombreIN=$_POST['nombrein'];
            $fecha=$_POST['fecha'];
            $cantidad=$_POST['cantidad'];
            $prcos=$_POST['preciocos'];
            $tocos=$prcos+$costoIN;
            $ganacia=(($precio*$cantidad)-$tocos);
            
            $miconsulta=mysqli_query($link,"INSERT INTO insumos (NombreIN,CostoIN,Fecha,NombrePR) VALUES ('$nombreIN','$costoIN','$fecha','$nombre')") or die(mysqli_error($link)."<p>Error al insertar</p>");	

            $sql=mysqli_query($link,"UPDATE cosproducto set Nombre='$nombre', Costo='$precio', Fecha='$fecha', Cantidad='$cantidad', costoPR='$tocos', ganancia='$ganacia' WHERE id=$codigo")or die(mysqli_error($link)."error Actulizando");
	        header("location:inicio.php");
        }
   
} catch (\Throwable $th) {
    echo($th);
}


?>
</body>
</html>