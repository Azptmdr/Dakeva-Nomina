<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerCaja()
{
    global $conn;
    $sql = "SELECT ID_CJ_COMPENSACION, DESCRIPCION_CMPNSACION FROM CJ_COMPENSACION";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_CJ_COMPENSACION'] . '">' . $row['DESCRIPCION_CMPNSACION'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de dependencias</option>';
    }
}

obtenerCaja();

$conn = null;
?>