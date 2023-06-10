<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

// Llamar al procedimiento almacenado para obtener el total de sueldo
$query = "CALL ObtenerSumaVacaciones()";
$result = $conn->query($query);

if ($result && $result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $totalVacaciones = $row['total_vacaciones'];
} else {
    $totalVacaciones = 0;
}

$conn = null;
?>

<p><?php echo $totalVacaciones; ?></p>