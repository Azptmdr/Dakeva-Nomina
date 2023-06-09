<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function registrarNovedad(){
    global $conn;
    // Obtener los datos del formulario
    $empleado_id = $_POST['listaEmpleado'];
    $tipo_novedad_id = $_POST['tipoNovedad'];
    $cantidad = $_POST['cantidad'];
    $remuneracion = 0; // Aquí debes establecer el valor de remuneración según tus necesidades
    $fecha_inicio = date('Y-m-d'); // Fecha actual

    // Validar los datos recibidos (puedes agregar más validaciones según tus necesidades)

    if (empty($empleado_id) || empty($tipo_novedad_id)) {
        echo "Error: Por favor completa todos los campos.";
        exit();
    }

    // Llamar al procedimiento almacenado para registrar la novedad
    $query = "CALL RegistrarNovedad($empleado_id, $tipo_novedad_id, $cantidad, $remuneracion, '$fecha_inicio', NULL)";
    $result = $conn->query($query);

    if ($result === TRUE) {
        echo "Error, no se pudo agregar la novedad";
    } else {
        header("Location: nomina.php");
        exit();
    }
}
    
registrarNovedad();
$conn = null;
?>
