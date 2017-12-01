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
    if    ($author == "George R.R Martin") 
    {
        $authorMsg = "Correct!";
    }
    else
        $authorMsg = "Wrong answer!";

    if    ($name == "Snow") 
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
    
    if    ($year == "1945") 
    {
        $yearMsg = "Correct!";
    }
    else
        $yearMsg = "Wrong answer!";

  if    ($mountain == "everest" || $mountain == "Everest" || $mountain =="Mount Everest") 
    {
        $mountainMsg = "Correct!";
    }
    else
        $mountainMsg = "Wrong answer!";

}
?>

<form method="post" action="hw3.php">

<div>   
       <div class="question">Question 1: Who is the author of the book "Game of Throne"?</div>
       <div class="input">
        <input type="radio" name="Author" value="George R.R Martin">George R.R Martin<br>
       <input type="radio" name="Author" value="J.R.R Tolkien">J.R.R Tolkien<br>
       <input type="radio" name="Author" value="Anh Nguyen">Anh Nguyen</div>
       <?php 
        if (!empty($authorMsg) && $isSubmitted)
        echo "<div class ='error'>$authorMsg</div>";
    ?>
</div>

<div>   
       <div class="question">Question 2: In the serie Game Of Thonre, what is the last name given for the bastard of the North  ?</div>
       <div class="input">
        <input type="radio" name="Name" value="Pyke">Pyke<br>
       <input type="radio" name="Name" value="Snow">Snow<br>
       <input type="radio" name="Name" value="Sand">Sand</div>
       <?php 
        if (!empty($nameMsg) && $isSubmitted)
        echo "<div class ='error'>$nameMsg</div>";
    ?>
</div>

<div>   
       <div class="question">Question 3:How many state in the USA?</div>
       <div class="input">
        <input type="radio" name="Number" value="a">52<br>
        <input type="radio" name="Number" value="b">92<br>
       <input type="radio" name="Number" value="c">1</div>
       <?php 
        if (!empty($numberMsg) && $isSubmitted)
        echo "<div class ='error'>$numberMsg</div>";
    ?>
</div>

<div>
    <div class="question">Question 4: What year did the World War 2 ended?</div>
    <div class="input"><input type="text" name="Year" value=""></div>
    <?php 
        if (!empty($yearMsg) && $isSubmitted)
        echo "<div class ='error'>$yearMsg</div>";
    ?>
</div>

<div>
    <div class="question">Question 5: Which mountain is the tallest in the world ?</div>
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
