<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarARL()
{
    global $conn;
    $sql = "SELECT DESCRIPCION_ARL FROM ARL";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>';
            echo '<p>' . $row['DESCRIPCION_ARL'] . '</p>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr>';
        echo '<td colspan="1">No se encontraron registros de ARL</td>';
        echo '</tr>';
    }
}

mostrarARL();

$conn = null;
?>

