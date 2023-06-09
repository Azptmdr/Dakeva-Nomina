<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerArl()
{
    global $conn;
    $sql = "SELECT ID_ARL, DESCRIPCION_ARL FROM ARL";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_ARL'] . '">' . $row['DESCRIPCION_ARL'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de dependencias</option>';
    }
}

obtenerArl();

$conn = null;
?>