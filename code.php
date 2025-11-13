<?php

require 'dbconn.php';

if(isset($_POST['save_student']))
{
	$name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $job = implode(", ", $_POST['designation']);

    if($name == NULL || $gender == NULL || $dob == NULL || $email == NULL || $city == NULL || 
        $job == NULL)
    {
         $res = [
              'status' => 422,
              'message' => 'All Fields are manadatory'
         ];
         echo json_encode($res);
         return false;
    }
    
    $query = "INSERT INTO php_swal (name, gender, dob, email, city, designation) VALUES('$name', '$gender', 
        '$dob','$email', '$city', '$job')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $res = [
            'status' => 200,
            'message' => 'Data Entered Successfully'
       ];
       echo json_encode($res);
       return false;

    }else{

        $res = [
            'status' => 500,
            'message' => 'Data did not insert'
       ];
       echo json_encode($res);
       return false;
    }

}

if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($conn, $_GET['student_id']);

    $query = "SELECT * FROM php_swal WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $student['designation'] = explode(", ", $student['designation']);

        $res = [
            'status' => 200,
            'message' => 'Student id fetch successfully',
            'data' => $student
       ];
       echo json_encode($res);
       return false;

    }else{

        $res = [
            'status' => 404,
            'message' => 'Student ID not found'
       ];
       echo json_encode($res);
       return false;

    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $query = "DELETE FROM php_swal WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        
        $res = [
            'status' => 200,
            'message' => 'Student Deleted Successfully'
       ];
       echo json_encode($res);
       return false;

    }else{

        $res = [
            'status' => 500,
            'message' => 'Data not deleted'
       ];
       echo json_encode($res);
       return false;
    }
}  

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $designation = implode(", ", $_POST['designation']);

    if($name == NULL || $gender == NULL || $dob == NULL ||$email == NULL || $city == NULL || $designation == NULL){
         $res = [
              'status' => 422,
              'message' => 'All Fields are mandatory'
         ];
         echo json_encode($res);
         return false;
    }

    $query = "UPDATE php_swal SET name='$name', gender='$gender', dob='$dob', email='$email', city='$city',designation='$designation' WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $res = [
            'status' => 200,
            'message' => 'Student Update Successfully'
       ];
       echo json_encode($res);
       return false;

    }else{

        $res = [
            'status' => 500,
            'message' => 'Data did not insert'
       ];
       echo json_encode($res);
       return false;

    }
}    

?>