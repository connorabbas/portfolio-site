<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController
{

    public static function index()
    {
        return App::view('contact', [
            'pageTitle' => 'Contact'
        ]);
    }

    public static function sendContactEmail()
    {
        require './app/PHPMailer/src/Exception.php';
        require './app/PHPMailer/src/PHPMailer.php';
        require './app/PHPMailer/src/SMTP.php';
        $mail = new PHPMailer(true);

        try {
            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('abbasconnor@gmail.com', 'Connor Abbas');     //Add a recipient
            $mail->addReplyTo('abbasconnor@gmail.com', 'Information');
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
