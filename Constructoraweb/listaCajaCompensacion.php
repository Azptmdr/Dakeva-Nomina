<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarCJ()
{
    global $conn;
    $sql = "SELECT DESCRIPCION_CMPNSACION FROM CJ_COMPENSACION";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>';
            echo '<p>' . $row['DESCRIPCION_CMPNSACION'] . '</p>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr>';
        echo '<td colspan="1">No se encontraron registros de cajas de compensación</td>';
        echo '</tr>';
    }
}

mostrarCJ();

$conn = null;
?>