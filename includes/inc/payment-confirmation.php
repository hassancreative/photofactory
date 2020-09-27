<?php
require 'config.php';

if(isset($_POST['orderid'])){
    $message = "Payment Recieved from Order# : ".$_POST['orderid'];
    $email_subject = "Paperistic - Payment Notification";
    sendEmail('projects@paperistic.co.uk',$email_subject,$message);
    
    $ord_id = $_POST['orderid'];
    $sql = "UPDATE `orders` SET `status` = 'Paid' WHERE `order_no` = '".$_POST['orderid']."' ";
	if ($connection->query($sql) === TRUE) {
		echo $ord_id;
	} else {
	    echo "not working"; /*"Error: " . $sql . "<br>" . $connection->error;*/
	}
}
else{
	header("Location:index.php");
}


?>