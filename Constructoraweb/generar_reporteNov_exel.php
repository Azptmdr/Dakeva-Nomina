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
$sheet->setCellValue('A1', 'ID Novedad');
$sheet->setCellValue('B1', 'Empleado');
$sheet->setCellValue('C1', 'Tipo de Novedad');
$sheet->setCellValue('D1', 'Cantidad');
$sheet->setCellValue('E1', 'Remuneración');
$sheet->setCellValue('F1', 'Fecha Inicio');
$sheet->setCellValue('G1', 'Fecha Fin');

// Establecer estilos para los encabezados
$boldFontStyle = [
    'font' => [
        'bold' => true,
    ],
];
$sheet->getStyle('A1:G1')->applyFromArray($boldFontStyle);

// Consulta a la base de datos para obtener las novedades filtradas por fechas
$sql = "SELECT NOVEDAD.ID_NOVEDAD, EMPLEADO.NOMBRE_COMPLETO, TIPO_NOVEDAD.DESCRIPCION AS DESCRIPCION_NOVEDAD, NOVEDAD.CANTIDAD, NOVEDAD.remuneracion, NOVEDAD.FECHA_INICIO, NOVEDAD.FECHA_FIN FROM NOVEDAD INNER JOIN EMPLEADO ON NOVEDAD.ID_EMPLEADO = EMPLEADO.ID_EMPLEADO INNER JOIN TIPO_NOVEDAD ON NOVEDAD.ID_TIPO_NOVEDAD = TIPO_NOVEDAD.ID_TIPO_NOVEDAD WHERE NOVEDAD.FECHA_INICIO >= :fechaInicioReporte OR NOVEDAD.FECHA_FIN <= :fechaFinalReporte";
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
        $empleado = $row_data['NOMBRE_COMPLETO'];
        $novedad = $row_data['DESCRIPCION_NOVEDAD'];
        
        $sheet->setCellValue('A' . $row, $row_data['ID_NOVEDAD']);
        $sheet->setCellValue('B' . $row, $empleado);
        $sheet->setCellValue('C' . $row, $novedad);
        $sheet->setCellValue('D' . $row, $row_data['CANTIDAD']);
        $sheet->setCellValue('E' . $row, $row_data['remuneracion']);
        $sheet->setCellValue('F' . $row, $row_data['FECHA_INICIO']);
        $sheet->setCellValue('G' . $row, $row_data['FECHA_FIN']);
        $row++;
    }

    // Establecer el ancho automático de las columnas
    foreach (range('A', 'G') as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Crear un objeto Writer y guardar la hoja de cálculo
    $writer = new Xlsx($spreadsheet);

    // Limpiar cualquier salida previa
    ob_end_clean();

    // Indicar que el contenido es un archivo descargable
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="reporte_novedad.xlsx"');
    header('Cache-Control: max-age=0');

    // Guardar el archivo en la salida de la respuesta
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');

    // Cerrar el cursor de resultados
    $stmt->closeCursor();
} else {
    echo "No se encontraron registros de novedad para las fechas seleccionadas.";
}

// Cerrar la conexión a la base de datos
$conn = null;
?>
