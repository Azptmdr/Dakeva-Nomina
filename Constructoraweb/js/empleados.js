//Empleado
function mostrarFormularioEmpleado() {
    const formularioEmpleado = document.getElementById("formularioEmpleado");
    formularioEmpleado.style.display = "block";
  }
  function modificarFormularioEmpleado(idEmpleado) {
    const modificarEmpleado = document.getElementById("formularioModificarEmpleado");
    modificarEmpleado.style.display = "block";
  
    
    $.ajax({
        url: 'listaEmpleado.php', 
        method: 'POST',
        data: {
            idEmpleado: idEmpleado
        },
        success: function(response) {
            const empleado = JSON.parse(response);
            document.getElementById("primerNombre").value = empleado.primerNombre;
            document.getElementById("segundoNombre").value = empleado.segundoNombre;
            document.getElementById("primerApellido").value = empleado.primerApellido;
            document.getElementById("segundoApellido").value = empleado.segundoApellido;
            document.getElementById("salarioIntegral").value = empleado.salarioIntegral;
            document.getElementById("fechaIngreso").value = empleado.fechaIngreso;
            document.getElementById("fechaVigencia").value = empleado.fechaVigencia;
            document.getElementById("eps").value = empleado.eps;
            document.getElementById("arl").value = empleado.arl;
            document.getElementById("pension").value = empleado.pension;
            document.getElementById("cargo").value = empleado.cargo;
            document.getElementById("tipoContrato").value = empleado.tipoContrato;
            document.getElementById("cajaCompensacion").value = empleado.cajaCompensacion;

            // Asigna los demás valores a los campos correspondientes
    
            // Una vez que los campos del formulario están llenos, puedes realizar la actualización
            document.getElementById("modificar-empleado").addEventListener("click", function() {
                actualizarEmpleado(idEmpleado);
            });
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function actualizarEmpleado(idEmpleado) {
    // Obtén los valores actualizados del formulario
    const primerNombre = document.getElementById("primerNombre").value;
    const segundoNombre = document.getElementById("segundoNombre").value;
    const primerApellido =document.getElementById("primerApellido");
    const segundoApellido =document.getElementById("segundoApellido");
    const salarioIntegral =document.getElementById("salarioIntegral");
    const fechaIngreso =document.getElementById("fechaIngreso");
    const fechaVigencia =document.getElementById("fechaVigencia");
    const eps =document.getElementById("eps");
    const arl =document.getElementById("arl");
    const pension =document.getElementById("pension");
    const cargo =document.getElementById("cargo");
    const tipoContrato =document.getElementById("tipoContrato");
    const cajaCompensacion =document.getElementById("cajaCompensacion");
    // Obten los demás valores actualizados
    
    // Realiza la actualización llamando a tu archivo PHP correspondiente
    $.ajax({
        url: 'actualizarEmpleado.php',
        method: 'POST',
        data: {
            idEmpleado: idEmpleado,
            primerNombre: primerNombre,
            segundoNombre: segundoNombre,
            primerApellido:primerApellido,
            segundoApellido:segundoApellido,
            salarioIntegral:salarioIntegral,
            fechaIngreso:fechaIngreso,
            fechaVigencia:fechaVigencia,
            eps:eps,
            arl:arl,
            pension:pension,
            cargo:cargo,
            tipoContrato:tipoContrato,
            cajaCompensacion:cajaCompensacion
          },
        success: function(response) {
            console.log(response);
            // Aquí puedes mostrar una notificación o realizar cualquier acción después de la actualización exitosa
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
            // Aquí puedes mostrar una notificación o manejar el error en caso de que ocurra un problema en la actualización
        }
    });
}

  
  
  function eliminarFormularioEmpleado(idEmpleado) {
    const eliminarEmpleado = document.getElementById("eliminarEmpleado");
    eliminarEmpleado.style.display = "block";
    $.ajax({
      url: 'eliminarEmpleado.php',
      method: 'POST',
      data: {
          idEmpleado: idEmpleado
      },
      success: function(response) {
          // Aquí puedes mostrar una notificación o realizar cualquier acción después de la eliminación exitosa
          console.log(response);
      },
      error: function(xhr, status, error) {
          // Aquí puedes mostrar una notificación o manejar el error en caso de que ocurra un problema en la eliminación
          console.log(xhr.responseText);
      }
  });
  }

function cerrarFormularioEmpleado() {
    formularioBackgroundEmpleado.style.display = "none";
  }
  function cerrarModificarEmpleado() {
    modificarEmpleadoBackground.style.display = "none";
  }
  function cerrarEliminarEmpleado() {
    eliminarEmpleadoBackground.style.display = "none";
  }

const formularioBackgroundEmpleado = document.getElementById("formularioEmpleado"),
	formularioContainerEmpleado = document.getElementById("formularioEmpleadoContainer"),
	modificarEmpleadoBackground = document.getElementById("modificarEmpleado"),
	modificarEmpleadoContainer = document.getElementById("modificarEmpleadoContainer"),
	eliminarEmpleadoBackground = document.getElementById("eliminarEmpleado"),
	eliminarEmpleadoContainer = document.getElementById("eliminarEmpleadoContainer"),
	closeButtonEliminarEmpleado = document.getElementById("close-button-eliminar-empleado"),
	closeButtonModificarEmpleado = document.getElementById("close-button-modificar-empleado"),
	closeButtonEmpleado = document.getElementById("close-button-empleado");

  // Event listener para cerrar el formulario del empleado al hacer clic en el botón de cierre
  closeButtonEmpleado.addEventListener("click", function () {
    cerrarFormularioEmpleado();
	document.getElementById("formularioRegistroEmpleado").reset();
  });
  closeButtonModificarEmpleado.addEventListener("click", function () {
    cerrarModificarEmpleado();
	document.getElementById("formularioModificarEmpleado").reset();
  });
  closeButtonEliminarEmpleado.addEventListener("click", function(){
	cerrarEliminarEmpleado();
	document.getElementById("formularioEliminarEmpleado").reset();
  })

  // Event listener para cerrar el formulario al hacer clic fuera del formulario-container
  modificarEmpleadoBackground.addEventListener("click", function (event) {
    if (event.target === modificarEmpleadoBackground) {
		cerrarModificarEmpleado();
    }
  });
  eliminarEmpleadoBackground.addEventListener("click", function (event) {
    if (event.target === eliminarEmpleadoBackground) {
		cerrarEliminarEmpleado();
    }
  });
  formularioBackgroundEmpleado.addEventListener("click", function (event) {
    if (event.target === formularioBackgroundEmpleado) {
      cerrarFormularioEmpleado();
    }
  });