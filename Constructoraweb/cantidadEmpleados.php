<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerCantidadEmpleados() {
    global $conn;
    $query = "SELECT COUNT(*) AS cantidad FROM EMPLEADO WHERE ESTADO = 'A'";
    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row['cantidad'];
    }
    
    return 0;
}

$cantidadEmpleados = obtenerCantidadEmpleados();
$conn = null;
?>