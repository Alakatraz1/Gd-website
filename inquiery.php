<?php
// Autoloader for PHPMailer
function autoloadPHPMailer($className)
{
    $libsDir = __DIR__ . '/libs/';
    $classMap = [
        'PHPMailer\\PHPMailer\\PHPMailer' => 'PHPMailer.php',
        'PHPMailer\\PHPMailer\\Exception' => 'Exception.php',
        'PHPMailer\\PHPMailer\\SMTP' => 'SMTP.php',
    ];

    if (isset($classMap[$className])) {
        require_once $libsDir . $classMap[$className];
    }
}

spl_autoload_register('autoloadPHPMailer');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $messageContent = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (!$email || !$name || !$subject || !$phone || !$messageContent) {
        echo "All fields are required, and email must be valid.";
        exit;
    }

    // Create the email content for admin
    $adminMessage = "
        <h2>New Forum Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong> $messageContent</p>
    ";

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // SMTP server configuration for admin email
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '80b4f1001@smtp-brevo.com';
        $mail->Password = 'LkV7qCUrm0gKZBhy';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('botkarmadevi@gmail.com', 'Omni Inquiry Form');
        $mail->addAddress('connect@gdgoenkabareilly.com'); // Admin email
        if ($email) {
            $mail->addReplyTo($email, $name);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $adminMessage;
        $mail->send();
        echo 'Message has been sent.';

        // Send a thank-you email to the user
        $thankYouMail = new PHPMailer\PHPMailer\PHPMailer(true);
        $thankYouSubject = "Thank You for Your Submission!";
        $thankYouMessage = "
            <h2>Dear $name,</h2>
            <p>Thank you for submitting your inquiry. We have received your information and will contact you shortly.</p>
            <p>Best Regards,<br>G.D. Group</p>
        ";

        $thankYouMail->isSMTP();
        $thankYouMail->Host = 'smtp-relay.brevo.com';
        $thankYouMail->SMTPAuth = true;
        $thankYouMail->Username = '7fc513001@smtp-brevo.com';
        $thankYouMail->Password = 'TcsW5fk8DtbXLPgV';
        $thankYouMail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $thankYouMail->Port = 587;

        $thankYouMail->setFrom('botkarmadevi@gmail.com', 'G.D. Inquiry Form');
        $thankYouMail->addAddress($email, $name); // Send to the form filler
        $thankYouMail->addReplyTo('connect@gdgoenkabareilly.com', 'G.D. Goenka'); // Reply-To field set to connect@

        $thankYouMail->isHTML(true);
        $thankYouMail->Subject = $thankYouSubject;
        $thankYouMail->Body = $thankYouMessage;
        $thankYouMail->send();

        echo 'Thank-you email has been sent.';
    } catch (PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
