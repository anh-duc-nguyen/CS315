<!DOCTYPE HTML>
<html>

<head>
  <title>Homework 5</title>
  <meta charset="utf-8" />
  <style>
    .error {
      color: #FF0000;
    }
    .correct {
      color: #008000;
    }
  </style>
</head>

<body>
  <h1>Homework 5 </h1>
  <form method="post" action="hw5_1.php"> First Name:
    <input type="text" name="fname"><span class="error"></span>
    <br> Last Name:
    <input type="text" name="lname"><span class="error"></span>
    <br> Email Address:
    <input type="text" name="email" placeholder="xyz1234@truman.edu"><span class="error"></span>
    <br>
    <input type="submit" name="submit" value="Submit">
    <br> <span class="error"></span> <span class="correct"></span> </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"])) //make sure all enteries are filled in
  {
    $error = "All entries are required!"; 
    echo $error;
  }
  else
  {
    $error = " ";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    if( !preg_match("/^[a-zA-Z]+$/", $fname) || !preg_match("/^[a-zA-Z]+$/", $lname) || !preg_match("/^[a-zA-Z]{2,3}\d{4}@truman.edu/", $email) )
    {
      if(!preg_match("/^[a-zA-Z]+$/", $fname)) //check to see if fname is in right format
    {$fnameError = "First Name is not in the right format \n ";
		echo $fnameError;}
      if(!preg_match("/^[a-zA-Z]+$/", $lname)) //check to see if lname is in right format
    {$lnameError = "Last Name is not in the right format \n";
		echo $lnameError;}
      if(!preg_match("/^[a-zA-Z]{2,3}\d{4}@[a-z]\.[a-z]/", $email)) //check to see if email is in right format
    {$emailError = "Email is not in the right format, please enter an valid truman email\n";
		echo $emailError;}
    }
    else
    {
       $db = new PDO("mysql:dbname=adn6627CS315;host=mysql.truman.edu", "adn6627", "aiquieje");
       $db->exec("INSERT INTO adn6627CS315.hw5 (FirstName, LastName, EmailAddress) VALUES ('$fname','$lname','$email')");
       $success = "Record Added Successfully!";
       echo $success;
    }
  }
}

?>
</body>

</html>
