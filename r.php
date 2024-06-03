<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuestas</title>
</head>
<body>
<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    if ($edad < 18) {
        echo "Hola $nombre, sos menor de edad <br>";
    } else {
        echo "Hola $nombre, sos mayor de edad <br>";
    }

    $estudios = $_POST['estudio'];
    echo "$nombre estudió hasta el nivel: $estudios <br>";

    $deporte = $_POST['deporte'];
    echo "$nombre hizo $deporte";

    $monto = $_POST['monto'];
    
    echo "Hola, $nombre.<br>";
    echo "El monto adeudado es: $monto.<br>";
    
    if ($monto == '>10000') {
        echo "Debe pagar un recargo porque el monto adeudado supera los 10,000.";
    } else {
        echo "No necesita pagar un recargo.";
    }
    ?>
</body>
</html>