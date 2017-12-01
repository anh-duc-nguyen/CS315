<!DOCTYPE HTML>
<html>
<title>Homework 3</title>
<style>
.question {font-weight: bold; padding-top: 18px;}
.error {color: #FF0000;}
</style>
<meta charset="UTF-8">
<body> 

<h1>Pop Quiz</h1>

<?php
$author = $_POST["Author"];
$name = $_POST["Name"];
$number = $_POST["Number"];
$year = $_POST["Year"];
$mountain = $_POST["Mountain"];

$authorMsg = $nameMsg = $numberMsg = $yearMsg = $mountainMsg = "";
$isValid = true;
$isSubmitted = $_SERVER["REQUEST_METHOD"] == "POST";

if ($isSubmitted)
{
    if    ($author == "H G Wells") 
    {
        $authorMsg = "Correct!";
    }
    else
        $authorMsg = "Wrong answer!";

    if    ($name == "Ancient Greek") 
    {
        $nameMsg = "Correct!";
    }
    else
        $nameMsg = "Wrong answer!";

    if    ($number == "a") 
    {
        $numberMsg = "Correct!";
    }
    else
        $numberMsg = "Wrong answer!";
    
    if    ($year == "1960") 
    {
        $yearMsg = "Correct!";
    }
    else
        $yearMsg = "Wrong answer!";

  if    ($mountain == "Mauna Kea" || $mountain == "mauna kea") 
    {
        $mountainMsg = "Correct!";
    }
    else
        $mountainMsg = "Wrong answer!";

}
?>

<form method="post" action="hw3.php">

<div>   
       <div class="question">Question 1: Who is the author of the book "The Invisible Man"?</div>
       <div class="input">
        <input type="radio" name="Author" value="Ralph Ellison">Ralph Ellison<br>
       <input type="radio" name="Author" value="H G Wells">H G Wells<br>
       <input type="radio" name="Author" value="Napoleon Hill">Napoleon Hill</div>
       <?php 
        if (!empty($authorMsg) && $isSubmitted)
        echo "<div class ='error'>$authorMsg</div>";
    ?>
</div>

<div>   
       <div class="question">Question 2: The word "technology" comes from which language)?</div>
       <div class="input">
        <input type="radio" name="Name" value="Ancient Greek">Ancient Greek<br>
       <input type="radio" name="Name" value="English">English<br>
       <input type="radio" name="Name" value="French">French</div>
       <?php 
        if (!empty($nameMsg) && $isSubmitted)
        echo "<div class ='error'>$nameMsg</div>";
    ?>
</div>

<div>   
       <div class="question">Question 3: How big is a Gigabyte?</div>
       <div class="input">
        <input type="radio" name="Number" value="a">1,024 Megabytes<br>
        <input type="radio" name="Number" value="b">924 Megabytes<br>
       <input type="radio" name="Number" value="c">2048 Megabytes</div>
       <?php 
        if (!empty($numberMsg) && $isSubmitted)
        echo "<div class ='error'>$numberMsg</div>";
    ?>
</div>

<div>
    <div class="question">Question 4: What year did International System of Units was published?</div>
    <div class="input"><input type="text" name="Year" value=""></div>
    <?php 
        if (!empty($yearMsg) && $isSubmitted)
        echo "<div class ='error'>$yearMsg</div>";
    ?>
</div>

<div>
    <div class="question">Question 5: Which mountain is the tallest in the world, including underwater mountain?</div>
    <div class="input"><input type="text" name="Mountain" value=""></div>
       <?php 
        if (!empty($mountainMsg) && $isSubmitted)
        echo "<div class ='error'>$mountainMsg</div>";
    ?>
</div>
<br>
<div>
   <input type="submit" name="submit" value="Submit">
</div>

</form>
</body>
</html>
