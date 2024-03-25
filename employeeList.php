<!DOCTYPE html>
<html>
    <head>
        <title> iREPLY | Employee List </title>

        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


        <link rel="stylesheet" href="css/employee_style.css">
        <script>
            //$(document),ready(function(){
              //  .ready(function () {
                //    $('#table_id')
                  //  .DataTable();
               // }
            //});

            $(document).ready(function() {
                $("#insertEmployee").submit(function(e) {
                    e.preventDefault();
                    var data = $(this).serialize();
                    var url = "functions/createEmployee.php";
                    $.post(url, data, function(response) {
                        alert(response);
                        console.log(response);
                        $(".status").html(response.message);
                    });
                });
            });


        </script>
    </head>

        <body>
        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Add Employee </button>
        

        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mb-5" id="exampleModalLabel">Create New Employee</h5>    
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#insertEmployee">Personal Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#insertEmployment">Employment Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Benefit Details</a>
                            </li>
                        
                        </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancel"></button>

                </div>
                <div class="modal-body">
                 <form id="insertEmployee" method="POST">
               
                    <div class="mb-3 row">
                        <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
                        <input type="" name="createFirstName" class="form-control" id="createFirstName_id">
                        
                        <label for="middleName" class="col-sm-2 col-form-label">Middle Name</label>
                        <input type="" name="createMiddleName" class="form-control" id="createMiddleName_id">

                        <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
                        <input type="" name="createLastName" class="form-control" id="createLastName_id">

                        <label for="completeAddress" class="col-sm-2 col-form-label">Complete Address</label>
                        <input type="" name="createAddress" class="form-control" id="createAddress_id">

                        <label for="birthDate" class="col-sm-2 col-form-label">Birthdate</label>
                        <input type="date" name="createBirthdate" class="form-control" id="createBirthdate_id">

                        <label for="contactNum" class="col-sm-2 col-form-label">Contact Number </label>
                        <input type="" name="createContactNum" class="form-control" id="createContactNum_id">

                        <label for="civilStatus" class="col-sm-2 col-form-label">Civil Status</label>
                        <select class="form-select" name="createCivilStatus" aria-label="Civil Status Select">
                            <option selected>Select Civil Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                        
                        <label for="personalEmail" class="col-sm-2 col-form-label">Personal Email</label>
                        <input type="" name="createPersEmail" class="form-control" id="createPersEmail_id">

                        <label for="workEmail" class="col-sm-2 col-form-label">Work Email</label>
                        <input type="" name="createWorkEmail" class="form-control" id="createWorkEmail_id">

                        <label for="employeeType" class="col-sm-2 col-form-label"> Employee Type </label>
                        <select class="form-select" name="createEmployeeType" aria-label="Employee Type Select">
                            <option selected>Select Employee Type</option>
                            <option value="Onsite">Work From Home</option>
                            <option value="Home">Work Onsite</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                </form>
                </div>
                <div class="modal-footer">
                    
                </div>
                </div>
            </div>
            </div>
            

                
        <?php
            $conn= mysqli_connect("localhost","root","","ireply_payroll_db");
            $query=$conn->query("SELECT * FROM tbl_employee");        
        ?>

<div class="clearfix"> </div>
	<div class="tblStatus col-md-6 col-md-offset-3"> </div>
	<div class="clearfix"> </div>
	
     <div id="container1" class="col-md-8 col-md-offset-2">
    <table width="100%" id="example-table" class="table table-striped table-bordered">
        <thead>
            <tr class="info">
                <th width="10px">Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
    <?php while ($data=mysqli_fetch_array($query)) { ?>

        <tr id="<?php echo $data['employee_id'];?>">
        <td><?php echo $data['employee_id']; ?></td>
        <td><?php echo $data['firstname']; ?></td>
        <td><?php echo $data['lastname']; ?></td>
        <td>

        <button class="btn btn-primary view" id="<?php echo $data['employee_id'];?>"> 
	      <i class="bi bi-eye"> </i>
	    </button>
        <button class="btn btn-danger del" id="<?php echo $data['employee_id'];?>">
	      <i class="bi bi-trash"> </i>
		</button>
	    <button class="btn btn-warning edit" id="<?php echo $data['employee_id'];?>"> 
	      <i class="bi bi-pencil"> </i>
		</button>
		</tr>
        <?php } ?>   
        </tbody>
    </table>
</div>
          <!--  <h1> Personal Information </h1>
                <form action="">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="fname_id" name="fname" class="form-control w-25 p-1" value="<?php echo $data['firstname'];?>"disabled>

                    <label for="middlename">Middle Name:</label>
                        <input type="text" id="midname_id" name="fname" class="form-control w-25 p-1"disabled>

                    <label for="lastname">Last Name:</label>
                        <input type="text" id="lname_id" name="lname" class="form-control w-25 p-1"  disabled>
                    
                    <label for="address">Address: </label>
                        <input type="text" id="address_id" name="address" class="form-control w-25 p-1" disabled>
                    
                    <label for="birthdate">Birthdate:</label>
                        <input type="text" id="bday_id" name="bday" class="form-control w-25 p-1" disabled>

                    <label for="contactNumber">Contact Number:</label>
                        <input type="text" id="contactnum_id" name="contactnum" class="form-control w-25 p-1" disabled>

                    <label for="civilStatus">Civil Status:</label>
                        <select id="civilstat_id" name="civilstat" class="form-select w-25 p-1" disabled>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                        </select>

                    <label for="personalEmail">Personal Email:</label>
                        <input type="text" id="pmail_id" name="pmail" class="form-control w-25 p-1" disabled>

                    <label for="workEmail">Work Email:</label>
                        <input type="text" id="wmail_id" name="wmail" class="form-control w-25 p-1" disabled>

                    <label for="employeeType"> Employee Type:</label>
                        <select id="employeetype_id" name="employeetype" class="form-select w-25 p-1" disabled>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    
                        <?php //} ?> 
                </form> -->
        
        </body>
</html>
