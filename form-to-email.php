<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate First
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'solutionscybex@gmail.com'; //<==Put your email address here
$email_subject = "New Contact Enquiry";
$email_body = "You have received an email from $name.\n".
              "email address: $visitor_email\n".
              "Here is the email content:\n $message".

$to = "solutionscybex@gmail.com";//<== Put your email address here
$headers = "From: $email_from \r\n";

//Semd the email!
mail($to, $email_subject, $email_body, $headers);
//Done, Redirect to Thank-you Page