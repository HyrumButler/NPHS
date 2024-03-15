<?php
// Retrieve form data
$fullName = $_POST['fullName'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$delivery = isset($_POST['delivery']) ? 'Yes' : 'No'; // Checkbox value

// Compose email message
$message = "Full Name: $fullName\n";
$message .= "Street Address: $address\n";
$message .= "City: $city\n";
$message .= "State: $state\n";
$message .= "Email: $email\n";
$message .= "Delivery: $delivery\n";

// Email settings
$to = '113466@pilgrims.npschools.us'; // Your email address
$subject = 'New Shipping Information'; // Email subject

// Send email
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// Redirect user to a thank you page
header('Location: thank_you.html');
exit;
?>
