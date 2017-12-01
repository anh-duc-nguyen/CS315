<!DOCTYPE HTML>
<html>
<title> Thank You </title>
<body>
<h1> Thank you, I will be in touch soon :) </h1>
<a href="index.html"> Click here to back to the main page </a>

<?php
/// This will send an email to my email
$name = $_POST["Name"];
$email = $_POST["Email"];
$mess = $_POST["Message"];
$to = 'adn6627@truman.edu';
$subject = 'contact from my gallery';
$headers = 'From: $Name' . "\r\n" . 'Reply-To: $email' . "\r\n" . 'X-mailer: PHP/' . phpversion();
?>
<br>
<?php
echo ' sending message from',$name, 'to ', $to;
mail($to, $subject, $mess, $headers);
?>

</body>
</html>