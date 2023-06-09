<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerDetalleNomina()
{
    global $conn;
    $query = "CALL ObtenerDetalleNomina()";

    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['ID_EMPLEADO'] . "</td>";
            echo "<td>" . $row['NOMBRE_COMPLETO'] . "</td>";
            echo "<td>" . $row['TRANSPORTE'] . "</td>";
            echo "<td>" . $row['NOVEDADES_REMUNERADAS'] . "</td>";
            echo "<td>" . $row['SUELDO_TOTAL'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No se encontraron empleados.</td></tr>";
    }
}


obtenerDetalleNomina();
$conn = null;
?>

