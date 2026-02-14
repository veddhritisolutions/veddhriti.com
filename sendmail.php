<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=htmlspecialchars($_POST['name']);
$email=htmlspecialchars($_POST['email']);
$company=htmlspecialchars($_POST['company']);
$job=htmlspecialchars($_POST['job']);
$service=htmlspecialchars($_POST['service']);
$message=htmlspecialchars($_POST['message']);

$to="team@veddhriti.com";
$subject="New Digital Strategy Request - Veddhriti";

$body="
Name: $name
Email: $email
Company: $company
Job Title: $job
Service: $service

Message:
$message
";

$headers="From: $email";

if(mail($to,$subject,$body,$headers)){
echo "Thank you! Our team will contact you shortly.";
}else{
echo "Error sending message.";
}
}
?>
