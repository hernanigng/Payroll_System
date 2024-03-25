<?php
// Check if email and password are correct
if ($_POST['email'] == 'admin@ireply.com' && $_POST['password'] == 'admin') {
    echo 'success';
} else {
    echo 'error';
}
?>
