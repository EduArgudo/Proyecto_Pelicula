<?php
include 'Modelo/db.php';
include 'Vista/header.php';
?>

<h1>Lista de Peliculas a consultar</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Estado</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stmt = $conn->prepare("SELECT e.codigo, e.nombre, e.cantidad, e.estado, c.descriptipo FROM movie e JOIN tipos c ON e.idtipo = c.idtipo");
        $stmt->execute();
        $movie = $stmt->fetchAll();
        foreach ($movie as $movies) {
            echo "<tr>
                    <td>{$movies['codigo']}</td>
                    <td>{$movies['nombre']}</td>
                    <td>{$movies['cantidad']}</td>
                    <td>{$movies['estado']}</td>
                    <td>{$movies['descriptipo']}</td>
                </tr>";
        }
        ?>
    </tbody>
</table>

<?php include 'Vista/footer.php'; ?>
