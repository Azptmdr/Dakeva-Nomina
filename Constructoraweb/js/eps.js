//Eps
function mostrarFormularioEps() {
    const formularioEps = document.getElementById("formularioEps");
    formularioEps.style.display = "block";
  }
function cerrarFormularioEps() {
    formularioBackgroundEps.style.display = "none";
  }

const formularioBackgroundEps = document.getElementById("formularioEps"),
	formularioContainerEps = document.getElementById("formularioEpsContainer"),
	closeButtonEps = document.getElementById("close-button-eps");

  // Event listener para cerrar el formulario del eps al hacer clic en el botón de cierre
  closeButtonEps.addEventListener("click", function () {
    cerrarFormularioEps();
	document.getElementById("formularioRegistroEps").reset();
  });
  
  formularioBackgroundEps.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundEps) {
      cerrarFormularioEps();
    }
  });