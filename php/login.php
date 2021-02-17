<?php
ob_start();
session_start();

require ('../config/config.php');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

if(!$con){
       die("connection to this DB failed". mysqli_connect_error());
   }

$roll_no = mysqli_real_escape_string($con, $_POST['username']);
$dob = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT roll_no, dob FROM Rc1TptrQqu.login_cred WHERE roll_no = '$roll_no' and dob = '$dob'";

$result = $con->query($sql);

if($result->num_rows > 0)
{
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $roll_no;
    header('Location: ../home.php');
} else {
    echo "Not Registered";
}
