<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
    <h1>Probando Compuser herecia y Pruebas unitaras</h1>
    <p>Creando clases</p>
    <p>Muestra los Resultado de las Clases</p>

    <?php
require_once 'vendor/autoload.php';
use App\clases\alumno;
use App\clases\Nota;
    $estudante = new alumno("jose","Ulloa",15324);
    $calif = new Nota("Matematica",12);
    $estudante->agregaNota($calif);
        dd($estudante->muestrNotas());
    ?>g
    <h4>FIN.</h4>
</body>
</html>