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
$house = $_POST["House"];              //this is the key for the quiz
$name = $_POST["Name"];
$mother = $_POST["Mother"];
$Character = $_POST["Character"];
$weapon = $_POST["Weapon"];

$houseMsg = $nameMsg = $motherMsg = $CharacterMsg = $weaponMsg = "";
$isValid = true;
$isSubmitted = $_SERVER["REQUEST_METHOD"] == "POST";

if ($isSubmitted)                        // this compare the answer given by user with the key
{
    if    ($house == "Mortensen") 
    {
        echo "correct"
        $houseMsg = "Correct!";
    }
    else
        $houseMsg = "Wrong answer!";

    if    ($name == "Bran Stark") 
    {
        $nameMsg = "Correct!";
    }
    else
        $nameMsg = "Wrong answer!";

    if    ($mother == "b") 
    {
        $motherMsg = "Correct!";
    }
    else
        $motherMsg = "Wrong answer!";
    
    if    (preg_match("/Jon/i", $Character) 
    {
        $CharacterMsg = "Correct!";
    }
    else
        $CharacterMsg = "Wrong answer!";

  if    (preg_math("/bow/i", $weapon))
    {
        $weaponMsg = "Correct!";
    }
    else
        $weaponMsg = "Wrong answer!";
    }

?>

<form method="post" action="hw3.php">

<div>   
      <div class="question">Question 1: Which of the following is NOT a family in Game of Thrones?</div>
      <div class="input">
      <input type="radio" name="house" value="Stark">Stark<br>
      <input type="radio" name="house" value="Mortensen">Mortensen<br>
      <input type="radio" name="house" value="Bolton">Bolton</div>
      <?php 
        if (!empty($houseMsg) && $isSubmitted){
          echo "<div class ='error'>$houseMsg </div>";
        }
      ?>
</div>

<div>   
       <div class="question">Question 2: In the first episode of season 1, who accidentally discovers Queen Cersei's secret?</div>
       <div class="input">
        <input type="radio" name="Name" value="Bran Stark">Bran Stark<br>
       <input type="radio" name="Name" value="Arya Stark">Arya Stark<br>
       <input type="radio" name="Name" value="Tyrion Lannister">Tyrion Lannister</div>
       <?php 
        if (!empty($nameMsg) && $isSubmitted){
			echo "<div class ='error'>$nameMsg</div>";
		}
    ?>
</div>

<div>   
       <div class="question">Question 3: Who is Robb Stark's mother?</div>
       <div class="input">
        <input type="radio" name="mother" value="a">Talisa Stark<br>
        <input type="radio" name="mother" value="b">Catelyn Stark<br>
       <input type="radio" name="mother" value="c">Arya Stark</div>
       <?php 
        if (!empty($motherMsg) && $isSubmitted){
			echo "<div class ='error'>$motherMsg</div>";
		}
    ?>
</div>

<div>
    <div class="question">Question 4: Who die before the first episode of Game of Throne</div>
    <div class="input"><input type="text" name="Character" value=""></div>
    <?php 
        if (!empty($CharacterMsg) && $isSubmitted){
			echo "<div class ='error'>$CharacterMsg</div>";
		}
    ?>
</div>

<div>
    <div class="question">Question 5: What does Tyrion murder his father with?</div>
    <div class="input"><input type="text" name="weapon" value=""></div>
       <?php 
        if (!empty($weaponMsg) && $isSubmitted){
			echo "<div class ='error'>$weaponMsg</div>";
		}
    ?>
</div>
<br>
<div>
   <input type="submit" name="submit" value="Submit">
</div>

</form>
</body>
</html>
