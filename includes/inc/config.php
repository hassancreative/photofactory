<?php
require '../vendor/autoload.php';



$domain = 'http://thephotofaktory.com/';
$paper_actual_price = 23.99;
$standard_diff = 4;
$deadline_diff = 3;

function clean_string($string) {
	$bad = array("content-type", "bcc:", "to:", "cc:", "href");
	return str_replace($bad, "", $string);
}

function sendEmail($email,$subject,$message){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host       = 'http://thephotofaktory.com/';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hassancreative9@gmail.com';
    $mail->Password   = 't0090788601'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->isHTML(true);
    $mail->setFrom('hassancreative9@gmail.com');
    $mail->addAddress("hassancreative9@gmail.com");    
    $mail->addReplyTo($email,'');       
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $message;
    $mail->send();
}

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
