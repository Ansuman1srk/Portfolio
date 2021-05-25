<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['number'];
$to = "ansumantripathy01091997@gmail.com";
$subject = "Mail From Portfolio Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =". $number;
$headers = "From: ansumantripathy01091997@gmail.com" . "\r\n" .
"CC: ansumantripathy01091997@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
