<?php
include_once 'vendor/autoload.php';
include_once 'conexion.php';

$conexion = new Conexion();
$conn = $conexion->getConexion();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Crear una instancia de Spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Configurar encabezados de columna
$sheet->setCellValue('A1', 'ID Empleado');
$sheet->setCellValue('B1', 'Nombre Empleado');
$sheet->setCellValue('C1', 'Salario Integral');
$sheet->setCellValue('D1', 'Fecha de Ingreso');
$sheet->setCellValue('E1', 'Fecha de Vigencia');
$sheet->setCellValue('F1', 'Cargo');
$sheet->setCellValue('G1', 'EPS');
$sheet->setCellValue('H1', 'ARL');
$sheet->setCellValue('I1', 'Pensión');
$sheet->setCellValue('J1', 'Tipo de Contrato');
$sheet->setCellValue('K1', 'Caja de Compensación');
$sheet->setCellValue('L1', 'Estado');

// Establecer estilos para los encabezados
$boldFontStyle = [
    'font' => [
        'bold' => true,
    ],
];
$sheet->getStyle('A1:O1')->applyFromArray($boldFontStyle);

// Consulta a la base de datos para obtener los empleados activos
$sql = "SELECT EMPLEADO.ID_EMPLEADO, EMPLEADO.NOMBRE_COMPLETO, EMPLEADO.SALARIO_INTEGRAL, EMPLEADO.FECHA_INGRESO, EMPLEADO.FECHA_VIGENCIA, CARGO.DESCRIPCION_CARGO, EPS.DESCRIPCION_EPS, ARL.DESCRIPCION_ARL, PENSION.DESCRIPCION_PENSION, TIPO_CONTRATO.DESCRIPCION_TPC, CJ_COMPENSACION.DESCRIPCION_CMPNSACION, EMPLEADO.ESTADO
        FROM EMPLEADO
        INNER JOIN CARGO ON EMPLEADO.ID_CARGO = CARGO.ID_CARGO
        INNER JOIN EPS ON EMPLEADO.ID_EPS = EPS.ID_EPS
        INNER JOIN ARL ON EMPLEADO.ID_ARL = ARL.ID_ARL
        INNER JOIN PENSION ON EMPLEADO.ID_PENSION = PENSION.ID_PENSION
        INNER JOIN TIPO_CONTRATO ON EMPLEADO.ID_TIPO_CONTRATO = TIPO_CONTRATO.ID_TIPO_CONTRATO
        INNER JOIN CJ_COMPENSACION ON EMPLEADO.ID_CJ_COMPENSACION = CJ_COMPENSACION.ID_CJ_COMPENSACION
        WHERE EMPLEADO.ESTADO = 'A'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Filas en la hoja de cálculo
$row = 2;

// Obtener datos de la consulta y escribirlos en la hoja de cálculo
if ($result && count($result) > 0) {
    foreach ($result as $row_data) {
        $sheet->setCellValue('A' . $row, $row_data['ID_EMPLEADO']);
        $sheet->setCellValue('B' . $row, $row_data['NOMBRE_COMPLETO']);
        $sheet->setCellValue('C' . $row, $row_data['SALARIO_INTEGRAL']);
        $sheet->setCellValue('D' . $row, $row_data['FECHA_INGRESO']);
        $sheet->setCellValue('E' . $row, $row_data['FECHA_VIGENCIA']);
        $sheet->setCellValue('F' . $row, $row_data['DESCRIPCION_CARGO']);
        $sheet->setCellValue('G' . $row, $row_data['DESCRIPCION_EPS']);
        $sheet->setCellValue('H' . $row, $row_data['DESCRIPCION_ARL']);
        $sheet->setCellValue('I' . $row, $row_data['DESCRIPCION_PENSION']);
        $sheet->setCellValue('J' . $row, $row_data['DESCRIPCION_TPC']);
        $sheet->setCellValue('K' . $row, $row_data['DESCRIPCION_CMPNSACION']);
        $sheet->setCellValue('L' . $row, $row_data['ESTADO']);
        $row++;
    }

    // Establecer el ancho automático de las columnas
    foreach (range('A', 'L') as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    // Crear un objeto Writer y guardar la hoja de cálculo
    $writer = new Xlsx($spreadsheet);

    // Limpiar cualquier salida previa
    ob_end_clean();

    // Indicar que el contenido es un archivo descargable
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="reporte_empleados_activos.xlsx"');
    header('Cache-Control: max-age=0');

    // Guardar el archivo en la salida de la respuesta
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');

    // Cerrar el cursor de resultados
    $stmt->closeCursor();
} else {
    echo "No se encontraron empleados activos.";
}

// Cerrar la conexión a la base de datos
$conn = null;
?>
