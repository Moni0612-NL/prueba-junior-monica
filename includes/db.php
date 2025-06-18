<?php
    $host = 'localhost';
    $db = 'prueba_junior';
    $user = 'root';
    $pass = '1234';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
    } catch (PDOException $e) {
        error_log("Error de conexión: " . $e->getMessage());
        exit("Ocurrió un error al conectar a la base de datos.");
    }
?>

