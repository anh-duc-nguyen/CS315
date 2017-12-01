<!DOCTYPE HTML>
<html>

<head>
  <title>Homework 5</title>
  <meta charset="utf-8" />
  <style>
    table, th, td {
      border: 1px solid black;
    }

  </style>
</head>

<body>
  <h1>Homework 5 </h1>
  <form method="post" action="hw5_2.php">
    <input type="submit" name="submit" value="See Database">
    <br> </form>
  <h4>User</h4>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $db = new PDO("mysql:dbname=adn6627CS315;host=mysql.truman.edu", "adn6627", "aiquieje");
        $rows = $db->query("SELECT * FROM adn6627CS315.hw5"); //get all records from the database
    foreach( $rows as $row)
    {
      $fname = $row["FirstName"];
      $lname = $row["LastName"];
      $email = $row["EmailAddress"];
      echo "<tr><td>$fname</td><td>$lname</td><td>$email</td></tr>"; //print a table row with data information
        }    
      }

    ?>
  </table>
</body>

</html>
