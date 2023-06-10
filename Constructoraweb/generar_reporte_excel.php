<?php
include_once 'vendor/autoload.php';
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Obtener las fechas de inicio y fin del formulario
$fechaInicioReporte = $_POST['fechaInicioReporte'];
$fechaFinalReporte = $_POST['fechaFinalReporte'];

// Crear una instancia de Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Configurar encabezados de columna
$sheet->setCellValue('A1', 'ID Nomina');
$sheet->setCellValue('B1', 'Sueldo Devengado');
$sheet->setCellValue('C1', 'Transporte');
$sheet->setCellValue('D1', 'Num Dias Trabajados');
$sheet->setCellValue('E1', 'Sueldo Total');
$sheet->setCellValue('F1', 'Fecha Inicio');
$sheet->setCellValue('G1', 'Fecha Fin');
$sheet->setCellValue('H1', 'Nombre Empleado');

// Establecer estilos para los encabezados
$boldFontStyle = [
    'font' => [
        'bold' => true,
    ],
];
$sheet->getStyle('A1:H1')->applyFromArray($boldFontStyle);

// Consulta a la base de datos para obtener la nómina filtrada por fechas
$sql = "SELECT NOMINA.ID_NOMINA, NOMINA.SUELDO_DEVENGADO, NOMINA.TRANSPORTE, NOMINA.NUM_DIAS_TRABAJADOS, NOMINA.SUELDO_TOTAL, NOMINA.fecha_Inicio, NOMINA.fecha_Fin, EMPLEADO.PNOMBRE_EMPLEADO, EMPLEADO.SNOMBRE_EMPLEADO, EMPLEADO.PAPELLIDO_EMPLEADO, EMPLEADO.SAPELLIDO_EMPLEADO FROM NOMINA INNER JOIN EMPLEADO ON NOMINA.ID_EMPLEADO = EMPLEADO.ID_EMPLEADO WHERE NOMINA.fecha_Inicio >= :fechaInicioReporte AND NOMINA.fecha_Fin <= :fechaFinalReporte";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':fechaInicioReporte', $fechaInicioReporte);
$stmt->bindParam(':fechaFinalReporte', $fechaFinalReporte);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Filas en la hoja de cálculo
$row = 2;

// Obtener datos de la consulta y escribirlos en la hoja de cálculo
if ($result && count($result) > 0) {
    foreach ($result as $row_data) {
        $sheet->setCellValue('A' . $row, $row_data['ID_NOMINA']);
        $sheet->setCellValue('B' . $row, $row_data['SUELDO_DEVENGADO']);
        $sheet->setCellValue('C' . $row, $row_data['TRANSPORTE']);
        $sheet->setCellValue('D' . $row, $row_data['NUM_DIAS_TRABAJADOS']);
        $sheet->setCellValue('E' . $row, $row_data['SUELDO_TOTAL']);
        $sheet->setCellValue('F' . $row, $row_data['fecha_Inicio']);
        $sheet->setCellValue('G' . $row, $row_data['fecha_Fin']);
        $sheet->setCellValue('H' . $row, $row_data['PNOMBRE_EMPLEADO'] . ' ' . $row_data['SNOMBRE_EMPLEADO'] . ' ' . $row_data['PAPELLIDO_EMPLEADO'] . ' ' . $row_data['SAPELLIDO_EMPLEADO']);
        $row++;
    }

    // Establecer el ancho automático de las columnas
    foreach (range('A', 'H') as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Crear un objeto Writer y guardar la hoja de cálculo
    $writer = new Xlsx($spreadsheet);

    // Limpiar cualquier salida previa
    ob_end_clean();

    // Indicar que el contenido es un archivo descargable
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="reporte_nomina.xlsx"');
    header('Cache-Control: max-age=0');

    // Guardar el archivo en la salida de la respuesta
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');


    // Cerrar el cursor de resultados
    $stmt->closeCursor();
} else {
    echo "No se encontraron registros de nómina para las fechas seleccionadas.";
}

// Cerrar la conexión a la base de datos
$conn = null;
?>
