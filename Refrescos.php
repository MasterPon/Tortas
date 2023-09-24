<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Refrescos.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="estilos.css.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&family=Maven+Pro&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Super Tortas</title>
    <style>
        /* Agrega estilos para el contenedor de las imágenes y ajusta la alineación */
        .contenido {
            display: flex;
            align-items: center;
            /* Alinea las imágenes verticalmente en el centro */
            margin: 0 auto;
        }
        /* Ajusta el tamaño de las imágenes */
        .imagen img {
            max-width: 100%;
            /* Ajusta el tamaño de la imagen según el ancho disponible */
            max-height: 200px;
            /* Ajusta la altura máxima para las imágenes */
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <a href="index.php" class="a">
        <div class="titulo" id="titulo">
            <h1>SUPER TORTAS</h1>
            <hr class="titulo-hr">
        </div>
    </a>
    <table>
        <tr>
            <td class="imagen-table" id="coca">
                <img src="./imagenes//cocacola.jpg" alt="Imagen de refresco">
                <p>
                    <center>Coca cola</center>
                </p>
            </td>
            <td class="imagen-table" id="7up">
                <center>
                <img src="./imagenes//7up.jpeg" alt="Imagen de 7up">
                <p>
                    <center>Refresco de sabor</center>
                </p>
                </center>
            </td>
        </tr>
    </table>

    <div>
        <input type="submit" name="enviar" value="Enviar" class="boton" id="boton">
        <input type="submit" name="Consulta" value="Consulta" class="boton">
        <input type="submit" name="Editar" value="Editar" class="boton">
    </div>
</body>

</html>
