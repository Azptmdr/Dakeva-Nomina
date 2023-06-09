<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

if ($conn) {
    
    if (isset($_POST['cajaCompensacion'])) {
        $descripcion = $_POST['cajaCompensacion'];

        $sql = "CALL RegistrarCompensacion('$descripcion')";
        if ($conn->query($sql) === TRUE) {
            echo "Error al agregar el registro de la caja de compensación";
        } else {
            header("Location: nomina.php");
            exit();
        }
    }

    $conn = null;
} else {
    echo "Error en la conexión a la base de datos";
}
?>