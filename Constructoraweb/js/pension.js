//Pension
function mostrarFormularioPension() {
    const formularioPension = document.getElementById("formularioPension");
    formularioPension.style.display = "block";
  }
function cerrarFormularioPension() {
    formularioBackgroundPension.style.display = "none";
  }

const formularioBackgroundPension = document.getElementById("formularioPension"),
	formularioContainerPension = document.getElementById("formularioPensionContainer"),
	closeButtonPension = document.getElementById("close-button-pension");

  // Event listener para cerrar el formulario del pension al hacer clic en el botón de cierre
  closeButtonPension.addEventListener("click", function () {
    cerrarFormularioPension();
	document.getElementById("formularioRegistroPension").reset();
  });
  
  formularioBackgroundPension.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundPension) {
      cerrarFormularioPension();
    }
  });