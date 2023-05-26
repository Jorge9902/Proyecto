<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div>
                    <br>
                    <br>
                    <h2>Detalle de la compra</h2>
                    <form action="assets/php/datatopdf.php" method="POST">
                        <div class="form-group">
                            <label for="nombreComprador">Nombre del comprador:</label>
                            <input type="text" class="form-control" id="nombreComprador" name="nombreComprador" required>
                        </div>
                        <div class="form-group">
                            <label for="nombreVendedor">Nombre del vendedor:</label>
                            <input type="text" class="form-control" id="nombreVendedor" name="nombreVendedor" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaCompra">Fecha de la compra:</label>
                            <input type="text" class="form-control" id="fechaCompra" name="fechaCompra" required>
                        </div>
                        <div class="form-group">
                            <label for="numeroCasa">Numero de casa:</label>
                            <input type="text" class="form-control" id="numeroCasa" name="numeroCasa" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <a href="compra.php" button type="button" class="btn btn-secondary">Cerrar</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>