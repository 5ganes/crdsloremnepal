<?php
if(isset($_POST['btnFeedback']))
{
	// echo $_SESSION['security_code']."ganesh";
	//echo $_POST['security_code'];
	
	if($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code']))
	{
		// print_r($_POST); die();
		extract($_POST);
		
		if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($address) && !empty($phone) && !empty($country) && !empty($gender) && !empty($comment) && !empty($security_code))
		{
			$feedbacks -> save($firstname, $lastname, $email, $address, $phone, $country, $gender, $comment);
			
			$msg='Name='.$firstname.' '.$lastname.'<br>Email='.$email.'<br/>Address='.$address.'<br/>Phone='.$phone.'<br/>Country='.$country.'<br/>Gender='.$gender.'<br/>Comment='.$comment;
			//include('includes/sendemail.php');
			$headers  = "";
			$headers .= "MIME-Version: 1.0 \r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
			$headers .= "X-Priority: 1\r\n";
			//sendEmail("kh6ganesh@yahoo.com", "Inquiry", $msg, $name);
			
			$arrTo = array("info@crds.org.np");
			$subject = "Inquiry Details :";
			
			mail($arrTo[0], $subject, $msg, $headers);
			header("Location: index.php?action=contact-us&msg=Feedback posted successfully. Thank you.");
		}	
		else
			$feedbackmsg = "* Please enter all required fields";
	}
	else
			$feedbackmsg = "* Please enter correct security code";
	// echo $feedbackmsg; 
			
}
?>