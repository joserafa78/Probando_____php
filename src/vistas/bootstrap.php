<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTSTRAP -->
    <!-- BOOSTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href="src/css/mystile.css ">
    <!--ICONOS https://fontawesome.com/v4/icons/ -->
    <script src="https://kit.fontawesome.com/cbc774aed7.js" crossorigin="anonymous"></script>
    <title>practica de bootstrap</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6"> <!--parte uno-->
                <div class="card card-body">
                    <form action='' method='post' name='form'>
                        <!-- Contenido -->
                        <div class="form-group">
                            <input type='text' id='' placeholder='nombre' class='form-control' name="nombre" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type='text' id='' placeholder='apellidos' class='form-control' name="apellido" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type='number' id='' placeholder='Telefono' class='form-control' name="Telfono" autofocus>
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="descripcion" id="description" rows="3" class="form-control" placeholder="Task"></textarea>
                        </div>
                        <!-- Botones -->
                        <input type='submit' id='' value='Enviar' class='botonRect primaryDeg' name="envia">
                        <input type='reset' id='' value='Reset' class='botonRect primaryDeg' name="envia">
                    </form>
                </div>
            </div>
            <div class="col-md-6"><!--Parte Dos-->
                <!--Se Requiere Bootstrap Web-->
                <div class='card card-body'>
                    <form action='#' method='post' name='form2'>
                        <!-- Contenido -->
                        <div class='form-group'>
                            <label for=''>Nombre</label>
                            <input type='text' id='' placeholder='Nombre' name='nombre' class='form-control'><br>
                        </div>
                        <div class='form-group'>
                            <label for=''>Numero</label>
                            <input type='number' id='' placeholder='Numero' name='numero' class='form-control'><br>
                        </div>
                        <!-- Botones -->
                        <input type='reset' id='' value='Resetear' onclick='' class='botonRect primaryDeg'>
                        <input type='submit' id='' value='Enviar' onclick='' class='botonRect '>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- BOOSTSTRAP WEB -->
    <script src=' https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js' integrity='sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy' crossorigin='anonymous'></script>
</body>

</html>