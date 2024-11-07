let id_of_currently_validated_element;

//checking cgpa in numerical or not at the time of input
function immediate_validation_of_numerical_value(element_id)
{
    //id_of_currently_validated_element = form_element_id;
    var value_of_form_element = $("#" + element_id).val();

  if(!$.isNumeric(value_of_form_element) && value_of_form_element !== "." && value_of_form_element !== "") 
  {
      $("#" + element_id).val("");
      alert_like_message_box("<font color = '#e8590c'>Please Enter a Number</font>","Warning!!")
  }
}
//validation of form elements
function validation_of_form_information()
{
    
    let name =  document.getElementById('name').value.trim();
    let address = document.getElementById('address').value.trim();
    let male = document.getElementById('male').checked;
    let female = document.getElementById('female').checked;
    let student_id = document.getElementById('student_id').value.trim();
    let department = document.getElementById('department').value;
    let cgpa = document.getElementById('cgpa').value.trim(); 

    if(name == "")
    {
        //alert("Please enter your name");
        alert_like_message_box("<font color = '#e8590c'>Please Enter Your Name</font>", "Warning!!");
        id_of_currently_validated_element = "name";
        document.getElementById('name').focus();
        return false;
    }
    else if(address == "")
    {
        //alert("Please enter your address");
        alert_like_message_box("<font color = '#e8590c'>Please Enter Your Address</font>", "Warning!!");
        id_of_currently_validated_element = "address";
        document.getElementById('address').focus();
        return false;

    }
    else if(!male && !female)
    {
        //alert("Please enter your address");
        alert_like_message_box("<font color = '#e8590c'>Please Select Your Gender</font>", "Warning!!");
        id_of_currently_validated_element = "gender";
        return false;
    }
    else if(student_id == "")
    {
        //alert("Please enter your student id");
        alert_like_message_box("<font color = '#e8590c'>Please Enter Your Student ID</font>", "Warning!!");
        id_of_currently_validated_element = "student_id";
        document.getElementById('student_id').focus();
        return false;

    }
    else if(department == "select")
    {
        //alert("Please enter select your department");
        alert_like_message_box("<font color = '#e8590c'>Please Select Your Department</font>", "Warning!!");
        id_of_currently_validated_element = "department";
        document.getElementById('department').focus();
        return false;
    }
    else if(cgpa == "")
    {
       // alert("Please enter your cgpa");
        alert_like_message_box("<font color = '#e8590c'>Please Enter CGPA</font>", "Warning!!");
        id_of_currently_validated_element = "cgpa";
        document.getElementById('cgpa').focus();
        return false;
    }
    else if(isNaN(student_id))
    {
        //alert("Please enter a number");
        alert_like_message_box("<font color = '#e8590c'>Please Enter a Number</font>", "Warning!!");
        id_of_currently_validated_element = "student_id";
        document.getElementById('student_id').value = "";
        document.getElementById('student_id').focus();
        return false;
    }
    else if(isNaN(cgpa))
    {
        //alert("Please enter a number");
        alert_like_message_box("<font color = '#e8590c'>Please Enter a Number</font>", "Warning!!");
        id_of_currently_validated_element = "cgpa";
        document.getElementById('cgpa').value = "";
        document.getElementById('cgpa').focus();
        return false;
    }
    

}