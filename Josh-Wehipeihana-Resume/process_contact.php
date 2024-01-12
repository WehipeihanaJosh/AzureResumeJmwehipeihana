<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$priority = $_POST['priority'];
$copy = isset($_POST['copy']) ? 'Yes' : 'No';
$message = $_POST['message'];

// Compose email message
$to = "jmwehipeihana@yahoo.co.nz";
$subject = "Contact Form Submission";
$headers = "From: $email";
$body = "Name: $name\nEmail: $email\nCategory: $category\nPriority: $priority\nSend copy: $copy\nMessage:\n$message";

// Send email
if (mail($to, $subject, $body, $headers)) {
  echo "Message sent successfully!";
} else {
  echo "Message could not be sent.";
}
?>
