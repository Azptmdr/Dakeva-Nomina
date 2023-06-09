<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerDependencias()
{
    global $conn;
    $sql = "SELECT DESCRIPCION_DEPEND FROM DEPENDENCIA";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['DESCRIPCION_DEPEND'] . '">' . $row['DESCRIPCION_DEPEND'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de dependencias</option>';
    }
}

obtenerDependencias();

$conn = null;
?>

