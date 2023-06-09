<?php
require 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

if ($conn) {
    // Aquí puedes usar la variable $conn para realizar consultas a la base de datos
    if (isset($_POST['eps'])) {
        $descripcion = $_POST['eps'];

        $sql = "CALL RegistrarEPS('$descripcion')";

        if ($conn->query($sql) === TRUE) {
            echo "Error al agregar el registro de EPS";
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