<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion(); 

function eliminarEmpleado($idEmpleado)
{
    global $conn;
    $idEmpleado = $_POST['idEmpleado'];
    $sql = "CALL EliminarEmpleado('$idEmpleado')";
    
    $result = $conn->query($sql);
    
    if ($result) {
        header("Location: nomina.php");
        exit();
    } else {
        // Error al eliminar empleado
        echo "Error al eliminar el empleado.";
    }
}

if (isset($_POST['idEmpleado'])) {
    
    eliminarEmpleado($idEmpleado);
}

$conn = null;
?>