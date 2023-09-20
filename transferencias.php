<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transferencias.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&family=Maven+Pro&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Super Tortas</title>
</head>
<body>
    <a href="index.php" class="a">
        <div class="titulo" id="titulo">
            <h1>SUPER TORTAS</h1>
            <hr class="titulo-hr">
        </div>
    </a>
    <div class="contenido">
        <p>Ingrese la cantidad de transferencia: <input type="number" class="entrada"></p>
        <p>Ingrese el número de tortas: <input type="text" class="entrada"></p>
        <form>
            Comentarios: <br>
            <label for="comentarios"></label>
            <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea>
        </form>
        <div class="botones">
            <input type="submit" name="enviar" value="Enviar" class="boton" id="boton">
            <input type="submit" name="Consulta" value="Consulta" class="boton">
            <input type="submit" name="Editar" value="Editar" class="boton">
        </div>
    </div>
</body>
</html>
