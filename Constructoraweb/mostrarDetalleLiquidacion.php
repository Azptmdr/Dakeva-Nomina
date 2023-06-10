<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function obtenerDetalleLiquidacion()
{
    global $conn;
    $query = "CALL ObtenerDetalleLiquidacion()";

    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['ID_EMPLEADO'] . "</td>";
            echo "<td>" . $row['NOMBRE_COMPLETO'] . "</td>";
            echo "<td>" . $row['SALUD'] . "</td>";
            echo "<td>" . $row['PENSION'] . "</td>";
            echo "<td>" . $row['CESANTIAS'] . "</td>";
            echo "<td>" . $row['INTERES_CESANTIAS'] . "</td>";
            echo "<td>" . $row['PRIMA'] . "</td>";
            echo "<td>" . $row['VACACIONES'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No se encontraron empleados.</td></tr>";
    }
}


obtenerDetalleLiquidacion();
$conn = null;
?>