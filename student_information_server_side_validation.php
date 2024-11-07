<?php
//Blocking of data entering from illegimate source
$data_source = $_POST['data_source'];
if($data_source != 'student_information')
{
    $all_message_of_db_saving['db_message'] = "Do not try from illeigitimate source";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}

//Server Side Validation 

if(!isset($_POST['student_id']) && $_POST['student_id'] == "")
{
    $all_message_of_db_saving['db_message'] = "Please Enter Your Student Id";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "student_id";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}

else if(!is_numeric($_POST['cgpa']))
{
    $all_message_of_db_saving['db_message'] = "Please Enter a Number";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "cgpa";
    $all_message_of_db_saving['server_side_validated_element_type'] = "numerical value";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();

}

if(!isset($_POST['name']) && $_POST['name'] == "")
{
    $all_message_of_db_saving['db_message'] = "Please Enter Your Name";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "name";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}

if(!isset($_POST['address']) && $_POST['address'] == "")
{
    $all_message_of_db_saving['db_message'] = "Please Enter Your Address";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "address";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}

if(!isset($_POST['department']) && $_POST['department'] == "")
{
    $all_message_of_db_saving['db_message'] = "Please Select Your Department";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "department";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}

else if(!isset($_POST['cgpa']) && $_POST['cgpa'] == "")
{
    $all_message_of_db_saving['db_message'] = "Please Enter Your CGPA";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "cgpa";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}

else if(!is_numeric($_POST['cgpa']))
{
    $all_message_of_db_saving['db_message'] = "Please Enter a Number";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "cgpa";
    $all_message_of_db_saving['server_side_validated_element_type'] = "numerical value";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();

}

else if(!isset($_POST['gender']) && $_POST['gender'] == "")
{
    $all_message_of_db_saving['db_message'] = "Please Select Your Gender";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    $all_message_of_db_saving['server_side_validated_element'] = "gender";

    echo json_encode($all_message_of_db_saving);
    $obj->disconnect();
    exit();
}
?>