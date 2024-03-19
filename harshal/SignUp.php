<?php
	 $accountNumber = $_POST["account_number"];
     $accountName = $_POST["account_name"];
     $mobileNumber = $_POST["mobile_number"];
     $email = $_POST["email"];
     $username = $_POST["username"];
     $password = $_POST["password"];
     $Confirmpassword = $_POST["Confirmpassword"];
     
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into SignUp(account_number, account_name, mobile_number, email,username, password, Confirmpassword) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isissss", $account_number, $account_name, $mobile_number, $email, $username, $password, $Confirmpassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Sign Up successfully...";
		$stmt->close();
		$conn->close();
	}
?>
