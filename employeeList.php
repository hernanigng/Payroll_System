<!DOCTYPE html>
<html>
    <head>
        <title> iREPLY | Employee List </title>

        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        
        <link rel="stylesheet" href="css/employee_style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document),ready(function(){
                .ready(function () {
                    $('#table_id')
                    .DataTable();
                }
            });
        
         </script>
    </head>

        <body> 
        <h1> Personal Information </h1>
            <form action="">
                <label for="firstname">First Name:</label>
                <input type="text" id="fname_id" name="fname" class="form-control" maxlength="4" size="4"> disabled>
                
                <label for="middlename">Middle Name:</label>
                    <input type="text" id="midname_id" name="fname" class="form-control" disabled>

                <label for="lastname">Last Name:</label>
                    <input type="text" id="lname_id" name="lname" class="form-control"   disabled>
                
                <label for="address">Address: </label>
                    <input type="text" id="address_id" name="address" disabled>
                
                <label for="birthdate">Birthdate:</label>
                    <input type="text" id="bday_id" name="bday" disabled>

                <label for="contactNumber">Contact Number:</label>
                    <input type="text" id="contactnum_id" name="contactnum" disabled>

                <label for="civilStatus">Civil Status:</label>
                    <select id="civilstat_id" name="civilstat" class="form-control">
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                    </select>

                <label for="personalEmail">Personal Email:</label>
                    <input type="text" id="pmail_id" name="pmail" disabled>

                <label for="workEmail">Work Email:</label>
                    <input type="text" id="wmail_id" name="wmail" disabled>

                <label for="employeeType"> Employee Type:</label>
                    <select id="employeetype_id" name="employeetype">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                
             </form>
           
        </body>
</html>
