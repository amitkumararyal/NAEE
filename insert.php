<!DOCTYPE html>
<html>

<head>
	<title>BOOKING Appointment form</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "booking");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$address = $_REQUEST['address'];
		$city = $_REQUEST['city'];
		$pincode = $_REQUEST['pincode'];
		$state = $_REQUEST['state'];
		$country = $_REQUEST['country'];
		$appointment_Date = date('y-m-d',strtotime($_POST['date']));
		$gender = $_REQUEST['gender'];
		$choice = $_REQUEST['choice'];
		$time = $_POST['time'];
		$age = $_REQUEST['age'];
		$appointment_details = $_REQUEST['appointment_details'];
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO bookings VALUES 
		('$name','$email','$phone','$address','$city','$pincode','$state','$country','$appointment_Date','$gender','$choice','$time','$age','$appointment_details')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thank you for your response";

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
