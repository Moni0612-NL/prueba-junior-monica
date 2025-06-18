 $(document).ready(function () {
  function cargarListado() {
    $("#listado").load("controllers/listar.php");
  }

  cargarListado();

  $("#formulario").submit(function (e) {
    e.preventDefault();
    $.post("controllers/registrar.php", $(this).serialize(), function (respuesta) {
      alert(respuesta);
      $("#formulario")[0].reset();
      cargarListado();
    });
  });

  $(document).on("click", ".eliminar", function () {
    let id = $(this).data("id");
    if (confirm("¿Eliminar este registro?")) {
      $.post("controllers/eliminar.php", { id: id }, function (respuesta) {
        alert(respuesta);
        cargarListado();
      });
    }
  });
});

