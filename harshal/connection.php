<?php 
$servername = "localhost";
// $accountNumber = "account_number";
// $accountName = "account_name";
// $mobileNumber = "mobile_number";
// $email = "email";
$username = "username";
$password = "password";
// $confirmPassword = "confirm_password";
$conn = mysqli_connect($servername, $username, $password,$bank_code,3306);
if (mysqli_connect_errno()) {
    die("connection faild".$conn->connect_errno());
}
echo"Connection successful";
?>