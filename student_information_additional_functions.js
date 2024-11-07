$(document).ready(function()
{
    $('#department').select2();
})
function reset_all_values_of_student_information_form(form_id)
{
    document.getElementById(form_id).reset();
}
function reset_the_value_of_this_element(element_id)
{
    document.getElementById(element_id).value = "";
}
function alert_like_message_box(message_in_body,title)
{
	$('#student_information_display_box .modal-body').html(message_in_body);
	$('#student_information_display_box .modal-header .modal-title').html(title);
	$('#student_information_display_box').modal('show');
}
function send_data_to_the_server_for_saving_in_database()
{
    let validate = validation_of_form_information();
    let personal_data  = $("#student_personal_information").serialize();
    let academic_data  = $("#student_academic_information").serialize();
    let url_encoded_form_data = personal_data + '&' + academic_data;

    if(validate != false)
    {
        $.ajax({
            type: "post",
            url: "student_information_saving.php",
            data: url_encoded_form_data,
            success: function (data) {
               
               let all_message_of_db_saving = JSON.parse(data);
               let database_message = all_message_of_db_saving['db_message'];
               let database_message_type = all_message_of_db_saving['db_message_type'];
               let server_side_validated_element = all_message_of_db_saving['server_side_validated_element'];
               let server_side_validated_element_type = all_message_of_db_saving['server_side_validated_element_type'];

               if(server_side_validated_element != undefined)
               {
                    id_of_currently_validated_element = server_side_validated_element;
               }
               else
               {
                    id_of_currently_validated_element = 'submit_button';
               }

               if(server_side_validated_element_type != undefined)
               {
                    id_of_currently_validated_element = server_side_validated_element;
                    $("#" + id_of_currently_validated_element).val('');
               }
               
                //alert(data);
               
               alert_like_message_box(database_message,database_message_type);
            },

            error: function(error_thrown)
            {
                alert_like_message_box(error_thrown, "Error!!");
            }
        }); //End of $.ajax
    }
}//End of function send_data_to_the_server_for_saving_in_database()

