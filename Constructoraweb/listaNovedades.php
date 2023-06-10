<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarNovedades()
{
    global $conn;
    $query = "CALL ObtenerTodasNovedades()";

    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>";
            echo "<button style='border: none; background-color: transparent;' onclick='modificarFormularioNovedad()'><i class='bx bxs-edit-alt'></i></button>";
            echo "<button style='border: none; background-color: transparent;' onclick='eliminarFormularioNovedad()'><i class='bx bxs-trash'></i></button>";
            echo "</td>";
            echo "<td>" . $row['empleado_nombre'] . "</td>";
            echo "<td>" . $row['tipo_novedad_descripcion'] . "</td>";
            echo "<td>" . $row['cantidad'] . "</td>";
            echo "<td>" . $row['fecha_inicio'] . "</td>";
            echo "<td>" . $row['fecha_fin'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No se encontraron novedades.</td></tr>";
    }
}

mostrarNovedades();
$conn = null;
?>
