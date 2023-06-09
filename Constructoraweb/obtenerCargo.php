<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerCargo()
{
    global $conn;
    $sql = "SELECT ID_CARGO, DESCRIPCION_CARGO FROM CARGO";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_CARGO'] . '">' . $row['DESCRIPCION_CARGO'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de cargos</option>';
    }
}

obtenerCargo();

$conn = null;
?>