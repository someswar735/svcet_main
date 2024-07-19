<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data 
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Compose email content
    $email_content = "<h2>New Admission Enquiry</h2>
                      <p><strong>Name:</strong> $name</p>
                      <p><strong>Mobile:</strong> $mobile</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Course:</strong> $course</p>
                      <p><strong>Branch:</strong> $branch</p>
                      <p><strong>Address:</strong> $address</p>
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
        $mail->Subject = 'New Admission Enquiry';
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
?>
