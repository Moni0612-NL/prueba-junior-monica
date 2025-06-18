 <?php
    require_once '../includes/db.php';

    try {
        $stmt = $pdo->query("SELECT * FROM personas ORDER BY id DESC");
        echo "<table border='1'>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Acción</th>
                </tr>
                </thead>
                <tbody>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['nombre']}</td>
                    <td>{$row['correo']}</td>
                    <td>{$row['edad']}</td>
                    <td><button class='eliminar' data-id='{$row['id']}'>Eliminar</button></td>
                </tr>";
        }

        echo "</tbody></table>";
    } catch (PDOException $e) {
        echo "Error al listar: " . $e->getMessage();
    }
?>

