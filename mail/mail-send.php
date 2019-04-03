<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = 'ashiq.ali.chowdhury@gmail.com';
    $subject = "New Message on KristjanMark.com";
    $message = = $_POST['message'];

//headers
$headers = "From: ".$name." <".$email.">\r\n";
$headers = "Reply-To: ".$email."\r\n";
$headers = "MIME-Version: 1.0\r\n";
$headers = "Content-type: text/html; charset-utf-8";

//send
$send = mail($to, $subject, $message, $headers);
if ($send) {
    echo '<br>';
    echo "Success. Thanks for Your Message.";
} else {
    echo 'Error.';
}
}
?>