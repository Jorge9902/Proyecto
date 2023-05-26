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
<!-- CONTENIDO DE LOS CUADROS -->


  <div class="container my-5">
        <h1>Te acompañamos en cada paso...</h1>
        <br>
        <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      <h3>Búsqueda clara y rapida </h3>
     <li>Pensamos nuestros filtros y mapas para simplificar tu experiencia en nuestro portal</li>  
    </div>
    <div class="col">
       <h3>Tienes tu propia lección </h3>
       <li>Accede de forma fácil y segura a los aviso, he informacion de cada casa en venta   </div></li>
    <div class="col">
       <h3>Varida de anuncios</h3>
      <li> Nosotros ofrecesmos las mejores opciones de inmuebles para ti </li>
    </div>
  </div>
</div>


<br>
<br><br>
        <div class="row">
            <div class="col-md-4 my-3">
                <div class="card">
                  
                <img src="img/casa1-1.jpg" class="card-img-top" alt="...">
  
                    <div class="card-body">
                        <h5 class="card-title">Propiedad 1</h5>
                        <p class="card-text">Casa en Zibatá cuenta con 4 recamaras, comedor con doble altura, jardin con terraza techada, panales solares y doble pasillos laterales</p>
                        <p class="card-text">Price: 15 ETH</p>
                        <a button class="btn btn-dark btn-block" onclick="buyProperty(1)" href="compra.php">DETALLES</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card">
                <img src="img/casa3-3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Propiedad 2</h5>
                        <p class="card-text">Casa en venta en Zakia, Querétaro. Cuenta con 3 recamaras cada una con baño, mas de 10 hectáreas de parque con lagos, canchas deportivas, teatro al aire libre, zona de crossfit, zona de patinaje y juegos para niños</p>
                        <p class="card-text">Price: 20 ETH</p>
                        <a button class="btn btn-dark btn-block" onclick="buyProperty(1)" href="compra.php">DETALLES</a></button>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card">
                <img src="img/casa4-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Propiedad 3</h5>
                        <p class="card-text">Casa en venta en el Refugio, Querétaro. Cuenta con 3 recámaras, estudio, seguridad las 24 horas, con area de actividades, juegos infantiles y alberca.</p>
                        <p class="card-text">Price: 21 ETH</p>
                        <a button class="btn btn-dark btn-block" onclick="buyProperty(1)" href="compra.php">DETALLES</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>