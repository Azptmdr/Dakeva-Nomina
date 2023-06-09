//Novedad
function mostrarFormularioNovedad() {
    const formularioNovedad = document.getElementById("formularioNovedad");
    formularioNovedad.style.display = "block";
  }
  function modificarFormularioNovedad() {
    const modificarNovedad = document.getElementById("modificarNovedad");
    modificarNovedad.style.display = "block";
  }
  function eliminarFormularioNovedad() {
    const eliminarNovedad = document.getElementById("eliminarNovedad");
    eliminarNovedad.style.display = "block";
  }

function cerrarFormularioNovedad() {
    formularioBackgroundNovedad.style.display = "none";
  }
  function cerrarModificarNovedad() {
    modificarNovedadBackground.style.display = "none";
  }
  function cerrarEliminarNovedad() {
    eliminarNovedadBackground.style.display = "none";
  }

const formularioBackgroundNovedad = document.getElementById("formularioNovedad"),
	formularioContainerNovedad = document.getElementById("formularioNovedadContainer"),
	modificarNovedadBackground = document.getElementById("modificarNovedad"),
	modificarNovedadContainer = document.getElementById("modificarNovedadContainer"),
	eliminarNovedadBackground = document.getElementById("eliminarNovedad"),
	eliminarNovedadContainer = document.getElementById("eliminarNovedadContainer"),
	closeButtonEliminarNovedad = document.getElementById("close-button-eliminar-novedad"),
	closeButtonModificarNovedad = document.getElementById("close-button-modificar-novedad"),
	closeButtonNovedad = document.getElementById("close-button-novedad");

  // Event listener para cerrar el formulario del novedad al hacer clic en el botón de cierre
  closeButtonNovedad.addEventListener("click", function () {
    cerrarFormularioNovedad();
	document.getElementById("formularioRegistroNovedad").reset();
  });
  closeButtonModificarNovedad.addEventListener("click", function () {
    cerrarModificarNovedad();
	document.getElementById("formularioModificarNovedad").reset();
  });
  closeButtonEliminarNovedad.addEventListener("click", function(){
	cerrarEliminarNovedad();
	document.getElementById("formularioEliminarNovedad").reset();
  })

  // Event listener para cerrar el formulario al hacer clic fuera del formulario-container
  modificarNovedadBackground.addEventListener("click", function (event) {
    if (event.target === modificarNovedadBackground) {
		cerrarModificarNovedad();
    }
  });
  eliminarNovedadBackground.addEventListener("click", function (event) {
    if (event.target === eliminarNovedadBackground) {
		cerrarEliminarNovedad();
    }
  });
  formularioBackgroundNovedad.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundNovedad) {
      cerrarFormularioNovedad();
    }
  });

//campo novedad dias/horas
function mostrarCampo() {
  var tipo = document.getElementById("opciones").value;
  var cantidad = document.getElementById("cantidad");
  var opcionCant = document.getElementById("opcionesCant").value;
  
  if (tipo === "horasextra") {
    cantidad.style.display = "block";
    cantidad.setAttribute("placeholder", "Cantidad de horas");
    cantidad.setAttribute("pattern", "\\d{3}");
  } else if (tipo !== "horasextra") {
    cantidad.style.display = "block";
    cantidad.setAttribute("placeholder", "Cantidad de Días");
    cantidad.removeAttribute("pattern");
  } else {
    cantidad.style.display = "none";
  }
}