<?php
session_start();
include("../db_connection_class.php");
$obj = new DB_Connection_Class();
$connect = $obj->connection();
$all_message_of_db_saving = [];

include_once("student_information_server_side_validation.php");

$name = trim(mysqli_real_escape_string($connect, $_POST['name']));
$student_id = trim(mysqli_real_escape_string($connect, $_POST['student_id']));
$address = trim(mysqli_real_escape_string($connect, $_POST['address']));
$gender = trim(mysqli_real_escape_string($connect, $_POST['gender']));
$department = trim(mysqli_real_escape_string($connect, $_POST['department']));
$cgpa = trim(mysqli_real_escape_string($connect, $_POST['cgpa']));


$user_id = "iztihad110";
$user_name = "Iztihad Mustakim";

mysqli_query($connect, "BEGIN");
mysqli_query($connect, "START TRANSACTION") or die(mysqli_error($connect));
//mysqli_begin_transaction($connect) or die(mysqli_error($connect));

date_default_timezone_set('Asia/Dhaka');
$recording_time = date("Y-m-d H:i:s");


//check duplicate

$duplicate_query = "SELECT * FROM student_information WHERE 
                    `student_id` = '$student_id'";
$duplicate_result = mysqli_query($connect, $duplicate_query);

if(mysqli_num_rows($duplicate_result) > 0)
{
	//mysqli_rollback($connect);
	mysqli_query($connect, "ROLLBACK");
	$all_message_of_db_saving['db_message'] = "<font color = 'red'>The data was previously saved</font>";
	echo json_encode($all_message_of_db_saving);
	$obj->disconnection();
	exit();

}



$insert_sql_statement = "INSERT INTO `student_information`
						(
                        `student_id`,
						`name`,
                        `address`,
                        `department`,
						`cgpa`,
                        `gender`,
						`recording_person_id`,
						`recording_person_name`,
						`recording_time`
						)
						VALUES
						(
						'$student_id',
						'$name',
                        '$address',
                        '$department',
						'$cgpa',
                        '$gender',
						'$user_id',
						'$user_name',
						'$recording_time'
						)";

mysqli_query($connect, $insert_sql_statement) or die(mysqli_error($connect));
if(mysqli_affected_rows($connect) <> 1)
{
	mysqli_query($connect, "ROLLBACK");
	//$connect->rollback();
	$all_message_of_db_saving['db_message'] = "<font color = 'red'>Data could not be saved</font>";
	echo json_encode($all_message_of_db_saving);
	$obj->disconnection();
	exit();
}


//mysqli_commit($connect);
mysqli_query($connect, "COMMIT");
//$all_message_of_db_saving['db_message'] = "<font color = 'green'>Data has been added successfully</font>";
$all_message_of_db_saving['db_message'] = "<font color = 'green'>Data has been added successfully</font>";
echo json_encode($all_message_of_db_saving);

$obj->disconnection();

?>