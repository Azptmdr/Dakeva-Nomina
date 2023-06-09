<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

if ($conn) {
    // Aquí puedes usar la variable $conn para realizar consultas a la base de datos
    if (isset($_POST['pension'])) {
        $descripcion = $_POST['pension'];

        $sql = "CALL RegistrarPension('$descripcion')";
        if ($conn->query($sql) === TRUE) {
            echo "Error al agregar el registro de pensiones";
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