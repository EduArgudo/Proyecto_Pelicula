<?php
include 'Modelo/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Peliculas</title>
</head>
<body>
    <h1>Lista de tipos de Peliculas</h1>
    <table border="2">
        <tr>
            <th>Numero</th>
            <th>Descripción</th>
        </tr>
        <?php
        $stmt = $conn->prepare("SELECT * FROM tipos");
        $stmt->execute();
        $tipos = $stmt->fetchAll();
        foreach ($tipos as $tipo) {
            echo "<tr>
                    <td>{$tipo['idtipo']}</td>
                    <td>{$tipo['descriptipo']}</td>
                </tr>";
        }
        ?>
    </table>
    <a href="index.php">Aqui puedes ver las peliculas</a>
</body>
</html>
