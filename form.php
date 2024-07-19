<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Compose email content
    $email_content = "<h2>New Contact Form Submission</h2>
                      <p><strong>Name:</strong> $firstname $lastname</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Phone:</strong> $phone</p>
                      <p><strong>Message:</strong></p>
                      <p>$message</p>";

    $mail = new PHPMailer(true);

    try {
        //Server settings 
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kolayeswanth2005@gmail.com'; // Your SMTP username 
        $mail->Password = 'haqq tvzp clqc sext'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients 
        $mail->setFrom($email, "$firstname $lastname");
        $mail->addAddress('kolayeswanth2005@gmail.com');
        $mail->addReplyTo($email, "$firstname $lastname");

        // Content 
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = $email_content;

        $mail->send();
        echo "<script>
                alert('Message sent successfully');
                window.history.back();
                location.reload();
              </script>";
        exit;
        
       
    } catch (Exception $e) {
        echo "<script>
                alert('Message could not be sent. Mailer Error: ' + '<?php echo $mail->ErrorInfo; ?>');
                window.history.back();
              </script>";
        exit;
    }
} else {
    echo "<script>
            alert('Invalid request method');
            window.history.back();
          </script>";
    exit;
}