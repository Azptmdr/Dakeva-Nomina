<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

// Llamar al procedimiento almacenado para obtener el total de sueldo
$query = "CALL ObtenerTotalSueldo()";
$result = $conn->query($query);

if ($result && $result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $totalSueldo = $row['TotalSueldo'];
} else {
    $totalSueldo = 0;
}

$conn = null;
?>

<p><?php echo $totalSueldo; ?></p>
