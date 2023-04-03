<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <style>
        body{font-family: Arial; background-color: #1779A6; box-sizing: border-box;}
        table{
            background-color: white;
            border-radius: 12px;
            color: #999;
            font-size: 0.8em;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
        }

    </style>
    <title>Mleko</title>
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
<div class="container">
    
    </br>
    <table class="table table-striped table-hover">

    <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Costo</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Ganancia</th>
    </tr>
  </thead>
  <tbody>
  <?php 
     try {
        $link=mysqli_connect("localhost","root","")or die("F no se conecto");
		mysqli_select_db($link,"quiz");

        $miconsulta=mysqli_query($link,"SELECT * FROM leche");

		while ($fila=mysqli_fetch_array($miconsulta))
		 {
            echo "</td><td>".$fila['fecha']."</td><td>".$fila['costo']."</td><td>".$fila['cantidad']."</td><td>".$fila['ganancia']."</tr></td>";
           
		}
    } catch (\Throwable $th) {
        echo($th); 
    }

  ?>
  </tbody>
  
    </table>


    </div>
</body>

</html>