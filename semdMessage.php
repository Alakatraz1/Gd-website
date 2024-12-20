<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    
    if (empty($name) || empty($email) || empty($message)) {
        http_response_code(400);
        echo json_encode(["error" => "All fields are required."]);
        exit;
    }

    
    $college_email = "college_email@example.com";

    
    $subject_to_college = "New Query from $name";
    $body_to_college = "Name: $name\nEmail: $email\nMessage: $message";

    
    $subject_to_user = "Thank You for Contacting Us";
    $body_to_user = "Hi $name,\n\nThank you for reaching out to us. We have received your message:\n\n$message\n\nWe will get back to you soon!\n\nBest Regards,\nCollege Team";

    
    $headers_to_college = "From: $email";
    if (!mail($college_email, $subject_to_college, $body_to_college, $headers_to_college)) {
        http_response_code(500);
        echo json_encode(["error" => "Failed to send email to the college."]);
        exit;
    }

    
    $headers_to_user = "From: $college_email";
    if (!mail($email, $subject_to_user, $body_to_user, $headers_to_user)) {
        http_response_code(500);
        echo json_encode(["error" => "Failed to send thank-you email to the user."]);
        exit;
    }

    // Success response
    http_response_code(200);
    echo json_encode(["message" => "Form submitted successfully."]);
}
?>