<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function mostrarEmpleados()
{
    global $conn;
    $query = "CALL ObtenerEmpleados()";

    $result = $conn->query($query);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>";
            echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='modificarFormularioEmpleado(" . $row['ID_EMPLEADO'] . ")'><i class='bx bxs-edit-alt'></i></button>";
            echo "<button id='modify-fila' style='border: none; background-color: transparent;' onclick='eliminarFormularioEmpleado(" . $row['ID_EMPLEADO'] . ")'><i class='bx bxs-trash'></i></button>";
            echo "</td>";
            echo "<td>" . $row['NOMBRE_COMPLETO'] . "</td>";
            echo "<td>" . ($row['SALARIO_INTEGRAL'] == 'S' ? 'SI' : 'NO') . "</td>";
            echo "<td>" . $row['FECHA_INGRESO'] . "</td>";
            echo "<td>" . $row['FECHA_VIGENCIA'] . "</td>";
            echo "<td>" . $row['DESCRIPCION_EPS'] . "</td>";
            echo "<td>" . $row['DESCRIPCION_ARL'] . "</td>";
            echo "<td>" . $row['DESCRIPCION_PENSION'] . "</td>";
            echo "<td>" . $row['DESCRIPCION_CARGO'] . "</td>";
            echo "<td>" . $row['DESCRIPCION_TPC'] . "</td>";
            echo "<td>" . $row['DESCRIPCION_CMPNSACION'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11'>No se encontraron empleados.</td></tr>";
    }
}

mostrarEmpleados();
$conn = null;
?>
