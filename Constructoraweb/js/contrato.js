//Contrato
function mostrarFormularioContrato() {
    const formularioContrato = document.getElementById("formularioContrato");
    formularioContrato.style.display = "block";
  }
function cerrarFormularioContrato() {
    formularioBackgroundContrato.style.display = "none";
  }

const formularioBackgroundContrato = document.getElementById("formularioContrato"),
	formularioContainerContrato = document.getElementById("formularioContratoContainer"),
	closeButtonContrato = document.getElementById("close-button-contrato");

  // Event listener para cerrar el formulario del contrato al hacer clic en el botón de cierre
  closeButtonContrato.addEventListener("click", function () {
    cerrarFormularioContrato();
	document.getElementById("formularioRegistroContrato").reset();
  });
  
  formularioBackgroundContrato.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundContrato) {
      cerrarFormularioContrato();
    }
  });