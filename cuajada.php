<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mleko</title>
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
                <li class="nav-item">
                <a class="nav-link" href="T_cuajada.php">Ganacias</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <br>
<?php
    date_default_timezone_set('America/Bogota');
    $fecha=date("Y-m-d H:i:s");
    ?>
    <form action="dbcuajada.php" method="post">
            <input type="text" id="fecha"class="form-control"  name="fecha" value="<?=$fecha?>" readonly><br><br>
            
            <input type="text" id="cantidad" class="form-control" placeholder="cantidad en Kilos" name="cantidadP" value=><br><br>
            <input type="text" id="cantidad" class="form-control" placeholder="costo de materia prima totla" name="cantidadM" value=><br><br>
            <input type="text" id="cantidad" class="form-control" placeholder="costo de insumos total" name="cantidadI" value=><br><br>
            <input type="text" id="cantidad" class="form-control" placeholder="costo de venta" name="costoV" value=><br><br>
            <button type="submit" class="btn btn-primary" >Registro Diario</button>
        </div>
    </form>
    
</body>
</html>