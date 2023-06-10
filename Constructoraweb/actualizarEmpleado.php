<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion(); 

function actualizarEmpleado($idEmpleado, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $salarioIntegral, $fechaIngreso, $fechaVigencia, $eps, $arl, $pension, $cargo, $tipoContrato, $cajaCompensacion)
{
    global $conn;
    
    // Sanitiza los valores antes de usarlos en la consulta SQL para evitar inyección de código
    $idEmpleado = $conn->quote($idEmpleado);
    $primerNombre = $conn->quote($primerNombre);
    $segundoNombre = $conn->quote($segundoNombre);
    $primerApellido = $conn->quote($primerApellido);
    $segundoApellido = $conn->quote($segundoApellido);
    $salarioIntegral = $conn->quote($salarioIntegral);
    $fechaIngreso = $conn->quote($fechaIngreso);
    $fechaVigencia = $conn->quote($fechaVigencia);
    $eps = $conn->quote($eps);
    $arl = $conn->quote($arl);
    $pension = $conn->quote($pension);
    $cargo = $conn->quote($cargo);
    $tipoContrato = $conn->quote($tipoContrato);
    $cajaCompensacion = $conn->quote($cajaCompensacion);
    
    $sql = "CALL ActualizarEmpleado($idEmpleado, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $salarioIntegral, $fechaIngreso, $fechaVigencia, $eps, $arl, $pension, $cargo, $tipoContrato, $cajaCompensacion)";
    
    $result = $conn->query($sql);
    
    if ($result) {
        header("Location: nomina.php");
        exit();
    } else {
        echo "Error al actualizar el empleado.";
    }
}


if (isset($_POST['idEmpleado'])) {
    $idEmpleado = $_POST['idEmpleado'];
    $primerNombre = $_POST['primerNombre'] ?? '';
    $segundoNombre = $_POST['segundoNombre'] ?? '';
    $primerApellido = $_POST['primerApellido'] ?? '';
    $segundoApellido = $_POST['segundoApellido'] ?? '';
    $salarioIntegral = $_POST['salarioIntegral'] ?? '';
    $fechaIngreso = $_POST['fechaIngreso'] ?? '';
    $fechaVigencia = $_POST['fechaVigencia'] ?? '';
    $eps = $_POST['eps'] ?? '';
    $arl = $_POST['arl'] ?? '';
    $pension = $_POST['pension'] ?? '';
    $cargo = $_POST['cargo'] ?? '';
    $tipoContrato = $_POST['tipoContrato'] ?? '';
    $cajaCompensacion = $_POST['cajaCompensacion'] ?? '';
    // Obtén los demás datos actualizados del empleado desde $_POST
    
    // Llama a la función de actualización de empleado
    actualizarEmpleado($idEmpleado, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $salarioIntegral, $fechaIngreso, $fechaVigencia, $eps, $arl, $pension, $cargo, $tipoContrato, $cajaCompensacion);
}

$conn = null;
?>
