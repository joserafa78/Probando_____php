<?php
//Arreglos de Usuario
$users = [
    array("usuario" => "Joserafa78", "email" => "joserafa@gmai.com"),
    array("usuario" => "nailaU", "email" => "nai@gmail.com"),
    array("usuario" => "dali", "email" => "dalila@gmail.com"),
    array("usuario" => "graci", "email" => "chela@gmail.com"),
    array("usuario" => "Anonimo", "email" => "anonimo@gmail.com")
];
//Consulta Get
$Num_user = $_GET["user"] ?? "4";
echo "El usuario elegido es: " . $users[$Num_user]["usuario"];
echo "El Correo Electronico es: " . $users[$Num_user]["email"];
//Definidendo las Sesion.
$_SESSION["id"] = $Num_user;
$_SESSION["usuario"] = $users[$Num_user]["usuario"];
$_SESSION["email"] = $users[$Num_user]["email"];


// Iniciar sesión
session_start();

if (isset($_SESSION["id"])) {
    $usuario = $_SESSION["usuario"];
    echo "<h2>Bienvenido $usuario</h2>";
} else {
    $usuario = "No ha iniciado Sesion";
    echo "<h2>No ha iniciado Sexion</h2>";
}


//Cookies
setcookie(name: "color", value: "primary", expires_or_options: time() + 60); //1 minuto
$color = $_COOKIE["color"] ?? "dark";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTSTRAP web -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <!-- BOOSTSTRAP https://getbootstrap.com/docs/5.3/helpers/icon-link/-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>
    <title>Document</title>
</head>

<body>
    <div class="container ">
        <!-- ALERTA -->
        <div class="alert alert-<?= $color ?> alert-dismissible fade show" role="alert">
            <strong>session!</strong> Variable Color .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- FIN ALERTA -->
        <h1 class=" fs-2"> Practica de formulario</h1>

        <div class='card card-body'>
            <form action='url' method='post' name='Nombre'>
                <!-- Contenido -->
                <div class='form-group'>
                    <label for=''>Nombre</label>
                    <input type='text' id='' placeholder='Nombre' name='nombre' class='form-control'><br>
                </div>
                <div class='form-group'>
                    <label for=''>Numero</label>
                    <input type='number' id='' placeholder='Numero' name='numero' class='form-control'><br>
                </div>
                <!-- Botones y sus Clases-->
                <!-- primaryDe,secondaryDeg,successDeg,warningDeg ,dangerDeg-->
                <input type='reset' id='' value='Resetear' onclick='' class='botonRect primaryDeg'>
                <input type='submit' id='' value='Enviar' onclick='' class='botonRect primaryDeg'>
            </form>
        </div><br>
        <!-- Crea alerta -->
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Tabla! <?= $usuario ?></h4>
            <p>Crando una Tabla paso a paso usando Boostrap y sus clases.</p>
            <hr>
            <p class="mb-0">@joseraf78.</p>
        </div>
        <!-- Tabla -->

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jose Rafael</td>
                    <td>Jiemenez Serna</td>
                    <td>16986848</td>
                    <td>
                        <a href='' class='btn btn-primary'>
                            <i class="bi bi-pencil-fill">
                                Editar
                            </i>
                        </a>
                        <a href='' class='btn btn-primary'>
                            <i class="bi bi-trash-fill">Eliminar</i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Naila Nora</td>
                    <td>Ulloa</th>
                    <td>25124251</td>
                    <td> <a href='' class='btn btn-primary'>
                            <i class="bi bi-pencil-fill">
                                Editar
                            </i>
                        </a>
                        <a href='' class='btn btn-primary'>
                            <i class="bi bi-trash-fill">Eliminar</i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
    <!-- BOOSTSTRAP WEB -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js' integrity='sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy' crossorigin='anonymous'></script>
</body>

</html>