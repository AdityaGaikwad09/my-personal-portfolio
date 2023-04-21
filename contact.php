<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];

$to = "adityatraid09@mail.com";

$subject = "Mail From Portfolio";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Mobile number = " . $number . "\r\n 
Message =" . $message;

$headers = "From: noreply@yoursite.com" . "\r\n" .

"CC: somebodyelse@example.com";

if($email!=NULL){

    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");

?>