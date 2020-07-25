<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require_once 'conn.php';
	session_start();
	
	if(ISSET($_POST['register'])){
		$username = $_POST['username'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$username', '$name', '$email', '')") or die(mysqli_error());
		
		$link = "localhost/mixtape/verified.php?email=".$email."";
		$message = "Hello $name! <br>"
        . "Please click the link below to confirm your email and complete the registration process.<br>"
        . "You will be automatically redirected to a welcome page where you can then sign in.<br><br>"            
        . "Please click below to activate your account:<br>"
        . "<a href='$link'>Click Here!</a>";
		
		//Load composer's autoloader
		require 'vendor/autoload.php';
 
		$mail = new PHPMailer(true);                            
   
		try {
			//Server settings
			$mail->isSMTP();                                     
			$mail->Host = 'smtp.gmail.com';                      
			$mail->SMTPAuth = true;                             
			$mail->Username = "p18010151@student.newinti.edu.my";
			$mail->Password = 'iicp990715075539';  
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
			);                         
			$mail->SMTPSecure = 'ssl';                           
			$mail->Port = 465;                                   
	
			//Send Email
			$mail->setFrom('p18010151@student.newinti.edu.my');
	
			//Recipients
			$mail->addAddress($email);              
	
			//Content
			$mail->isHTML(true);                                  
			$mail->Subject = "Subscription confirmation";
			$mail->Body    = $message;
	
			$mail->send();
	
			header("location:verification.php?name=".$name."&email=".$email."");
			
		} catch (Exception $e) {
			$_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
			$_SESSION['status'] = 'error';
		}

	}
	
?>