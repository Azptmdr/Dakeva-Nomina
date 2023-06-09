<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarTipoContrato()
{
    global $conn;
    $sql = "SELECT DESCRIPCION_TPC FROM TIPO_CONTRATO";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>';
            echo '<p>' . $row['DESCRIPCION_TPC'] . '</p>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr>';
        echo '<td colspan="1">No se encontraron registros de tipos de contrato</td>';
        echo '</tr>';
    }
}

mostrarTipoContrato();

$conn = null;
?>