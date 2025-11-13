<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "kelly";

$conn = mysqli_connect("$host", "$username", "$password", "$database");


// $conn = mysqli_connect('localhost','root','','usa');

//for connection testing

	// if(!$conn){
    //       die(mysqli_connect_errno($conn));
	// }else{
    //     echo "Database Connected!!";
	// }

?>