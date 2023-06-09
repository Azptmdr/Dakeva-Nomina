<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

if ($conn) {
    
    if (isset($_POST['arl'])) {
        $descripcion = $_POST['arl'];

        $sql = "CALL RegistrarARL('$descripcion')";
        if ($conn->query($sql) === TRUE) {
            echo "Error al agregar el registro de ARL";
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

