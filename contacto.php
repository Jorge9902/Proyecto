<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROYECTO </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .form-container {
      width: 500px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }
  </style>
</head>

<body style="background-color:#F1F1CA;">

<!-- CONTENIDO DE EL MENU DE OPCIONES  -->
<div class="container">
<ul class="nav justify-content-center">
<nav class="navbar" style="background-color: #e3f2fd;" >
        <a class="nav-link" href="index.php">Inicio</a>
        <a class="nav-link" href="compra.php">Compras</a>  
        <a class="nav-link" href="contacto.php">Contacto</a>
  </nav> 
</div>
  </ul>



 <br>
 <br>
 <CENTER> 
<div class="col-md-5">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  
  <strong>CONTACTANOS!!</strong> Para obtener mas información sobre las casa en venta, deja tus datos y te enviaresmos 
                    nuevos inmobiliaros, asi com las grandes ofertas del Mes.
</div>
</div>
</CENTER>
  <div class="container">
        <div class="row justify-content-end">



            <div class="col-md-7">
                <div>
                    
                    <form action="assets/php/datatopdf.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electronico:</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="numero">Número telefonico:</label>
                            <input type="text" class="form-control" id="numero" name="numero" required>
                        </div>
                        <div class="form-group">
                            <label for="comentario">Comentario sobre que informacion le gustaria recibir:</label>
                            <input type="text" class="form-control" id="comentario" name="comentario" required>
                        </div>
                        <input class="form-control" type="text" value="Contactanos a 4271151682" aria-label="readonly input example" readonly>

                        <br><button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


  </body>
</html>