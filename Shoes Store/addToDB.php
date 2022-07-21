<?php
$con=mysqli_connect("localhost","root","","shoesstore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['psw'];
	$cpassword = $_POST['psw-repeat'];
	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE Email='$email'";
        $result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (FirstName,LastName,Email, Password)
					VALUES ('$firstname','$lastname','$email', '$password')";
			 $result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Register Successfully.')</script>";
                header("Refresh:0.2; url=login.php");
				$_POST['firstName']="";
				$_POST['lastName']="";
                $_POST['email']="";
				$_POST['psw'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
				header("Refresh:0.2; url=signUp.html");
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
			header("Refresh:0.2; url=signUp.html");
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
		header("Refresh:0.2; url=signUp.html");
	}

?>