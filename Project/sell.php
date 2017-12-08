<!DOCTYPE HTML>
<html>
<title> Thank You </title>
<body>
<h1> Thank you, I will be in touch soon :) </h1>
<a href="index.html"> Click here to back to the main page </a>
<form action="sell.php" method="get">
<input type ="text" name ="name" placeholder = "your name"> 
</input>
</form>
<?php
$name = $_GET["Name"];
echo 'name' , $name;
echo 'anh';
?>

</body>