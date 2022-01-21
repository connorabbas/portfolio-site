<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController
{

    public static function index()
    {
        $alert = '';
        if (isset($_GET['sent'])) {
            ob_start();
            if ($_GET['sent']) {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message Sent!</strong> Thanks for your message, I will respond asap.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            if ($_GET['sent'] == 0 && $_GET['reason'] == "captcha") {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message NOT sent.</strong> Please fill out the required captcha.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            if ($_GET['sent'] == 0 && $_GET['reason'] == "PHPMailer") {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Message NOT sent.</strong> Email not working...
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
            $alert = ob_get_clean();
        }

        return App::view('contact', [
            'pageTitle' => 'Contact',
            'alert' => $alert,
        ]);
    }

    public static function sendContactEmail()
    {
        require './app/PHPMailer/src/Exception.php';
        require './app/PHPMailer/src/PHPMailer.php';
        require './app/PHPMailer/src/SMTP.php';
        $mail = new PHPMailer(true);

        $res = $this->post_captcha($_POST['g-recaptcha-response']);

        if (!$res['success']) {
            // What happens when the CAPTCHA wasn't checked
            App::redirect('/contact?sent=0&reason=captcha');
        } else {
            // If CAPTCHA is successfully completed...
            try {
                //Recipients
                //$mail->setFrom('from@example.com', 'Mailer');
                $mail->addAddress('abbasconnor@gmail.com', 'Connor Abbas'); //Add a recipient
                $mail->addReplyTo('abbasconnor@gmail.com', 'Information');

                ob_start();
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Email</title>
                </head>
                <body>
                    <h3>New Email From Portfolio Site:</h3>
                    <br>
                    <p>Name: <?= $_POST['name'] ?></p>
                    <p>Email: <?= $_POST['email'] ?></p>
                    <p>Message:</p>
                    <pre><?= $_POST['message'] ?></pre>
                </body>
                </html>
                <?php
                $msgBody = ob_get_clean();
            
                //Content
                $mail->isHTML(true); //Set email format to HTML
                $mail->Subject = 'Email from connor-abbas.com';
                $mail->Body    = $msgBody;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $sent = $mail->send();
                echo 'Message has been sent';
                if ($sent) {
                    App::redirect('/contact?sent=1');
                } else {
                    App::redirect('/contact?sent=0&reason=PHPMailer');
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }

    }

    function post_captcha($user_response)
    {
        $fields_string = '';
        $fields = array(
            'secret' => getenv('GOOGLE_CAPTCHA_PRIVATE_KEY'),
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
    
        $result = curl_exec($ch);
        curl_close($ch);
    
        return json_decode($result, true);
    }
}
