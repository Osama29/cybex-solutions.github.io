<!-- submit-form.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];

  // send email with the user's information
  $to = "your-email-address@example.com";
  $subject = "New Contact Us Submission";
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    // success message
    echo "Your message was sent successfully!";
  } else {
    // error message
    echo "There was an error sending your message. Please try again later.";
  }
}
?>
