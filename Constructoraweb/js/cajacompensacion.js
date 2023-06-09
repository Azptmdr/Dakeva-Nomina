//CJ
function mostrarFormularioCJ() {
    const formularioCJ = document.getElementById("formularioCJ");
    formularioCJ.style.display = "block";
  }
function cerrarFormularioCJ() {
    formularioBackgroundCJ.style.display = "none";
  }

const formularioBackgroundCJ = document.getElementById("formularioCJ"),
	formularioContainerCJ = document.getElementById("formularioCJContainer"),
	closeButtonCJ = document.getElementById("close-button-CJ");

  // Event listener para cerrar el formulario del CJ al hacer clic en el botón de cierre
  closeButtonCJ.addEventListener("click", function () {
    cerrarFormularioCJ();
	document.getElementById("formularioRegistroCJ").reset();
  });
  
  formularioBackgroundCJ.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundCJ) {
      cerrarFormularioCJ();
    }
  });