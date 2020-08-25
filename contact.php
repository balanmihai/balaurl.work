<?php

// if (isset($_POST['submit'])){
//   $name = $_POST['name'];
//   $emailFrom = $_POST['email'];
//   $message = $_POST['message'];

//   $mailTo = "";
//   $headers = "From: ".$emailFrom;
//   $txt = "You have received an e-mail from".$name.".\n\n".$message;

//   mail($mailTo, $subject, $txt, $headers);
//   header("Location: index.php?mailsent");

// }

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from= 'mihai.balan.bala@gmail.com';
    $email_subject= "New Form Submission";
    $email_body= "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Message: $message.\n";

    $to = "mihai.balan.bala@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>
