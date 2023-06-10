<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

// Llamar al procedimiento almacenado para obtener el total de sueldo
$query = "CALL ObtenerSumaPrima()";
$result = $conn->query($query);

if ($result && $result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $totalPrima = $row['total_prima'];
} else {
    $totalPrima = 0;
}

$conn = null;
?>

<p><?php echo $totalPrima; ?></p>