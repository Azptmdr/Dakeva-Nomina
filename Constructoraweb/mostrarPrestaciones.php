<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarPrestaciones()
{
    global $conn;
    $query = "SELECT * FROM vista_beneficios";

    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td><p>" . $row['ID_EMPLEADO'] . "</p></td>";
            echo "<td><p>" . $row['NOMBRE_COMPLETO'] . "</p></td>";
            echo "<td><p>$ " . number_format($row['SALUD'], 0, ',', '.') . "</p></td>";
            echo "<td><p>$ " . number_format($row['PENSION'], 0, ',', '.') . "</p></td>";
            echo "<td><p>$ " . number_format($row['CESANTIAS'], 0, ',', '.') . "</p></td>";
            echo "<td><p>$ " . number_format($row['INTERES_CESANTIAS'], 0, ',', '.') . "</p></td>";
            echo "<td><p>$ " . number_format($row['PRIMA'], 0, ',', '.') . "</p></td>";
            echo "<td><p>$ " . number_format($row['VACACIONES'], 0, ',', '.') . "</p></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No se encontraron registros en el detalle de prestaciones.</td></tr>";
    }
}
mostrarPrestaciones();
$conn = null;
?>