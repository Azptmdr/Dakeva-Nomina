//Arl
function mostrarFormularioArl() {
    const formularioArl = document.getElementById("formularioArl");
    formularioArl.style.display = "block";
  }
function cerrarFormularioArl() {
    formularioBackgroundArl.style.display = "none";
  }

const formularioBackgroundArl = document.getElementById("formularioArl"),
	formularioContainerArl = document.getElementById("formularioArlContainer"),
	closeButtonArl = document.getElementById("close-button-arl");

  // Event listener para cerrar el formulario del arl al hacer clic en el botón de cierre
  closeButtonArl.addEventListener("click", function () {
    cerrarFormularioArl();
	document.getElementById("formularioRegistroArl").reset();
  });
  
  formularioBackgroundArl.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundArl) {
      cerrarFormularioArl();
    }
  });