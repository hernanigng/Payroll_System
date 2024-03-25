<?php
// Check if email and password are correct
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn = mysqli_connect("localhost","root","","ireply_payroll_db");

    $query = $conn->query("SELECT * FROM user WHERE username = '$user' and password = '$pass'");
    
    $data = mysqli_fetch_array( $query );

    if( $count > 0 ) {
		
		//diri ma query 
	
		session_start();
		$_SESSION['statusNamon'] = "ok";
		$_SESSION['firstname'] = $data['firstname'];
		$_SESSION['lastname'] = $data['lastname'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['role'] = $data['role'];
		
		
		echo json_encode(
			array(
				'status' => 'success',
				'role' => $data['role'],
				'message' => '<span class="alert alert-success col-md-12"> Successully verified. Please wait... </span>'
			)
		);
			
	
	} else {
		echo json_encode(
			array(
				'status' => 'fail',
				'message' => '<span class="alert alert-danger col-md-12"> Username or password not exist.</span>'
			)
		);
	}
?>
