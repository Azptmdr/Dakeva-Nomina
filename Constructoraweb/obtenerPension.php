<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerPension()
{
    global $conn;
    $sql = "SELECT ID_PENSION, DESCRIPCION_PENSION FROM PENSION";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_PENSION'] . '">' . $row['DESCRIPCION_PENSION'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de dependencias</option>';
    }
}

obtenerPension();

$conn = null;
?>