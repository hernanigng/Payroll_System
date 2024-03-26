<?php

$conn = mysqli_connect("localhost", "root", "", "ireply_payroll_db");

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

$startDate = $_POST['createStartDate'];
$monthlySalary = $_POST['createMonthlySalary'];
$accntBonus = $_POST['createAccountBonus'];
$client = $_POST['createClient'];
$position = $_POST['createPostion'];
$employmentStatus = $_POST['createEmploymentStatus'];

$conn->query("INSERT INTO tbl_employee (firstname, middlename, lastname, address, birthdate, contact_num, civilstatus, personal_email, work_email, employee_type,
start_date, monthly_salary, account_bonus, client, position, employment_status)
VALUES ('$firstName', '$midName', '$lastName', '$address', '$birthdate', '$contactNum', '$civilStat', '$persEmail', '$workEmail', '$employeeType', '$startDate',
'monthlySalary', '$accntBonus', '$client', '$position', '$employmentStatus')");

$last_id = $conn->insert_id;

echo json_encode( 
  array(
    'last_id' => $last_id,
    'firstname' => $firstName,
    'lastname' => $lastName,
    'message' => '<span class="alert alert-info">Test Message</span>'
));

$conn->close();
?>
