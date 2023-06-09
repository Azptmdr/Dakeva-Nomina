<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function listarCargos()
{
    global $conn;
    
    $sql = "SELECT C.DESCRIPCION_CARGO, D.DESCRIPCION_DEPEND, C.SALARIO_BASE
            FROM CARGO C
            INNER JOIN DEPENDENCIA D ON C.ID_DEPENDENCIA = D.ID_DEPENDENCIA";

    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['DESCRIPCION_CARGO'] . '</td>';
            echo '<td>' . $row['DESCRIPCION_DEPEND'] . '</td>';
            echo '<td>' . $row['SALARIO_BASE'] . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr>';
        echo '<td colspan="1">No se encontraron registros de cargos</td>';
        echo '</tr>';
    }
}

listarCargos();

$conn = null;
?>
