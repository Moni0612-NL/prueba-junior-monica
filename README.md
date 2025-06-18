# Prueba Técnica - Registro de Interesados en Capacitación

Este es un sistema web sencillo desarrollado en **PHP puro (sin frameworks)** para registrar, listar y eliminar personas interesadas en una capacitación, cumpliendo con los requisitos técnicos y funcionales especificados en la prueba técnica.

## Funcionalidades

- Formulario de registro con validación en el cliente (jQuery)
- Guardado de datos en base de datos MySQL usando PDO
- Listado dinámico de personas (sin recargar la página)
- Eliminación de registros con confirmación y AJAX
- Interfaz moderna y responsiva con HTML + CSS personalizado

## Tecnologías utilizadas

- PHP 8+
- MySQL
- jQuery (AJAX)
- HTML5 + CSS3

## Estructura del proyecto

prueba-junior-monica
├── index.php # Página principal con el formulario y listado
├── css/
│ └── style.css # Estilos personalizados
├── js/
│ └── script.js # Lógica AJAX con jQuery
├── includes/
│ └── db.php # Conexión PDO a la base de datos
├── controllers/
│ ├── registrar.php # Guarda registros nuevos
│ ├── listar.php # Devuelve el listado en JSON
│ └── eliminar.php # Elimina una persona por ID
└── README.md # aqui

## Requisitos

- PHP 8 o superior
- Servidor local (XAMPP, Laragon, etc.)
- MySQL
- Navegador moderno con soporte JS habilitado

## Instalación local

1. Clona el repositorio:
   ```bash
   git clone https://github.com/Moni0612-NL/prueba-junior-monica.git

Crea la base de datos:

CREATE DATABASE prueba_junior;
USE prueba_junior;

CREATE TABLE personas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL,
  edad INT NOT NULL
);
Configura tu entorno local (por ejemplo, http://localhost/prueba-junior-monica/).

Asegúrate de que includes/db.php tenga los datos correctos de conexión:

$host = 'localhost';
$db = 'prueba_junior';
$user = 'root';
$pass = '1234'; // ajusta según tu entorno
Listo Abre index.php en tu navegador local.

Notas adicionales
No se usaron frameworks de PHP, solo jQuery para AJAX.

El sistema funciona completamente sin recargar la página.

El código está comentado y modularizado por claridad.

Autora
Monica Alejandra Pardo Graciano
Desarrolladora Junior
GitHub: @Moni0612-NL

 
