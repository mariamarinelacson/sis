<?php
	if(isset($_POST['register'])) 
	{
		$studentNo = $_POST['sid'];
		$lastName =$_POST['ln'];
		$firstName =$_POST['fn'];
		$emailAddress =$_POST['email'];
		$password =$_POST['pw'];
		$birthDate =$_POST['bday'];
	}
	else 
	{
		header('location: register.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/styles.css" rel="stylesheet"/>
	</head>
	<body>
		<body background="http://www.zingerbug.com/Backgrounds/background_images/black_brick_wall_background_1800x1600.jpg">
			<div class="container">
				<?php
					echo "<h2>Welcome, " . $firstName . " " . $lastName . "!</h2><br/>"
				?>
			<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQFbMXYg-DU8ieHK6o0Q968uQM2k1_3M2KZsrr8cxlhTIiqOIop">
			<br/>
			<div class="col-lg-offset-3 col-lg-6">
			<div class="well2">
				<?php

				echo '<p>ID Number</p>' . $studentNo . "<hr>" .
				'<p>E-mail Address </p>' . $emailAddress . "<hr>" .
				'<p>Password </p>' . $password . "<hr>" .
				'<p>Birthday </p>' . $birthDate . "<hr>" .
				
				'<p>Date and Time </p>' . date('c');	
				?>
	</body>
</html>