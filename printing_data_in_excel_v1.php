<?php
session_start();
// redirect output to client browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="export_commercial_documents_printing_report.xlsx"');
header('Cache-Control: max-age=0');

include("../db_connection_class.php");
$obj = new DB_Connection_Class();
$con = $obj->connection();

//include_once('session_management.php');

// Require composer autoload

require_once __DIR__ . '/../spreadsheet_excel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create an instance of the class:
$spreadsheet = new Spreadsheet();

$worksheet = $spreadsheet->getActiveSheet();

/********** Capturing Master Section Data Using POST Method [START]*********/
/*
$student_id = mysqli_real_escape_string($con,$_POST['student_id']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$name_number = mysqli_real_escape_string($con,$_POST['name_number']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$department = mysqli_real_escape_string($con,$_POST['department']);
$cgpa = mysqli_real_escape_string($con,$_POST['cgpa']);
$lc_opening_date = mysqli_real_escape_string($con,$_POST['lc_opening_date']);
$splitted_lc_opening_date = explode("/",$lc_opening_date);
$lc_opening_date = $splitted_lc_opening_date[2]."-".$splitted_lc_opening_date[1]."-".$splitted_lc_opening_date[0];


$tt_opening_date = mysqli_real_escape_string($con,$_POST['tt_opening_date']);
$splitted_tt_opening_date = explode("/",$tt_opening_date);
$tt_opening_date = $splitted_tt_opening_date[2]."-".$splitted_tt_opening_date[1]."-".$splitted_tt_opening_date[0];


$total_lc_value = mysqli_real_escape_string($con,$_POST['total_lc_value']);
$total_tt_value = mysqli_real_escape_string($con,$_POST['total_tt_value']);
$system_commercial_invoice_number = mysqli_real_escape_string($con,$_POST['system_commercial_invoice_number']);
$commercial_invoice_number = mysqli_real_escape_string($con,$_POST['commercial_invoice_number']);
$date_of_commerical_invoice = mysqli_real_escape_string($con,$_POST['date_of_commerical_invoice']);
$splitted_date_of_commerical_invoice = explode("/",$date_of_commerical_invoice);
$date_of_commerical_invoice = $splitted_date_of_commerical_invoice[2]."-".$splitted_date_of_commerical_invoice[1]."-".$splitted_date_of_commerical_invoice[0];


$total_commerical_invoice_value = mysqli_real_escape_string($con,$_POST['total_commerical_invoice_value']);
$lc_number = mysqli_real_escape_string($con,$_POST['lc_number']);
$system_lc_number = mysqli_real_escape_string($con,$_POST['system_lc_number']);
$tt_number = mysqli_real_escape_string($con,$_POST['tt_number']);
$system_tt_number = mysqli_real_escape_string($con,$_POST['system_tt_number']);
*/
/********** Capturing Master Section Data Using POST Method [END] *********/

/********** Capturing Master Section Data Using GET Method [START] *********/
/*
$student_id = mysqli_real_escape_string($con,$_GET['student_id']);
$name = mysqli_real_escape_string($con,$_GET['name']);
$name_number = mysqli_real_escape_string($con,$_GET['name_number']);
$address = mysqli_real_escape_string($con,$_GET['address']);
$department = mysqli_real_escape_string($con,$_GET['department']);
$cgpa = mysqli_real_escape_string($con,$_GET['cgpa']);
$lc_opening_date = mysqli_real_escape_string($con,$_GET['lc_opening_date']);
$splitted_lc_opening_date = explode("/",$lc_opening_date);
$lc_opening_date = $splitted_lc_opening_date[2]."-".$splitted_lc_opening_date[1]."-".$splitted_lc_opening_date[0];


$tt_opening_date = mysqli_real_escape_string($con,$_GET['tt_opening_date']);
$splitted_tt_opening_date = explode("/",$tt_opening_date);
$tt_opening_date = $splitted_tt_opening_date[2]."-".$splitted_tt_opening_date[1]."-".$splitted_tt_opening_date[0];


$total_lc_value = mysqli_real_escape_string($con,$_GET['total_lc_value']);
$total_tt_value = mysqli_real_escape_string($con,$_GET['total_tt_value']);
$system_commercial_invoice_number = mysqli_real_escape_string($con,$_GET['system_commercial_invoice_number']);
$commercial_invoice_number = mysqli_real_escape_string($con,$_GET['commercial_invoice_number']);
$date_of_commerical_invoice = mysqli_real_escape_string($con,$_GET['date_of_commerical_invoice']);
$splitted_date_of_commerical_invoice = explode("/",$date_of_commerical_invoice);
$date_of_commerical_invoice = $splitted_date_of_commerical_invoice[2]."-".$splitted_date_of_commerical_invoice[1]."-".$splitted_date_of_commerical_invoice[0];


$total_commerical_invoice_value = mysqli_real_escape_string($con,$_GET['total_commerical_invoice_value']);
$lc_number = mysqli_real_escape_string($con,$_GET['lc_number']);
$system_lc_number = mysqli_real_escape_string($con,$_GET['system_lc_number']);
$tt_number = mysqli_real_escape_string($con,$_GET['tt_number']);
$system_tt_number = mysqli_real_escape_string($con,$_GET['system_tt_number']);
*/
/********** Capturing Master Section Data Using GET Method [END]*********/

/******************************************************************* Master Section Excel Report Part [START] *******************************************************************/

/********** Formating Report Headline [START]*********/

$worksheet->mergeCells('B1:F1');
$worksheet->setCellValue('B1', 'Student Information');
$worksheet->getStyle('B1:F1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('0070C0');
$worksheet->getStyle('B1:F1')->getFont()->setBold(true);
$worksheet->getStyle('B1:F1')->getFont()->setSize(15);
$worksheet->getStyle('B1:F1')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$worksheet->getStyle('B1:F1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$worksheet->getStyle('B1:F1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

/********** Formating Report Headline [END]*********/

/******** Generating Part of WHERE Condtition of SQL for Searching Information [START] ********/
/*
$part_of_where_condition ='';

if($student_id != "select")
{
	$part_of_where_condition .= "AND `student_id`='$student_id' ";
}
if($name != "select")
{
	$part_of_where_condition .= "AND `name`='$name' ";
}
if($name_number != "select")
{
	$part_of_where_condition .= "AND `name_number`='$name_number' ";
}
if($address != "select")
{
	$part_of_where_condition .= "AND `address`='$address' ";
}
if($department != "select")
{
	$part_of_where_condition .= "AND `department`='$department' ";
}
if($cgpa != "select")
{
	$part_of_where_condition .= "AND `cgpa`='$cgpa' ";
}
if($lc_opening_date != "")
{
	$part_of_where_condition .= "AND `lc_opening_date`='$lc_opening_date' ";
}
if($tt_opening_date != "")
{
	$part_of_where_condition .= "AND `tt_opening_date`='$tt_opening_date' ";
}
if($total_lc_value != "")
{
	$part_of_where_condition .= "AND `total_lc_value`='$total_lc_value' ";
}
if($total_tt_value != "")
{
	$part_of_where_condition .= "AND `total_tt_value`='$total_tt_value' ";
}
if($system_commercial_invoice_number != "select")
{
	$part_of_where_condition .= "AND `system_commercial_invoice_number`='$system_commercial_invoice_number' ";
}
if($commercial_invoice_number != "select")
{
	$part_of_where_condition .= "AND `commercial_invoice_number`='$commercial_invoice_number' ";
}
if($date_of_commerical_invoice != "")
{
	$part_of_where_condition .= "AND `date_of_commerical_invoice`='$date_of_commerical_invoice' ";
}
if($total_commerical_invoice_value != "")
{
	$part_of_where_condition .= "AND `total_commerical_invoice_value`='$total_commerical_invoice_value' ";
}
if($lc_number != "select")
{
	$part_of_where_condition .= "AND `lc_number`='$lc_number' ";
}
if($system_lc_number != "select")
{
	$part_of_where_condition .= "AND `system_lc_number`='$system_lc_number' ";
}
if($tt_number != "select")
{
	$part_of_where_condition .= "AND `tt_number`='$tt_number' ";
}
if($system_tt_number != "select")
{
	$part_of_where_condition .= "AND `system_tt_number`='$system_tt_number' ";
}
*/
/******** Generating Part of WHERE Condtition of SQL for Searching Information [END] ********/



/**************************************************************** Grid/Lines Section Excel Report Part [START] ****************************************************************/

$worksheet->setCellValue('B2','student_id');
$worksheet->setCellValue('C2','name');
$worksheet->setCellValue('D2','address');
$worksheet->setCellValue('E2','department');
$worksheet->setCellValue('F2','cgpa');


/********** Formating Grid/Line Header of Report [START]*********/

$worksheet->getStyle('B2:F2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFCCCCCC');
$worksheet->getStyle('B2:F2')->getFont()->setBold(true);
$worksheet->getStyle('B2:F2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$worksheet->getStyle('B2:F2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

$worksheet->getColumnDimension('B')->setAutoSize(true);
$worksheet->getColumnDimension('C')->setAutoSize(true);
$worksheet->getColumnDimension('D')->setAutoSize(true);
$worksheet->getColumnDimension('E')->setAutoSize(true);
$worksheet->getColumnDimension('F')->setAutoSize(true);



/********** Formating Grid/Line Header of Report [END]*********/

/******* Making Dynamic SQL for Searching Grid/Lines Information [START] *******/
$address = 'Dhaka';

$dynamic_select_sql_for_grid_data = "SELECT
									`student_id`
									,`name`
									,`address`
									,`department`
									,`cgpa`

									FROM `student_information`
									
									WHERE `address` = '$address'
									";
									

									


//echo $dynamic_select_sql_for_grid_data;

/********************************* Making Dynamic SQL for Searching Information [END] *********************************/

/******* Making Dynamic SQL for Searching Grid/Lines Information [END] *******/

$result_for_details_or_grid_data = mysqli_query($con,$dynamic_select_sql_for_grid_data) or die(mysqli_error($con));

$excel_row_number = 3;

while($row_of_details_or_grid_data = mysqli_fetch_assoc($result_for_details_or_grid_data))
{

	$student_id = $row_of_details_or_grid_data['student_id'];
	$name = $row_of_details_or_grid_data['name'];
	$address = $row_of_details_or_grid_data['address'];
	$department = $row_of_details_or_grid_data['department'];
	$cgpa = $row_of_details_or_grid_data['cgpa'];


	$worksheet->setCellValue('B'.$excel_row_number,$student_id);
	$worksheet->setCellValue('C'.$excel_row_number,$name);
	$worksheet->setCellValue('D'.$excel_row_number,$address);
	$worksheet->setCellValue('E'.$excel_row_number,$department);
	$worksheet->setCellValue('F'.$excel_row_number,$cgpa);

	$excel_row_number++;

} // End of while($row_of_details_or_grid_data = mysqli_fetch_assoc($result_for_details_or_grid_data))

$last_row = $excel_row_number -1;
$worksheet->getStyle('B2:F2'.$last_row)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
$worksheet->getStyle('B3:F3'.$last_row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('E7F7F9');

/**************************************************************** Grid/Lines Section Excel Report Part [END] ****************************************************************/



$writer = new Xlsx($spreadsheet);
// Output a Excel file
//$writer->save('export_commercial_documents_printing.xlsx');
$writer->save('php://output');

$obj->disconnection();

//echo "<font color = 'green'>The Spreadsheet was created</font>";

?>
