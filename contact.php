<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];

//sanitize and validate email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
    exit;
}

$to = "adityatraid09@gmail.com";

$subject = "Mail From Portfolio";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Number = " . $number . "\r\n 
Message =" . $message;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com" . "\r\n" .
"Reply-To: " . $email . "\r\n" .
"X-Mailer: PHP/" . phpversion();

//send email
if(mail($to, $subject, $txt, $headers)){
    header("Location: thankyou.html");
} else {
    echo "Error sending email";
}
?>
