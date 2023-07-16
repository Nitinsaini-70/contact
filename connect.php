<?php

$to = 'saini00nitin@gmail.com'
$name=$_POST['Name'];
$mail=$_POST['Email'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];
    
$output = "Name :" . $name . "\n" . "Email :" . $mail . "\n" . "Subject :" . $subject . "\n" . "Message :" . $message;

if(mail($to,$output)){
    echo 'send sussecful';
}
else{
    each 'unable';
}

?>
