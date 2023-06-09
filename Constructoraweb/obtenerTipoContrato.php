<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerContrato()
{
    global $conn;
    $sql = "SELECT ID_TIPO_CONTRATO, DESCRIPCION_TPC FROM TIPO_CONTRATO";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_TIPO_CONTRATO'] . '">' . $row['DESCRIPCION_TPC'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de dependencias</option>';
    }
}

obtenerContrato();

$conn = null;
?>
