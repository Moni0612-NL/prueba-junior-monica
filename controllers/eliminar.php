<?php
    require_once '../includes/db.php';

    $id = intval($_POST['id'] ?? 0);

    if ($id > 0) {
        try {
            $stmt = $pdo->prepare("DELETE FROM personas WHERE id = :id");
            $stmt->execute([':id' => $id]);
            echo "🗑️ Registro eliminado correctamente";
        } catch (PDOException $e) {
            echo "Error al eliminar " . $e->getMessage();
        }
    } else {
        echo "ID inválido";
    }
?>

