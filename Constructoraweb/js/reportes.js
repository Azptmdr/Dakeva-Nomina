// Obtener referencias a los elementos del formulario
var tipoReporteSelect = document.getElementById('opcionesReporte');
var fechaInicioLabel = document.getElementById('labelFechaInicio');
var fechaInicioInput = document.getElementById('fechaInicioReporte');
var fechaFinalLabel = document.getElementById('labelFechaFinal');
var fechaFinalInput = document.getElementById('fechaFinalReporte');

document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada
    
    var seleccion = document.getElementById('opcionesReporte').value;
    var archivo = '';
    
    if (seleccion === 'liquidaciones') {
      archivo = 'generar_reporte_excel.php';
    } else if (seleccion === 'novedades') {
      archivo = 'generar_reporteNov_exel.php';
    } else if (seleccion === 'empleadosActivos') {
        archivo = 'generar_reporteE_exel.php';
    } else if (seleccion === 'empleadosInactivos') {
        archivo = 'generar_reporteEl_exel.php';
    }
    
    if (archivo !== '') {
      this.action = archivo;
      this.submit();
    }
  });
  

  


  fechaInicioLabel.style.visibility = "hidden";
  fechaInicioInput.style.visibility = "hidden";
  fechaFinalLabel.style.visibility = "hidden";
  fechaFinalInput.style.visibility = "hidden";
  fechaFinalInput.removeAttribute("required");
  
  // Agregar el evento 'change' al select
  tipoReporteSelect.addEventListener("change", function() {
      // Obtener el valor seleccionado
      var tipoReporte = tipoReporteSelect.value;
  
      // Mostrar u ocultar los campos de fechas según el tipo de reporte seleccionado
      if (tipoReporte === "novedades" || tipoReporte === "liquidaciones") {
          fechaInicioLabel.style.visibility = "visible";
          fechaInicioInput.style.visibility = "visible";
          fechaFinalLabel.style.visibility = "visible";
          fechaFinalInput.style.visibility = "visible";
          fechaFinalInput.setAttribute("required", "true"); // Agregar el atributo 'required'
      } else {
          fechaInicioLabel.style.visibility = "hidden";
          fechaInicioInput.style.visibility = "hidden";
          fechaFinalLabel.style.visibility = "hidden";
          fechaFinalInput.style.visibility = "hidden";
          fechaFinalInput.removeAttribute("required"); // Eliminar el atributo 'required'
      }
  });
