<?php 
session_start();
require 'config.php';
if(isset($_POST['name']) == TRUE){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$paper_type = $_POST['paper_type'];
	$academic_level = $_POST['academic_level'];
	$reference_style = $_POST['reference_style'];
	$pages = $_POST['pages'];
	$paper_standard = $_POST['paper_standard'];
	$deadline = $_POST['deadline'];
	$captcha = $_POST['captcha'];
	$captcha_match = $_SESSION['my_captcha'];
	$promo_code = $_POST['promo_code'];
	$discount = '';
	$price = $paper_actual_price;
	$date1 = new DateTime(date('Y-m-d'));
	$date2 = new DateTime($deadline);
	$first_class = '';
	$second_class = '';
	$third_class = '';
	

	/* Calculate Amount */
	if($captcha == $captcha_match){
		$diff_days = $date2->diff($date1)->format("%a") ;
		
		if($diff_days < 2){
			if($paper_standard == 1){
				$amount = $price;
			}
			elseif($paper_standard == 2){
				$amount = $price - $standard_diff;
			}
			elseif($paper_standard == 3){
				$amount = $price - $standard_diff * 2;
			}
		}
		elseif($diff_days == 2){
			if($paper_standard == 1){
				$amount = $price - $deadline_diff;
			}
			elseif($paper_standard == 2){				
				$amount = $price - $standard_diff - $deadline_diff;
			}
			elseif($paper_standard == 3){
				$amount = $price - $standard_diff * 2 - $deadline_diff;							
			}
		}
		elseif($diff_days > 2 && $diff_days <= 5){
			$deadline_diff = $deadline_diff * 2;

			if($paper_standard == 1){
				$amount = $price - $deadline_diff;
			}
			elseif($paper_standard == 2){
				$amount = $price - $standard_diff - $deadline_diff;
			}
			elseif($paper_standard == 3){
				$amount = $price - $standard_diff * 2 - $deadline_diff;
			}
		}
		elseif($diff_days > 5){
			$deadline_diff = $deadline_diff * 3;

			if($paper_standard == 1){
				$amount = $price - $deadline_diff;
			}
			elseif($paper_standard == 2){
				$amount = $price - $standard_diff - $deadline_diff;
			}
			elseif($paper_standard == 3){
				$amount = $price - $standard_diff * 2 - $deadline_diff;
			}
		}

		$totalAmount = $amount * $pages;
		
		/* Promo Code Discount*/
		if(!empty($promo_code)){
			$queryCoupon = "SELECT * FROM `coupons` WHERE email = '".$email."' AND coupon = '".$promo_code."' AND redeem = 0 ORDER BY `id` DESC";

			$result = mysqli_query($connection, $queryCoupon);
			$coupon = mysqli_fetch_array($result);
			
			if($coupon == 0){
				echo "Promo Error"; exit;				
			}			
			else{
				$discount = $coupon['discount'];
				$discount_amount = $totalAmount * $discount / 100;
				$totalAmount = $totalAmount - $discount_amount;
			}
		}

		/* Insert Order Get Order Number */
		$queryOrderNumber = "SELECT MAX(MID(order_no,5,20)) +1 As Id FROM `orders`";
		$result = mysqli_query($connection, $queryOrderNumber);
		$orderID = mysqli_fetch_array($result);
		$order_no = $orderID['Id'];

		if ($order_no == 0) {
			$order_no = 'ord_'.'1000';
		}else{
			$order_no = "ord_".$order_no;
		}
		$order_code = generateRandomString();
		$queryOrder = "INSERT INTO `orders`(
					`order_no`,
					`order_code`,
					`date`,
					`name`,
					`email`,
					`phone`,
					`paper_type`,
					`academic_level`,
					`reference_style`,
					`subject`,
					`pages`,
					`paper_standard`,
					`instructions`,
					`topic`,
					`deadline`,
					`hear_about_us`,
					`file_url`,
					`message`,
					`actual_price`,
					`promo_code`,
					`discount`,
					`total_price`,
					`ip`,
					`site`,
					`reffer_url`,
					`created_at`,
					`updated_at`

			) 
			VALUES (
					'".$order_no."',
					'".$order_code."',
					'".date("Y-m-d H:i:s")."',
					'".$_POST['name']."',
					'".$_POST['email']."',
					'".$_POST['phone']."',
					'".$_POST['paper_type']."',
					'".$_POST['academic_level']."',
					'".$_POST['reference_style']."',
					'".$_POST['subject']."',
					'".$_POST['pages']."',
					'".$_POST['paper_standard']."',
					'".$_POST['instructions']."',
					'".$_POST['topic']."',
					'".$_POST['deadline']."',
					'".$_POST['hear_about_us']."',
					'',
					'".$_POST['message']."',
					'".$amount."',
					'".$_POST['promo_code']."',
					'".(isset($discount_amount) ? $discount_amount : '')."',
					'".round($totalAmount, 2)."',
					'".$_SERVER['REMOTE_ADDR']."',
					'".$domain."',					
					'".$_SERVER['HTTP_REFERER']."',
					'".date("Y-m-d H:i:s")."',
					'".date("Y-m-d H:i:s")."'
			)";

		if ($connection->query($queryOrder) === TRUE) {
			//Send Email
			$headers .= 'X-Mailer: PHP/' . phpversion();
			$message = "<table border='2' cellspacing='10'>";
			$message .= "<tr><td colspan='2' style='text-align:center;'><h3>Order Form</h3></td>";
			$message .= "<tr><td>Order No</td><td>".clean_string($order_no)."</td>";
			$message .= "<tr><td>Name</td><td>".clean_string($_POST['name'])."</td>";
			$message .= "<tr><td>Email</td><td>".clean_string($_POST['email'])."</td>";
			$message .= "<tr><td>Phone</td><td>".clean_string($_POST['phone'])."</td>";	
			$message .= "<tr><td>Paper Type</td><td>".clean_string($_POST['paper_type'])."</td>";
			$message .= "<tr><td>Academic Level</td><td>".clean_string($_POST['academic_level'])."</td>";
			$message .= "<tr><td>Reference Style</td><td>".clean_string($_POST['reference_style'])."</td>";
			$message .= "<tr><td>Subject</td><td>".clean_string($_POST['subject'])."</td>";
			$message .= "<tr><td>Pages</td><td>".clean_string($_POST['pages'])."</td>";
			$message .= "<tr><td>Paper Standard</td><td>".clean_string($_POST['paper_standard'])."</td>";
			$message .= "<tr><td>Instruction</td><td>".clean_string($_POST['instructions'])."</td>";
			$message .= "<tr><td>Topic</td><td>".clean_string($_POST['topic'])."</td>";
			$message .= "<tr><td>Deadline</td><td>".clean_string($_POST['deadline'])."</td>";
			$message .= "<tr><td>Hear About Us</td><td>".clean_string($_POST['hear_about_us'])."</td>";
			$message .= "<tr><td>Message</td><td>".clean_string($_POST['message'])."</td>";
			$message .= "<tr><td>Ip</td><td>".$_SERVER['REMOTE_ADDR']."</td>";
			$message .= "<tr><td>Reffer Link</td><td>".$_SERVER['HTTP_REFERER']."</td>";
			$message .= "<tr><td>Total Amount</td><td>".round($totalAmount, 2)."</td>";
			$message .= "</table>";
  
			$email_subject = "Order Form";
			sendEmail($_POST['email'],$email_subject,$message);

			if(!empty($promo_code)){
				$queryRedeemCoupon = "update coupons set redeem = 1 where email = '".$email."' and coupon = '".$promo_code."' ";
				$result = mysqli_query($connection, $queryRedeemCoupon);				
			}

			echo $order_code; 
			
		} else {
			echo "Error: " . $queryOrder . "<br>" . $connection->error;
		}
	}
	else{
		echo "Captcha Error";
	}
}
else{
	header("Location:http://localhost/paperistic");
}

?>