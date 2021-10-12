<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];
$subject= $_POST['Subject'];
$message= $_POST['Message'];
$to = "Info@ashishneupane.info.np";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Subject=" .$subject . "\r\n Message =" . $message;
$headers = "From: noreply@ashishneupane.info.np" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html")
?>