<?Php

session_start();
header ("Content-type: image/png");


if(isset($_SESSION['my_captcha']))
{
unset($_SESSION['my_captcha']); // destroy the session if already there
}
//////Part 1 Random string generation ////////
$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";
$string=$string1.$string2;
$string= str_shuffle($string);
$random_text= substr($string,0,5); // change the number to change number of chars
/////End of Part 1 ///////////

$_SESSION['my_captcha'] = $random_text; // Assign the random text to session variable


///// Create the image ////////
$im = @ImageCreate (180, 50) // Width and height of the image. 
or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 204, 204, 204); // Assign background color
$text_color = ImageColorAllocate ($im, 51, 51, 255);      // text color is given 
ImageString($im,5,50,15,$_SESSION['my_captcha'],$text_color); // Random string  from session added 
///im is the image source, Int 5 is the font size,Int 8 is the X position , Int 2 is the Y position //
ImagePng ($im); // image displayed
imagedestroy($im); // Memory allocation for the image is removed. 
?>
