<?php 

$con=mysqli_connect("localhost","root","","edughor");
if (!$con) {
	echo "database connection error";
}


if (isset($_POST['save'])) {
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phonenumber = $_POST['phonenumber'];





            

//------------------------------------

	$insert_query = "INSERT INTO user_registration(username,email,password,phonenumber) VALUES('$username','$email','$password','$phonenumber')";
	$result = mysqli_query($con,$insert_query);
	if ($result) {
		echo "<script>alert('Your Record Sucessfully Inserted.');window.location.href = 'registration.html';</script>";
	
	}else{
		echo "error";
	}

}


 ?>