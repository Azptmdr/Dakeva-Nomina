<?php
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

function registrarCargo($descripcion, $id_dependencia, $salario_base)
{
    global $conn;
    $sql = "CALL RegistrarCargo(:DESCRIPCION_CARGO, :ID_DEPENDENCIA, :SALARIO_BASE)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':DESCRIPCION_CARGO', $descripcion);
    $stmt->bindParam(':ID_DEPENDENCIA', $id_dependencia);
    $stmt->bindParam(':SALARIO_BASE', $salario_base);
    
    if ($stmt->execute()) {
        header("Location: nomina.php");
        exit();
    } else {
        echo "Error al registrar el cargo: " . $stmt->errorInfo()[2];
    }
}

    
// Función para obtener el ID de la dependencia a partir de su descripción
function obtenerIdDependencia($descripcion)
{
    global $conn;
    $sql = "SELECT ID_DEPENDENCIA FROM DEPENDENCIA WHERE DESCRIPCION_DEPEND = :DESCRIPCION_DEPEND";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':DESCRIPCION_DEPEND', $descripcion);
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row['ID_DEPENDENCIA'];
}

if (isset($_POST['cargo'], $_POST['dependencias'], $_POST['salario-base'])) {
    $descripcion = $_POST['cargo'];
    $dependencia = $_POST['dependencias'];
    $salario_base = $_POST['salario-base'];

    // Obtener el ID de la dependencia seleccionada
    $id_dependencia = obtenerIdDependencia($dependencia);
    
    // Llamar a la función para agregar el cargo
    registrarCargo($descripcion, $id_dependencia, $salario_base);
}

$conn = null;
?>
