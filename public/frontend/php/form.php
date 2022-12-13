<?php

// $html = "<table><tr><td>First Name</td> $firstname</tr><tr><td>Last Name</td>$lastname</tr><tr><td>Email</td>
//  $email</tr><tr><td>Number</td> $number</tr><tr><td>Gender</td> $gender</tr></table>";

include('smtp/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->SMTPDebug  = 3;
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->Username = "clubzhoustan@gmail.com";
$mail->Password = "zclub1234";
$mail->SetFrom("clubzhoustan@gmail.com");
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->AddAddress("clubzhoustan@gmail.com");
$mail->SMTPOptions = array('ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => false
));
if (!$mail->Send()) {
    echo $mail->ErrorInfo;
} else {
    return 'Sent';
}
