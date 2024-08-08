
<?php include 'Vista/header.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Peliculas Disponibles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Consulta de Peliculas Disponibles</h1>
    <h2>Puedes consultar y/o agregar nuevos Peliculas disponibles</h2>
    <h3>En la barra de arriba puedes acceder directamente sin demora</h3>

    <!-- Carrusel de imágenes -->
    <div id="peliculaCarrusel" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#peliculaCarrusel" data-slide-to="0" class="active"></li>
            <li data-target="#peliculaCarrusel" data-slide-to="1"></li>
            <li data-target="#peliculaCarrusel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Romance.jpg" class="d-block w-100" alt="Pelicula 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Estamos hechos para entendernos</h5>
                    <p>Un cincuentón profesor de historia descubre que se está quedando sordo poco a poco, por lo que comienza a tener una vida recluído debido a su discapacidad. Un día conoce a Claire, una viuda cuya hija es muda, lo que ayudará a integrarse de nuevo en la sociedad.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="BadBoys.jpg" class="d-block w-100" alt="Pelicula 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bad Boys 4</h5>
                    <p>Los detectives Mike Lowrey y Marcus Burnett investigan la corrupción dentro de la policía de Miami cuando su difunto capitán Conrad Howard es acusado póstumamente de estar involucrado con la mafia mexicana, pero un montaje los convierte en fugitivos, lo que los obliga a trabajar fuera de la ley para resolver el caso.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Avengers3.jpg" class="d-block w-100" alt="Pelicula 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Avengers 3</h5>
                    <p>Un nuevo peligro acecha procedente de las sombras del cosmos. Thanos, el infame tirano intergaláctico, tiene como objetivo reunir las seis Gemas del Infinito, artefactos de poder inimaginable, y usarlas para imponer su perversa voluntad a toda la existencia.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#peliculaCarrusel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#peliculaCarrusel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php include 'Vista/footer.php'; ?>

