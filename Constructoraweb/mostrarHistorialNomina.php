<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarHistorialNomina()
{
    global $conn;
    $query = "CALL ObtenerNomina()";
    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row['ID_EMPLEADO'] . "</td>";
            echo "<td>" . $row['NOMBRE_COMPLETO'] . "</td>";
            echo "<td>" . $row['SUELDO_DEVENGADO'] . "</td>";
            echo "<td>" . $row['FECHA_NOMINA'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No se encontraron registros de nómina.</td></tr>";
    }
}

mostrarHistorialNomina();
$conn = null;
?>
