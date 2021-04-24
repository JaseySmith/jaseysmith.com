<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';



if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($message)) {
        // If pass check email
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // If pass send email
            try{
                $mail->isSMTP();
                $mail->Host = '';
                $mail->SMTPAuth = true;
                $mail->Username = ''; // Email address which you want to use as SMTP server
                $mail->Password = ''; // Email address Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = '25';
        
                $mail->setFrom(''); // Email address which you used as SMTP server
                $mail->addAddress(''); // Email address where you want to receive emails 
        
                $mail->isHTML(true);
                $mail->Subject = 'Message Received (Contact Page)';
                $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";
        
                $mail->send();
                header('location: thanks.php');
            } catch (Exception $e) {
                $alert = '<div class="alert-error">
                            <span>Oops, something has gone wrong</span>
                        </div>';
            }
        } else {
            $alert = '<div class="alert-error">
                        <span>Please enter a valid email address</span>
                    </div>';
        }
    } else {
        $alert = '<div class="alert-error">
                    <span>Please fill in all fields</span>
                </div>';
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
