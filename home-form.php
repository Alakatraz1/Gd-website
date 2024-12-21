<!DOCTYPE php>
<php lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content>
<meta name="keywords" content>

<title>G.D. Goenka Public School</title>

<link rel="icon" href="assets/img-custom/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include('includes/preloader.php')?>

<?php include('includes/navbar.php')?>



<div class="search-popup">
<button class="close-search"><span class="far fa-times"></span></button>
<form action="404.php#">
<div class="form-group">
<input type="search" name="search-field" placeholder="Search Here..." required>
<button type="submit"><i class="far fa-search"></i></button>
</div>
</form>
</div>

<main class="main">

<div class="site-breadcrumb" style="background: url(assets/home/alltop.webp)">
<div class="container">
<h2 class="breadcrumb-title">Form Submission</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Form Submission</li>
</ul>
</div>
</div>


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
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $messageContent = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Check if all fields are valid
    if (!$name || !$email || !$phone || !$messageContent) {
        echo '<div class="error-area py-120">
<div class="container">
<div class="col-md-6 mx-auto">
<div class="error-wrapper">

<h2>Invalid Input!</h2>
<p>All fields are required, and email must be valid.</p>
<a href="index.php" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
</div>
</div>
</div>
</div>';
        exit;
    }

    // Admin email setup
    $adminEmail = 'connect@gdgoenkabareilly.com';
    $adminSubject = "New Inquiry Form Submission";
    $adminMessage = "
        <h2>New Inquiry Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Message:</strong> {$messageContent}</p>
    ";

    // Create and send email to admin
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // SMTP configuration for admin email
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '80b4f1001@smtp-brevo.com';
        $mail->Password = 'LkV7qCUrm0gKZBhy';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('botkarmadevi@gmail.com', 'G.D. Goenka Bareilly Inquiry Form');
        $mail->addAddress($adminEmail);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $adminSubject;
        $mail->Body = $adminMessage;

        $mail->send();

        // Send thank-you email to the user
        $thankYouMail = new PHPMailer\PHPMailer\PHPMailer(true);
        $thankYouSubject = "Thank You for Your Inquiry!";
        $thankYouMessage = "
            <h2>Dear {$name},</h2>
            <p>Thank you for reaching out to us. We have received your message and will contact you shortly.</p>
            <p>Best regards,<br>G.D. Goenka Bareilly Group</p>
        ";

        $thankYouMail->isSMTP();
        $thankYouMail->Host = 'smtp-relay.brevo.com';
        $thankYouMail->SMTPAuth = true;
        $thankYouMail->Username = '7fc513001@smtp-brevo.com';
        $thankYouMail->Password = 'TcsW5fk8DtbXLPgV';
        $thankYouMail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $thankYouMail->Port = 587;

        $thankYouMail->setFrom('botkarmadevi@gmail.com', 'G.D. Goenka Bareilly Inquiry Form');
        $thankYouMail->addAddress($email, $name);

        $thankYouMail->isHTML(true);
        $thankYouMail->Subject = $thankYouSubject;
        $thankYouMail->Body = $thankYouMessage;

        $thankYouMail->send();

        echo '<div class="error-area py-120">
<div class="container">
<div class="col-md-6 mx-auto">
<div class="error-wrapper">

<h2>Message has been sent!</h2>
<p>Check your mailbox for confirmation</p>
<a href="index.php" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
</div>
</div>
</div>
</div>';
    } catch (PHPMailer\PHPMailer\Exception $e) {
        echo '<div class="error-area py-120">
<div class="container">
<div class="col-md-6 mx-auto">
<div class="error-wrapper">

<h2>Message not sent!</h2>
<p>Message could not be sent. Mailer Error: ' . htmlspecialchars($mail->ErrorInfo) . '</p>
<a href="index.php" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
</div>
</div>
</div>
</div>';
    }
} else {
    echo '<div class="error-area py-120">
<div class="container">
<div class="col-md-6 mx-auto">
<div class="error-wrapper">

<h2>Invalid Request!</h2>
<p>Please use the form to submit your inquiry.</p>
<a href="index.php" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
</div>
</div>
</div>
</div>';
}
?>




<a href="404.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>

<?php include('includes/footer.php')?>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</php>