<!DOCTYPE php>
<php lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content>
        <meta name="keywords" content>

        <title>G.D. Goenka Public School</title>

        <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <style>
        body {
            overflow-y: hidden;
        }
    </style>

    <body>

        <?php include("includes/preloader.php") ?>


        <?php include("includes/navbar.php") ?>



        <div class="search-popup">
            <button class="close-search"><span class="far fa-times"></span></button>
            <form action="application-form.php#">
                <div class="form-group">
                    <input type="search" name="search-field" placeholder="Search Here..." required>
                    <button type="submit"><i class="far fa-search"></i></button>
                </div>
            </form>
        </div>

        <main class="main">
        <?php

// Simple autoloader for PHPMailer
function autoloadPHPMailer($className)
{
    // Path to the libs folder
    $libsDir = __DIR__ . '/libs/';

    // Define the list of PHPMailer classes and their corresponding filenames
    $classMap = [
        'PHPMailer\\PHPMailer\\PHPMailer' => 'PHPMailer.php',
        'PHPMailer\\PHPMailer\\Exception' => 'Exception.php',
        'PHPMailer\\PHPMailer\\SMTP' => 'SMTP.php',
    ];

    // Check if the class exists in the map
    if (isset($classMap[$className])) {
        // Include the file corresponding to the class
        require_once $libsDir . $classMap[$className];
    }
}

// Register the autoloader function
spl_autoload_register('autoloadPHPMailer');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $dob = $_POST['dob'];
    $program = $_POST['program'];
    $fathername = $_POST['fathername'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $currentSchool = $_POST['CurrentSchool'];
    $address = $_POST['address'];
    $query = $_POST['query'];

    // Create the email content
    $message = "
<h2>New Forum Submission</h2>
<p><strong>Student's Name:</strong> $firstname</p>
<p><strong>Date of Birth:</strong> $dob</p>
<p><strong>Class Applying For:</strong> $program</p>
<p><strong>Parent/Guardian Name:</strong> $fathername</p>
<p><strong>Contact Number:</strong> $number</p>
<p><strong>Email Address:</strong> $email</p>
<p><strong>Current School:</strong> $currentSchool</p>
<p><strong>City/Location:</strong> $address</p>
<p><strong>Specific Queries:</strong> $query</p>
";

    // Send email using PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Username = '80b4f1001@smtp-brevo.com';
        $mail->Password = 'LkV7qCUrm0gKZBhy'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Always use the verified sender email in the "From" field
        $mail->setFrom('botkarmadevi@gmail.com', 'Omni Admission Form');

        // Set the user's input email in the "Reply-To" field
        $mail->addReplyTo($email, $firstname);

        // Set the recipient email
        $mail->addAddress('connect@gdgoenkabareilly.com'); // Principal's email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Forum Submission';
        $mail->Body = $message;

        $mail->send();
        $thankYouMail = new PHPMailer\PHPMailer\PHPMailer(true);

        $thankYouMail->isSMTP();
        $thankYouMail->Host = 'smtp-relay.brevo.com';
        $thankYouMail->SMTPAuth = true;
        $thankYouMail->Username = '80b4f1001@smtp-brevo.com';
        $thankYouMail->Password = 'LkV7qCUrm0gKZBhy'; // Same SMTP credentials
        $thankYouMail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $thankYouMail->Port = 587;

        // Send from the verified sender email
        $thankYouMail->setFrom('botkarmadevi@gmail.com', 'G.D. Goenka Admission Team');
        $thankYouMail->addAddress($email, $firstname); // To the form filler

        $thankYouMail->addReplyTo('connect@gdgoenkabareilly.com', 'G.D. Goenka');

        $thankYouMail->isHTML(true);
        $thankYouMail->Subject = 'Thank You for Your Submission!';
        $thankYouMail->Body = "
            <h2>Dear $firstname,</h2>
            <p>Thank you for submitting your form. We have received your information and will contact you soon.</p>
            <p>Best Regards,<br>G.D Goenka Team</p>
        ";

        // Send the thank-you email
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
<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>
<a href="index.php" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
</div>
</div>
</div>
</div>';
    }
}
?>




        </main>
        <?php include('includes/footer.php') ?>



        <a href="application-form.php#" id="scroll-top"><i class="far fa-arrow-up-from-arc"></i></a>


        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery-3.7.1.min.js"></script>
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