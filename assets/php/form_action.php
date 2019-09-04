<?php
$to = 'hankins.jamesb@gmail.com';
$subject = `Email from Portfolio | ` $_POST['name'];
$message = $_POST['message'];
$from = $_POST['email'];

// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
