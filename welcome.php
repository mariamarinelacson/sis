<?php
	if(isset($_POST['register'])) 
	{
		$studentNo = $_POST['sid'];
		$lastName =$_POST['ln'];
		$firstName =$_POST['fn'];
		$emailAddress =$_POST['email'];
		$password =$_POST['pw'];
		$birthDate =$_POST['bday'];

		echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" . 
				'Your ID Number is ' . $studentNo . '. <br/>
				Your E-mail Address is ' . $emailAddress . '. <br/>
				Your password is ' . $password . '. <br/>
				Your birthday is ' . $birthDate . '. <br/>
				
				The time is ' . date('c');	
	}
	else 
	{
		header('location: register.php');
	}
?>