<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();
		
		 //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "p18010151@student.newinti.edu.my";
        $mail->Password = 'iicp990715075539';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

		//Email Settings
        $mail->isHTML(true);
        $mail->setFrom($mailFrom, "Mixtape Contacts");
        $mail->addAddress ($mailFrom);
        $mail->Subject = ("Contact Message Successful");
        $mail->Body = ("Thanks $name for leaving message to us. <br>Here are the following message you've sent to us
		<br>
		<br>Title: <br>$subject<br>
		<br>Message: <br>$body");
       
        if ($mail->send()) {
            $status = "success";
            $response = "Contact form is sent!";
        } else {
            $status = "failed";
            $response = "Something went wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
