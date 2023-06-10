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

    // Validar los datos recibidos (puedes agregar más validaciones según tus necesidades)

    if (empty($empleado_id) || empty($tipo_novedad_id)) {
        echo "Error: Por favor completa todos los campos.";
        exit();
    }

    // Llamar al procedimiento almacenado para registrar la novedad
    $query = "CALL RegistrarNovedad(:empleadoId, :tipoNovedadId, :cantidad)";
    $statement = $conn->prepare($query);
    $statement->bindParam(':empleadoId', $empleado_id, PDO::PARAM_INT);
    $statement->bindParam(':tipoNovedadId', $tipo_novedad_id, PDO::PARAM_INT);
    $statement->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        header("Location: nomina.php");
        exit();
    } else {
        echo "Error, no se pudo agregar la novedad";
    }
}
    
registrarNovedad();
$conn = null;
?>

