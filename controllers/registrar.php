<?php
    require_once '../includes/db.php';

    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $edad   = intval($_POST['edad'] ?? 0);

    if ($nombre && $correo && $edad > 0) {
        try {
            $stmt = $pdo->prepare("INSERT INTO personas (nombre, correo, edad) VALUES (:nombre, :correo, :edad)");
            $stmt->execute([
                ':nombre' => $nombre,
                ':correo' => $correo,
                ':edad'   => $edad
            ]);
            echo "✅ Registro exitoso";
        } catch (PDOException $e) {
            echo "Error al registrar: " . $e->getMessage();
        }
    } else {
        echo "llena todos los campos";
    }
?>

