<!DOCTYPE html>
<html>
    <head>
        <title>Student Personal and Academic Info</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script type="text/javascript" src="student_information_validation.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="student_information_validation.js"></script>
        <script type="text/javascript" src="student_information_additional_functions.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="student_information_style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </head>

    <body>
        <div class="container-fluid ">
            <ul class="nav nav-tabs" id="nav-tabs">
                <li class="nav-item">
                    <button class="nav-link active" id="tab-home" type="button" data-bs-toggle="tab" data-bs-target="#home-tab">Home</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="tab-personal" type="button" data-bs-toggle="tab" data-bs-target="#personal-tab">Personal</button>
                </li>
                <li class="nav-item">
                    <button style="color: #f03e3e" class="nav-link" id="tab-academic" type="button" data-bs-toggle="tab" data-bs-target="#academic-tab">Academic</button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane show active" id="home-tab">
                    <p>Welcome to the Home Page. Click on the <span style="color: #005CBF">Personal</span> and <span style="color: #f03e3e">Academic</span>
                    tabs to enter your personal and academic information respectively. 
                </p>
                </div>
            </div>

            <!--Personal Information Form-->
            <div class="tab-content">
                <div class="tab-pane" id="personal-tab">
                    <div class="card custom-card mt-4" id="personal_info_form">
                        <div class="card-header"><h2 class="card-title">Personal Information</h2></div>
                        <div class="card-body">
                            <form action="" id="student_personal_information" name="student_personal_information">
                                <div class="row mb-4">
                                    <label for="name" class="form-label col-md-2">Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <span class="text-reset-icon" onclick="reset_the_value_of_this_element('name')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z">
                                            </path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                                        </span>
                                    </div>
                                </div><!--End of <div class="row mb-4"> -->
                                <div class="row mb-4">
                                    <label for="address" class="form-label col-md-2">Address:</label>
                                    <div class="col-md-8">
                                        <textarea name="address" id="address" class="form-control"></textarea>
                                        <span class="text-reset-icon" onclick="reset_the_value_of_this_element('address')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z">
                                            </path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                                        </span>
                                    </div>
                                </div><!--End of <div class="row mb-4"> -->
                                <div>
                                    Select Gender:
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="male" name="gender" value="male" >
                                    <label for="male" class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                                    <label for="female" class="form-check-label">Female</label>
                                </div>
                                <div class="row mt-4" id="row-for-submit-reset-button">
                                    <div class="d-flex justify-content-center ">
                                        <div>
                                            <button type="button" id="reset_button" class="btn btn-outline-secondary" onclick="reset_all_values_of_student_information_form('student_personal_information')">Reset</button>
                                            
                                        </div>
                                    </div>
                                </div> <!--  <div class="row mt-4" id="row-for-submit-reset-button"> -->
                            </form>
                        </div><!--End of <div class="card-body"> -->
                    </div><!--<div class="card custom-card mt-4" id="personal_info_form"> -->
                </div><!--<div class="tab-pane" id="personal-tab"> -->
            </div><!-- <div class="tab-content"> -->

            <!--Academic Information Form-->
            <div class="tab-content">
                <div class="tab-pane" id="academic-tab">
                    <div class="card custom-card mt-4" id="academic_info_form">
                        <div class="card-header card-header-academic"><h2 class="card-title">Academic Information</h2></div>
                        <div class="card-body">
                            <form action="" name="student_academic_information" id="student_academic_information">
                                <div class="row mb-4">
                                    <label for="student_id" class="form-label col-md-2">Student ID:</label>
                                    <div class="col-md-8">
                                        <input type="text" id="student_id" name="student_id" class="form-control" onkeyup="immediate_validation_of_numerical_value('student_id')">
                                        <span class="text-reset-icon" onclick="reset_the_value_of_this_element('student_id')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z">
                                            </path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                                        </span>
                                    </div>
                                </div><!--End of <div class="row mb-4"> -->
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <select name="department" id="department" class="form-select">
                                            <option value="select" selected>Select Department:</option>
                                            <option value="CSE">Computer Science and Enginnering</option>
                                            <option value="EEE">Electrical and Electronic Engineering</option>
                                            <option value="ME">Mechanincal Engineering</option>
                                            <option value="CE">Civil Engineering</option>
                                            <option value="IPE">Industrial Production Engineering</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-1">
                                        <label for="cgpa" class="form-label">CGPA:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="cgpa" id="cgpa" class="form-control" onkeyup="immediate_validation_of_numerical_value('cgpa')">
                                        <span class="text-reset-icon" onclick="reset_the_value_of_this_element('cgpa')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z">
                                            </path><line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                                        </span>
                                    </div>
                                </div>
                                <input type="hidden" id="data_source" name="data_source" value="student_information">
                                <div class="row mt-4" id="row-for-submit-reset-button">
                                    <div class="d-flex justify-content-center ">
                                        <div>
                                            <button type="button" id="reset_button" class="btn btn-outline-secondary" onclick="reset_all_values_of_student_information_form('student_academic_information')">Reset</button>
                                            <button type="button" id="submit_button" class="btn btn-danger" onclick="send_data_to_the_server_for_saving_in_database()">Submit</button>
                                            
                                           
                                        </div>
                                    </div>
                                </div> <!--  <div class="row mt-4" id="row-for-submit-reset-button"> -->
                            </form>
                            <form action="printing_data_in_excel_v1.php" method="POST" class="d-flex justify-content-center mt-3">
                                <button type="submit" id="submit_button" class="btn btn-success">Show Data</button>
                            </form>
                        </div><!--End of <div class="card-body"> -->
                    </div><!--<div class="card custom-card mt-4" id="personal_info_form"> -->
                </div><!--<div class="tab-pane" id="personal-tab"> -->
            </div><!-- <div class="tab-content"> -->
        </div><!--<div class="container-fluid "> -->
            <!------------------------  Bootstrap's Modal Dialog Box For Form Data Displaying in Tabular Format [START] ------------------------>

		<div class="modal fade" id="student_information_display_box" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
						<!-- Header Part of Bootstrap's Modal Form -->
						<div class="modal-header bg-primary text-light text-center">
							<h5 class="modal-title text-center" style="margin: 0 auto;">Message</h5>
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button> -->
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div> <!-- End of <div class="modal-header"> -->

						<!-- Body Part of Bootstrap's Modal Form -->
						<div class="modal-body">
							<table id="table_for_student_information" class="table table-hover table-striped table-bordered">
								<!-- <thead>   
									<tr>
										<th scope='col'>Finished Goods / Assembly Item</th>
									</tr>
								</thead> -->
								<tbody>
									<tr>
										<td>Name</td>
										<td></td>
									</tr>
									<tr>
										<td>Salary</td>
										<td></td>
									</tr>
								</tbody>
							</table> <!-- <table id="table_for_student_information" class="table table-hover table-striped table-bordered"> -->
						</div> <!-- End of <div class="modal-body"> -->

						<!-- Footer Part of Bootstrap's Modal Form -->
						<div class="modal-footer"> 
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							<button type="button" id="close_button_of_msg_box" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
						</div> <!-- End of <div class="modal-footer" -->

				</div> <!-- End of <div class="modal-content"> -->
			</div> <!-- End of 	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md"> -->
		</div> <!-- End of <div class="modal fade" id="student_information_display_box" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"> -->

<!------------------------  Bootstrap's Modal Dialog Box For Form Data Displaying in Tabular Format [END] ------------------------>
    </body>
</html>