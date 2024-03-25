<?php

print_r($_POST);

$firstName = $_POST['createFirstName'];
$midName = $_POST['createMiddleName'];
$lastName = $_POST['createLastName'];
$address = $_POST['createAddress'];
$birthdate = $_POST['createBirthdate'];
$contactNum = $_POST['createContactNum'];
$civilStat = $_POST['createCivilStatus'];
$persEmail = $_POST['createPersEmail'];
$workEmail = $_POST['createWorkEmail'];
$employeeType = $_POST['createEmployeeType'];


include '../database.php';


$conn->query("INSERT INTO tbl_employee (firstname, middlename, lastname, address, birthdate, contact_num, civilstatus, personal_email, work_email, employee_type)
VALUES ('$firstName', '$midName', '$lastName', '$address', '$birthdate', '$contactNum', '$civilStat', '$persEmail', '$workEmail', '$employeeType')");


echo json_encode( 
  array(
    'message' => "<div class='animated pulse alert alert-info col-md-12'> <i class='glyphicon glyphicon-ok'> </i> Succesfully saved. </div>"
  ) 
);


$conn->close();
?>
