<?php
// Incluir el archivo de conexión
include_once 'conexion.php';

// Crear una instancia de la clase de conexión
$conexion = new Conexion();

// Obtener la conexión
$conn = $conexion->getConexion();

function obtenerTotalNomina(){
    global $conn;
    $sql = "CALL ObtenerTotalSueldo()";
    $resultado = mysqli_query($conn, $sql);

    // Verificar si se obtuvo el resultado correctamente
    if ($resultado) {
        // Obtener el resultado del procedimiento almacenado
        $fila = mysqli_fetch_assoc($resultado);
        $totalSueldo = $fila['TotalSueldo'];

        // Imprimir el resultado
        echo "El total de sueldos es: " . $totalSueldo;
    } else {
        echo "Error al llamar al procedimiento almacenado: " . mysqli_error($conn);
} 
}


// Cerrar la conexión
$conn=null;
?>
