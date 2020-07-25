<?php

	$conn = mysqli_connect('localhost', 'root', '', 'loginsystem');
	
	if(mysqli_connect_error()){
		echo "<script> alert('Connection error'); </script>";
		exit();
	}
?>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['subscribe'])){
			$name = $email = '';
			$email = $_POST['email'];
			
			$sql = "INSERT INTO subscriber (email) VALUES ('$email')";
			
			
			mysqli_query($conn, $sql);
		}
		
	}
	
	
	
	header("Location: ../mixtape/index.php?subscription=success");
	echo "<script> alert('Subscription Successful! '); </script>";
	exit();
	
	
?>