<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPN° 9</title>
</head>
<body>
    <form action="r.php" method="post" name="frm">
        <p>Ingrese nombre:</p>
        <input type="text" name="nombre">
        <p>Ingrese edad:</p>
        <input type="number" name="edad">
        <p>Ingrese nivel de estudio:</p>
        <input type="radio" name="estudio" value="Primario">Primario
        <br>
        <input type="radio" name="estudio" value="Secundario">Secundario
        <br>
        <input type="radio" name="estudio" value="Terciario">Terciario
        <br>
        <input type="radio" name="estudio" value="Universitario">Universitario
        <br>
        <input type="radio" name="estudio" value="Sin estudio">Sin estudio
        <br>
        <p>¿Qué deporte hiciste o te gusta?</p>
        <input type="radio" name="deporte" value="Voley">Voley
        <br>
        <input type="radio" name="deporte" value="Gimnasia artística">Gimnasia artística
        <br>
        <input type="radio" name="deporte" value="Tenis">Tenis
        <br>
        <input type="radio" name="deporte" value="Rugby">Rugby
        <br>
        <input type="radio" name="deporte" value="Fútbol">Fútbol
        <br>
        <input type="radio" name="deporte" value="Basket">Basket
        <br>
        <br>
        <p>Seleccione el monto adeudado:</p>
        <select name="monto" required>
            <option value="1-1000">1 - 1000</option>
            <option value="1001-10000">1001 - 10,000</option>
            <option value=">10000">Más de 10,000</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
