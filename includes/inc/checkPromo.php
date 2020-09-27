<?php 
require 'config.php';
if(isset($_POST['promoCode'])){
	if(!empty($_POST['promoCode'])){
		
		$queryCoupon = "SELECT * FROM `coupons` WHERE email = '".$email."' AND coupon = '".$promo_code."' AND redeem = 0 ORDER BY `id` DESC";

		$result = mysqli_query($connection, $queryCoupon);
		$coupon = mysqli_fetch_array($result);
		
		if($coupon == 0){
			echo "Invalic promo code error"; exit;				
		}			
		else{
			$discount = $coupon['discount'];
			echo $discount;
		}
	}
	else{
		echo "required";
	}
}
else{
	Header("Location:./index.php");
}

?>