<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de Capacitación</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

  <header>
    <h1>Registro de Capacitaciones</h1>
    <p class="subtitulo">Para TICSIA.SAS </p>
  </header>

  <main>
    <section class="formulario">
      <form id="formulario">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <button type="submit">Registrar</button>
      </form>
    </section>

    <section class="listado">
      <h2>Listado de Personas</h2>
      <div id="listado"></div>
    </section>
  </main>

  <footer>
    <p>Hecho por Mónica &middot; Junio 2025</p>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
