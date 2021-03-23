<?php
if (isset($_POST['send'])){
    $to = 'snazzycats2005@gmail.com'; // My email
    $subject = 'Message from site'; // subject that will be sent in email
    $message = 'You received a message from: ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Phone Number: ' . $_POST['pnumber'] . "\r\n\r\n";
    $message .= 'Location: ' . $_POST['location'] . "\r\n\r\n";
    $message .= 'Message: ' . $_POST['usermessage'];
    $headers = 'Content-Type: text/plain; charset=utf=8';
    $success = mail($to, $subject, $message, $headers);
}
?>