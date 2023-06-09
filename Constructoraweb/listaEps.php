<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarEPS()
{
    global $conn;
    $sql = "SELECT DESCRIPCION_EPS FROM EPS";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>';
            echo '<p>' . $row['DESCRIPCION_EPS'] . '</p>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr>';
        echo '<td colspan="1">No se encontraron registros de EPS</td>';
        echo '</tr>';
    }
}

mostrarEPS();

$conn = null;
?>