<!DOCTYPE html>
<html lang="en">
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
            border-radius: 8px;
            color: #999;
            font-size: 0.8em;
            padding: 20px;  
            margin: 0 auto;
            width: 280px;
        }

        input, textarea{
            outline: none;      
            width: 230px;
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


<nav class="navbar navbar-expand-lg navbar-blue bg-light">
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
$consulta=mysqli_query($link,"SELECT * FROM productos WHERE id =$codigo")or die (mysqli_error($link));
$row=mysqli_fetch_array($consulta);

//$codigo=$row['id'];
$nombre=$row['Nombre'];
$precio=$row['Costo'];

echo "<form name=x action='' method=post>";

echo "<input type=text class=form-control value=".$nombre." name=nombre readonly />";
echo "<br>";
echo "<br>";
echo "<input type=text class=form-control value=".$precio." name=Costo readonly />";
echo "<br>";
echo "<br>";
echo "<input type=text class=form-control name=fecha value=".$fecha." readonly />";
echo "<br>";
echo "<br>";
echo "<input type=number class=form-control name=cantidad placeholder='cantidad' />";
echo "<br>";
echo "<br>";
echo "<input type=text class=form-control name=NombreP placeholder='Nombre comprador' />";
echo "<br>";
echo "<br>";
echo "<input type=submit name=boton class=btn btn-primary value='Registar'/>";
echo "</form>";

}
else{
	$nombre=$_POST['nombre'];
	$precio=$_POST['Costo'];
	$fecha=$_POST['fecha'];
	$cantidad=$_POST['cantidad'];
    $nombreP=$_POST['NombreP'];
	
    $miconsulta=mysqli_query($link,"INSERT INTO cosproducto (Nombre,Costo,Fecha,Cantidad) VALUES ('$nombre','$precio','$fecha','$cantidad')") or die(mysqli_error($link)."<p>Error al insertar</p>");

    $sql=mysqli_query($link,"INSERT INTO compradores (nombreC,producto,cantidad,costo,fecha) VALUES ('$nombreP','$nombre','$cantidad','$precio','$fecha')") or die(mysqli_error($link)."<p>Error al insertar</p>");

    header("location:inicio.php");
  ;
    echo'<script>alert("producto diario creado")</script>';
}
} catch (\Throwable $th) {
    echo($th);
}


?>
</body>
</html>
