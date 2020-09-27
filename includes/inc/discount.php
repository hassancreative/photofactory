<?php
require 'config.php';



if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['phone'])){

	$headers .= 'X-Mailer: PHP/' . phpversion();
	$message = "<table border='2' cellspacing='10'>";
	$message .= "<tr><td colspan='2' style='text-align:center;'><h3>Contact Form</h3></td>";
	$message .= "<tr><td>Name</td><td>".clean_string($_REQUEST['name'])."</td>";
	$message .= "<tr><td>Email</td><td>".clean_string($_REQUEST['email'])."</td>";
	$message .= "<tr><td>Phone</td><td>".clean_string($_REQUEST['phone'])."</td>";	
	$message .= "<tr><td>Website</td><td>papereditor.co.uk</td>";
	$message .= "<tr><td>Ip</td><td>".$_SERVER['REMOTE_ADDR']."</td>";
	$message .= "<tr><td>Reffer Link</td><td>".$_SERVER['HTTP_REFERER']."</td>";
	$message .= "</table>";

	$email_subject = $_REQUEST['form_type'];

	sendEmail($_REQUEST['email'],$email_subject,$message);

	echo $message;

}

?>