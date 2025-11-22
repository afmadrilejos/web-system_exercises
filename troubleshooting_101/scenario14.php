<form action="scenario14.php" method="POST">
  <input type="text" name="first_name" placeholder="First Name">
  <input type="text" name="last_name" placeholder="Last Name">
  <input type="email" name="email" placeholder="Email">
  <button type="submit">Insert</button>
</form> <!-- a simple html form to insert full name and email -->
<?php
$data = $_POST;

$sql = "INSERT INTO students (first_name, last_name, email)
VALUES ('{$data['first_name']}, '{$data['last_name']}', '{$data['email']}')"; //we need to use a string '' to prevent error because fname is a label and not a variable, while this {} for the MYSQL knows that its a values 
?>