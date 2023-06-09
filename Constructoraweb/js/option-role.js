
function validateForm() {
  var selectField = document.getElementById("opciones");
  if (selectField.value === "") {
    alert("Por favor, selecciona una opción válida");
    return false;
  }

  // Validación exitosa, enviar formulario de manera programática y redirigir
  var form = document.querySelector('.formulary-sign-up');
  form.submit();
  window.location.href = "home.html";

  return false; // Evitar el envío del formulario de manera predeterminada
}


