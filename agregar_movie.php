<?php
session_start(); // Inicia la sesión

// Verifica si el usuario no está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirige al login si no está autenticado
    exit();
}

include 'Modelo/db.php';
include 'Vista/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    $idtipo = $_POST['idtipo'];

    $stmt = $conn->prepare("INSERT INTO movie (nombre, cantidad, estado, idtipo) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nombre, $cantidad, $estado, $idtipo]);

    header("Location: movie.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Pelicula</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Agregar Nueva Pelicula </h1>
        <form method="post" action="agregar_movie.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad de peliculas:</label>
                <input type="text" name="cantidad" class="form-control" id="cantidad" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado de la Pelicula:</label>
                <input type="text" name="estado" class="form-control" id="estado" required>
            </div>
            <div class="form-group">
                <label for="idtipo">Tipo de Peliculas:</label>
                <select name="idtipo" class="form-control" id="idtipo">
                    <?php
                    $stmt = $conn->prepare("SELECT idtipo, descriptipo FROM tipos");
                    $stmt->execute();
                    $tipos = $stmt->fetchAll();
                    foreach ($tipos as $tipo) {
                        echo "<option value=\"{$tipo['idtipo']}\">{$tipo['descriptipo']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Nueva Pelicula</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include 'Vista/footer.php'; ?>
