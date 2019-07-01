<?php
if (isset($_POST['mail_sending'])) {
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_subject = $_POST['user_subject'];
	$user_message = $_POST['user_message'];

	$to = "bhavikkalariya103@gmail.com";
	$subject = "Subject:" . $user_subject;
	$txt = "Name:" . $user_name ."<br>" . "Email:" . $user_email ."<br>" . "Subject:" . $user_subject ."<br>" . "Message:" . $user_message ."<br>";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: " . $user_email;
	$x = mail($to,$subject,$txt,$headers);
	print_r(error_get_last());
	if ($x == true) {
		echo "<script>alert('Message sent successfully!')</script>";
		echo "<script type='text/javascript'>
		window.location.href = 'contact-us.html';
		</script>";
	}else{
		echo "Not Sent";
	}
}