//Cargo
function mostrarFormularioCargo() {
    const formularioCargo = document.getElementById("formularioCargo");
    formularioCargo.style.display = "block";
  }
function cerrarFormularioCargo() {
    formularioBackgroundCargo.style.display = "none";
  }

const formularioBackgroundCargo = document.getElementById("formularioCargo"),
	formularioContainerCargo = document.getElementById("formularioCargoContainer"),
	closeButtonCargo = document.getElementById("close-button-cargo");

  // Event listener para cerrar el formulario del cargo al hacer clic en el botón de cierre
  closeButtonCargo.addEventListener("click", function () {
    cerrarFormularioCargo();
	document.getElementById("formularioRegistroCargo").reset();
  });
  
  formularioBackgroundCargo.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundCargo) {
      cerrarFormularioCargo();
    }
  });