<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarPension()
{
    global $conn;
    $sql = "SELECT DESCRIPCION_PENSION FROM PENSION";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>';
            echo '<p>' . $row['DESCRIPCION_PENSION'] . '</p>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr>';
        echo '<td colspan="1">No se encontraron registros de pension</td>';
        echo '</tr>';
    }
}

mostrarPension();

$conn = null;
?>