<?php 
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "mrkavuu@gmail.com";

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
                        
   $to = "mrkavuu@gmail.com";
   
   $headers = "From: $email_from \r\n";

   $headers .= "Reply-To $visitor_email \r\n";

   mail($to,$email_subject,$email_body,$headers);

   header("Location: index.html");
?>

<!-- <?php 

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     $mailFrom = $_POST['mail'];
//     $message = $_POST['message'];

//     $mailTo = "mrkavuu@gmail.com";
//     $headers  = "From: ".$mailFrom;
//     $txt = "You have received an e-mail from ".$name.".\n\n".$message;

//     mail($mailTo, $subject, $txt, $headers);
//     header("Location: index.html?mailsend");
// }

?> -->

