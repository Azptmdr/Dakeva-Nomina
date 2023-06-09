<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerTipoNovedad()
{
    global $conn;
    $sql = "SELECT ID_TIPO_NOVEDAD, DESCRIPCION FROM TIPO_NOVEDAD";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<option value="' . $row['ID_TIPO_NOVEDAD'] . '">' . $row['DESCRIPCION'] . '</option>';
        }
    } else {
        echo '<option value="">No se encontraron registros de de tipo de novedad</option>';
    }
}

obtenerTipoNovedad();

$conn = null;
?>
