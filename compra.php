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

  <!-- catalogo de casa -->
  <div class="container">

    <!--CASA 1 -->

        <div class="row">
            <div class="col-md-6 my-4">
                <div class="card">
                  
                <img src="img/casa1-1.jpg" class="card-img-top" alt="...">
  
                    <div class="card-body">
                        <h5 class="card-title"><strong>PROPIEDAD 1</h5></strong>
                        <strong>Amenidades </strong>
                                Vigilancia privada
                        <P><strong> Exterior </strong>
                                Balcón Jardín
                        <P><strong> General </strong>
                                Cocina equipada Cuarto de servicio Estudio Sala T.V. Seguridad 24 horas </p>
            <p class="card-text"><strong>
                <H4><CENTER>PRECIO::</strong> 15 ETH</p></CENTER></H4>                        
                <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal2">VER MÁS DETALLES</button>
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DE LA CASA 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <P>¡Recámara en Planta Baja! Casa en venta en Zibatá Querétaro. Cuatro recámaras cada una con baño, principal con vestidor y tina. Cuarta recámara en planta baja con baño completo privado. Comedor con doble altura. Jardín con terraza techada. Paneles solares. Doble pasillos lateral.

                <P>Ubicada en Zibatá fraccionamiento con seguridad y accesos controlados las 24 horas. Cuenta con un campo de golf de 18 hoyos y escuela de golf avalada por Lorena Ochoa. También se tienen contempladas canchas deportivas, ciclopista, lagos artificiales, parques y un Town Center donde se concentran comercios y servicios
                </div>
                <img src=" img/d1.jpg">

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="formulario.php" button type="button"  class="btn btn-primary" >Comprar</a></button>
                </div>
                </div>
            </div>
            </div>   
                    </div>
                </div>
            </div>

    <!--CASA 2 -->       
            <div class="col-md-6 my-4">
                <div class="card">
                <img src="img/casa2-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><STRONG> PROPIEDAD 2</h5></STRONG>
                     <p class="card-text">
                            <p><strong> Amenidades</strong>
                                     Vigilancia privada
                            <p><strong>Exterior</strong>
                                     Jardín
                            <p><strong>General</strong>
                                     Cocina equipada Sala T.V. Seguridad 24 horas
                            <p><strong>Recreación</strong>
                                     Alberca Área de juegos infantiles
              </p>
              <p class="card-text"><strong>
                  <H4><CENTER>PRECIO::</strong> 10 ETH</p></CENTER></H4>
              <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal3">VER MÁS DETALLES</button>
              <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DE LA CASA 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            <P> ¡Excelente Diseño! ¡De Una Planta! Casa en Venta en Lomas de Juriquilla Querétaro. Tres recámaras cada una con baño, principal con vestidor y terraza. Sala comedor con vistas al jardín. Amplio jardín con terraza. Cuarto de servicio con baño completo.

            <P>Ubicada en Lomas de Juriquilla fraccionamiento con accesos controlados, áreas verdes, áreas de juegos para niños y servicios ocultos. Muy cercano a escuelas, universidades, gimnasios y plazas comerciales.
                </div>
                <img src="img/d2.jpg">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="formulario.php" button type="button" class="btn btn-primary" >Comprar</a></button>
                </div>
                </div>
            </div>
            </div>   
                    </div>
                </div>
            </div>
    <!--CASA 3 -->        
    <div class="col-md-6 my-4">
                <div class="card">
                <img src="img/casa3-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><STRONG> PROPIEDAD 3</h5></STRONG>
                     <p class="card-text">
                            <p><strong> Amenidades</strong>
                                     Vigilancia privada
                            <p><strong>Exterior</strong>
                                     Jardín, Rood garden 
                            <p><strong>General</strong>
                                     Cocina equipada Sala T.V. Seguridad 24 horas
                            <p><strong>Recreación</strong>
                                     Alberca Área de juegos infantiles
              </p>
              <p class="card-text"><strong>
                  <H4><CENTER>PRECIO::</strong> 20 ETH</p></CENTER></H4>
              <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal4">VER MÁS DETALLES</button>
              <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DE LA CASA 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            <P> ¡Con Roof Garden!Casa en venta en Zakia Querétaro. Tres recámaras cada una con baño, principal con vestidor. Una de las recámaras con tapanco. Tres y medio baños. Estudio en planta baja.

                    <p>En privada con salón de usos múltiples y alberca.

                    <p>Ubicada en Zákia uno de los fraccionamientos mas nuevos y ubicado en una de las zonas de mayor crecimiento y plusvalía en Querétaro. A 3 minutos de Zibatá, a 5 minutos del Refugio y a 10 minutos de Bernardo Quintana. Cuenta con más de 10 hectáreas de parques, con lagos, canchas deportivas, teatro al aire libre, zona de patinaje, zona de crossfit y juegos para niños.</div>
                <img src="img/d3.jpg">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="formulario.php" button type="button" class="btn btn-primary">Comprar</a></button>
                </div>
                </div>
            </div>
            </div>   
                    </div>
                </div>
            </div>
    <!--CASA 4 -->
    <div class="col-md-6 my-4">
                <div class="card">
                <img src="img/casa4-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><STRONG> PROPIEDAD 4</h5></STRONG>
                     <p class="card-text">
                            <p><strong> Amenidades</strong>
                                     Vigilancia privada
                            <p><strong>Exterior</strong>
                                     Jardín
                            <p><strong>General</strong>
                                     Cocina equipada Sala T.V. Seguridad 24 horas
                            <p><strong>Recreación</strong>
                                     Alberca, Área de juegos infantiles, centros de actividades y Gym
              </p>
              <p class="card-text"><strong>
                  <H4><CENTER>PRECIO::</strong> 21 ETH</p></CENTER></H4>
              <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal5">VER MÁS DETALLES</button>
              <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DE LA CASA 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
               <p> ¡Excelente Ubicación! Casa en venta en El Refugio Querétaro. Tres recámaras casa una con baño, principal con vestidor. Sala de TV en planta alta. Estudio o cuarta recámara en planta baja. Cocina equipada con barra desayunador.

                <p>Ubicada en El Refugio, uno de los fraccionamientos con más rápido incremento de plusvalía en Querétaro, debido a sus abundantes y hermosas áreas verdes, su tranquilidad y seguridad.</div>
                <img src="img/d4.jpg">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="formulario.php" button type="button" class="btn btn-primary">Comprar</a></button>
                </div>
                </div>
            </div>
            </div>   
                    </div>
                </div>
            </div>
    <!--CASA 5 -->
    <div class="col-md-6 my-4">
                <div class="card">
                <img src="img/casa5-1.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title"><STRONG> PROPIEDAD </h5></STRONG>
                     <p class="card-text">
                            <p><strong> Amenidades</strong>
                                     Vigilancia privada
                            <p><strong>Exterior</strong>
                                     Jardín
                            <p><strong>General</strong>
                                     Cocina equipada Sala T.V. Seguridad 24 horas
                            <p><strong>Recreación</strong>
                                     Alberca, Área de juegos infantiles, centros de actividades y Gym
              </p>
              <p class="card-text"><strong>
                  <H4><CENTER>PRECIO::</strong> 18 ETH</p></CENTER></H4>
              <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal6">VER MÁS DETALLES</button>
              <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DE LA CASA 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
               <p> ¡Excelente Ubicación! Casa en venta en El Refugio Querétaro. Tres recámaras casa una con baño, principal con vestidor. Sala de TV en planta alta. Estudio o cuarta recámara en planta baja. Cocina equipada con barra desayunador.

                <p>Ubicada en El Refugio, uno de los fraccionamientos con más rápido incremento de plusvalía en Querétaro, debido a sus abundantes y hermosas áreas verdes, su tranquilidad y seguridad.</div>
                <img src="img/d5.jpg">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="formulario.php" button type="button" class="btn btn-primary">Comprar</a></button>
                </div>
                </div>
            </div>
            </div>   
                    </div>
                </div>
            </div>
    <!--CASA 6 -->
            <div class="col-md-6 my-4">
                <div class="card">
                <img src="img/casa6-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong>PROPIEDAD 6</h5></strong>
                        <p class="card-text">
                            <p><strong> Amenidades</strong>
                                     Vigilancia privada
                            <p><strong>Exterior</strong>
                                     Jardín
                            <p><strong>General</strong>
                                     Cocina equipada Sala T.V. Seguridad 24 horas, con alberca pequeña, terraza y asador 
                            <p><strong>Recreación</strong>
                                     Alberca, Área de juegos infantiles, servicio para eventos, servicio de niñeras                         
<strong> <H4><CENTER>PRECIO::</strong> 17 ETH</p></CENTER></H4>
                        <button type="button" class="btn btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal7">VER MÁS DETALLES</button>
               <!--DATOS DE LA CASA -->     
              <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DETALLES DE LA CASA 6</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <p> ¡Con Roof Garden! Casa en venta en Colinas de Juriquilla Querétaro. Cuatro recámaras cada una con baño, principal con vestidor. Estudio en planta baja y sala de TV en planta alta. Roof garden con una recamara secundaria, baño completo y amplia terraza. sala-comedor con vista al jardín.

                    <p>Ubicada en Colinas de Juriquilla fraccionamiento con accesos controlados, áreas verdes, áreas de juegos para niños y servicios ocultos. Muy cercano a escuelas, universidades, gimnasios y plazas comerciales.
                </div>
                <img src="img/d6.jpg">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="formulario.php" button type="button" class="btn btn-primary">Comprar</a></button>
                </div>
                </div>
            </div>
            </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
</body>
</html>