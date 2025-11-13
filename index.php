<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Students Details</title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   
   <!-- Include Flatpickr CSS and JS for Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body>

	 <!--Add Modal -->
    <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="saveStudent">
                    <div class="modal-body">

                        <div id="errorMessage" class="alert alert-warning d-none"></div>

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>

                         <div class="mb-3">
                            <label for="">Gender</label>&nbsp;&nbsp;&nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Male" />
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Female" />
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">DOB</label>
                            <input type="date" id="dob" name="dob" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="">City</label>
                            <select class="form-select mb-3" name="city" aria-label=".form-select example">
                                <option selected>None</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="">Jobs</label><br>&nbsp;&nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Java Developer" id="job1">
                                <label class="form-check-label" for="job1">Java Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Python Developer" id="job2">
                                <label class="form-check-label" for="job2">Python Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="IOS Developer" id="job3">
                                <label class="form-check-label" for="job3">IOS Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Android Developer" id="job4">
                                <label class="form-check-label" for="job4">Android Developer</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--View Modal -->
     <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="">Name</label>
                            <p id="view_name" class="form-control"></p>
                        </div>

                        <div class="mb-3">
                            <label for="">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" />
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" />
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">DOB</label>
                            <input type="text" id="dob1" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <p id="view_email" class="form-control"></p>
                        </div>

                        <div class="mb-3">
                            <label for="">City</label>
                            <select class="form-select mb-3" id="view_city" aria-label=".form-select example">
                                <option value="New Delhi">New Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                        </div>
 
                        <div class="mb-3">
                            <label for="">Jobs</label><br>&nbsp;&nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Java Developer" id="job1">
                                <label class="form-check-label" for="job1">Java Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Python Developer" id="job2">
                                <label class="form-check-label" for="job2">Python Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="IOS Developer" id="job3">
                                <label class="form-check-label" for="job3">IOS Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Android Developer" id="job4">
                                <label class="form-check-label" for="job4">Android Developer</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>

    <!--Edit Modal -->
    <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateStudent">
                    <div class="modal-body">

                        <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                        <input type="hidden" name="student_id" id="student_id">

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" />
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" />
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">DOB</label>
                            <input type="date" id="dob2" name="dob" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-control" />
                        </div>

                        <div class="mb-3">
                            <label for="">City</label>
                            <select class="form-select mb-3" name="city" id="selectCity" aria-label=".form-select example">
                                <option value="New Delhi">New Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                        </div>

                         <div class="mb-3">
                            <label for="">Jobs</label><br>&nbsp;&nbsp;
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Java Developer" id="job1">
                                <label class="form-check-label" for="job1">Java Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Python Developer" id="job2">
                                <label class="form-check-label" for="job2">Python Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="IOS Developer" id="job3">
                                <label class="form-check-label" for="job3">IOS Developer</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="designation[]" value="Android Developer" id="job4">
                                <label class="form-check-label" for="job4">Android Developer</label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-outline-primary">Update Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<!-- <h1>Swal Crud</h1> -->
	<div class="container">
        <div class="row my-4">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="text-secondary fw-bold fs-4">All Students</div>
                        <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#studentAddModal">Add Students</button>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>DOB</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Designation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
	                            <?php
                                    require 'dbconn.php';
                                    $query = "SELECT * FROM php_swal";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {

                                    	foreach ($query_run as $key => $student) {
                                    	?>
                                    		<tr>
                                    	   <td><?= ++$key ?></td>
                                            <td><?= $student['name'] ?></td>
                                            <td><?= $student['gender']?></td>
                                            <td><?= $student['dob']?></td>
                                            <td><?= $student['email'] ?></td>
                                            <td><?= $student['city'] ?></td>
                                            <td><?= $student['designation'] ?></td>
                                            <td>
                                            <button type="button" value="<?= $student['id']; ?>" class="viewStudentBtn btn btn-sm btn-outline-info">View</button>
                                            <button type="button" value="<?= $student['id']; ?>" class="editStudentBtn btn btn-sm btn-outline-success">Edit</button>
                                            <button type="button" value="<?= $student['id']; ?>" class="deleteStudentBtn btn btn-sm btn-outline-danger">Delete</button>
                                            </td>	 	
                                    		</tr>
                                    	<?php
                                    	}
                                    }
                               
	                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

    // flatpickr("#dob", {
    //     dateFormat: "d/m/Y"
    // }); 

    // flatpickr("#dob1", {
    // dateFormat: "d/m/Y"
    // });
    
    document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#dob", { dateFormat: "d-m-Y" });
    flatpickr("#dob1", { dateFormat: "d-m-Y" });
    flatpickr("#dob2", { dateFormat: "d-m-Y" });
    });

	$(document).on('submit', '#saveStudent', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_student", true)

        $.ajax({
        	type: "POST",
            url: "code.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
            	//console.log(response);
            	var res = jQuery.parseJSON(response);
            	if(res.status == 422){

                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(res.message);

            	} else if(res.status == 200) {
            		$('#errorMessage').addClass('d-none');
                    $('#studentAddModal').modal('hide');
                    $('#saveStudent')[0].reset();
                    Swal.fire(
                        'Inserted Sucessfully!',
                        response.message,
                        'success'
                    );

                    $('#myTable').load(location.href + " #myTable");

            	}
            }
        });
	});

    $(document).on('click', '.deleteStudentBtn', function(e) {

        var student_id = $(this).val();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result)=> {
            if(result.isConfirmed){
                $.ajax({
                      url: "code.php",
                      type: "POST",
                      data: {
                        'delete_student': true,
                        'student_id': student_id
                      },
                      success: function(response){
                            Swal.fire(
                                'Deleted Successfully!',
                                response.message,
                                'success'
                            )
                            $('#myTable').load(location.href + " #myTable");
                      } 
                });
            }
        })  

    });

    $(document).on('click', '.viewStudentBtn', function(e) {
         var student_id = $(this).val();
         //alert(student_id);

         $.ajax({
            type: "GET",
            url: "code.php?student_id=" + student_id,
            success: function(response){
                //console.log(response);
                var res = jQuery.parseJSON(response);
                if (res.status == 422) {

                    alert(res.message);

                } else if (res.status == 200) {

                    $('#view_name').text(res.data.name);
            $("input:radio[name=gender][value=" + res.data.gender + "]").prop('checked', true);
                    $('#dob1').val(res.data.dob);
                    $('#view_email').text(res.data.email);
                    $('#view_city option:selected').text(res.data.city);

                   var designation = res.data.designation; // Assuming 'jobs' is an array in your response
                        $('input[name="designation[]"]').each(function() {
                            $(this).prop('checked', designation.includes($(this).val()));
                        });

                    $('#studentViewModal').modal('show');

                }
            }

         });

    });


    $(document).on('click', '.editStudentBtn', function() {
        var student_id = $(this).val();
        //alert(student_id);

        $.ajax({
            type: "GET",
            url: "code.php?student_id=" + student_id,
            success: function(response) {

                var res = jQuery.parseJSON(response);
                if (res.status == 422) {

                    alert(res.message);

                } else if (res.status == 200) {

                    $('#student_id').val(res.data.id);
                    $('#name').val(res.data.name);
                    $("input:radio[name=gender][value=" + res.data.gender + "]").prop('checked', true);
                    $('#dob2').val(res.data.dob);
                    $('#email').val(res.data.email);
                    $('#selectCity').val(res.data.city);

                    var designation = res.data.designation;
                        $('input[name="designation[]"]').each(function() {
                            $(this).prop('checked', designation.includes($(this).val()));
                        });

                    $('#studentEditModal').modal('show');

                }
            }
        });

    });

    $(document).on('submit', '#updateStudent', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_student", true)

        $.ajax({
            type: "POST",
            url: "code.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                //console.log(response);

                 $('#studentEditModal').modal('hide');
                 $('#updateStudent')[0].reset();
                Swal.fire(
                    'Updated Sucessfully!',
                    response.message,
                    'success'
                );
                 $('#myTable').load(location.href + " #myTable");
            }
        });
    });

    </script>

     
</body>
</html>