<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
       body{font-family: Arial; background-color: #1779A6; box-sizing: border-box;}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div1 class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="#"data-toggle="modal" data-target="#inicio">login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"data-toggle="modal" data-target="#registro">Registro</a>
            </li>
           
        </ul>
        </div1>
    </div>
    </nav>

    <!-- Modal -->
<div class="modal fade" id="inicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicia secion</h5>
      </div>
      <div class="modal-body">
        <form action="validar.php" method="post">
        
        <input type ="text" class="form-control" placeholder="email" name="Usuario">
        <br>
        <input type ="password"  class="form-control" placeholder="Password"  name="Passwor">
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ingresar  </button>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicia secion</h5>
      </div>
      <div class="modal-body">
        <form action="registro.php" method="post">
  		<input type="text" id="Cedula"class="form-control" placeholder="Cedula" name="Cedula" value=><br>
        <input type="text" id="Apellido" class="form-control" placeholder="Apellido" name="Apellido" value=><br>
        <input type="text" id="Nombre" class="form-control" placeholder="Nombre" name="Nombre" value=><br>
        <input type="text" id="Usuario"class="form-control" placeholder="Usuario" name="Usuario" value=><br>
        <input type="password" id="Passwor"class="form-control" placeholder="Passwor" name="Passwor" value=><br>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Registrate</button>
      </div>
      </form>
    </div>
  </div>
</div>
</br>

<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imagenes/lechee07.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="imagenes/leche05.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="imagenes/leche06.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="imagenes/leche04.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>
</html>