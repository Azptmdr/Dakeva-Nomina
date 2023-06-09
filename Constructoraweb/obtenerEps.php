<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerEps()
{
    global $conn;
    $sql = "SELECT ID_EPS, DESCRIPCION_EPS FROM EPS";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_EPS'] . '">' . $row['DESCRIPCION_EPS'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de dependencias</option>';
    }
}

obtenerEps();

$conn = null;
?>