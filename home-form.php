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
<h2 class="breadcrumb-title">Form Submittion</h2>
<ul class="breadcrumb-menu">
<li><a href="index.php">Home</a></li>
<li class="active">Form Submittion</li>
</ul>
</div>
</div>


<?php
// Autoload PHPMailer classes
function autoloadPHPMailer($className) {
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $messageContent = htmlspecialchars(strip_tags($_POST['message']));

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($messageContent)) {
        die('All fields are required.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Create the email content
    $message = "
    <h2>New Forum Submission</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Message:</strong><br>$messageContent</p>
    ";

    // Send email using PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '7fc513001@smtp-brevo.com'; // Update with your email
        $mail->Password = 'TcsW5fk8DtbXLPgV'; // Update with your SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('connect@gdgoenkabareilly.com'); // Recipient email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Forum Submission';
        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent successfully.';
    } catch (PHPMailer\PHPMailer\Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request method.';
}
?>


</main>
<?php include('includes/footer.php')?>



<a href="404.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


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