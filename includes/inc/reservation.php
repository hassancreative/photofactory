<?php 
require 'config.php';



if (isset($_REQUEST['name']) && isset($_REQUEST['vanue']) && isset($_REQUEST['vanue']) && isset(($_REQUEST['events'])) && isset(($_REQUEST['steadycam'])) && isset(($_REQUEST['prepost'])) && isset(($_REQUEST['date'])) && isset(($_REQUEST['photographer'])) && isset(($_REQUEST['videographer'])) && isset(($_REQUEST['album'])) && isset(($_REQUEST['drone']))  ){

	$headers .= 'X-Mailer: PHP/' . phpversion();
	$message = "<table border='2' cellspacing='10'>";
	$message .= "<tr><td colspan='2' style='text-align:center;'><h3>Contact Form</h3></td>";
	$message .= "<tr><td>Name</td><td>".clean_string($_REQUEST['name'])."</td>";
	$message .= "<tr><td>Vanue</td><td>".clean_string($_REQUEST['vanue'])."</td>";
	$message .= "<tr><td>Events</td><td>".clean_string($_REQUEST['events'])."</td>";
	$message .= "<tr><td>Steady Cam</td><td>".clean_string($_REQUEST['steadycam'])."</td>";
	$message .= "<tr><td>Pre Post</td><td>".clean_string($_REQUEST['prepost'])."</td>";
	$message .= "<tr><td>Date</td><td>".clean_string($_REQUEST['date'])."</td>";
	$message .= "<tr><td>Photographer</td><td>".clean_string($_REQUEST['photographer'])."</td>";
	$message .= "<tr><td>Videographer</td><td>".clean_string($_REQUEST['videographer'])."</td>";
	$message .= "<tr><td>Album</td><td>".clean_string($_REQUEST['album'])."</td>";
	$message .= "<tr><td>Drone</td><td>".clean_string($_REQUEST['drone'])."</td>";
	$message .= "<tr><td>Website</td><td>Photo Faktory</td>";
	$message .= "<tr><td>Ip</td><td>".$_SERVER['REMOTE_ADDR']."</td>";
	$message .= "<tr><td>Reffer Link</td><td>".$_SERVER['HTTP_REFERER']."</td>";
	$message .= "</table>";
	$email_subject = $_REQUEST['form_type'];
	sendEmail($_REQUEST['email'],$email_subject,$message);
	echo $message;

}

?>