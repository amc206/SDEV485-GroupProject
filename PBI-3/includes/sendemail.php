<?php
//Filename: 305/pizza/includes/sendemail.php
//Send an Email to the pizza shop owner
$toEmail = "campos.angel@student.greenriver.edu"; // use your own info
$fromName = "Angel's Pizza Place"; //pizza website
$fromEmail = "noreply@angelspizza.com";
$subject = "New Pizza Order was Placed";
$headers = "From: $fromName <$fromEmail>";

$message = "A new order has been placed.\n";
$message = $message . "Name: $fname $lname\n"; //concatenate
$message .= "Toppings: $toppings\n";


//Sends the email
$success = mail($toEmail, $subject, $message, $headers);
//If the email failed to send
if (!$success)
{
echo "<p>There was a problem placing your order, please call us.</p>";
}


