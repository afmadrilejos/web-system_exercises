<form method="POST" action="">
  <label>Email: <input type="email" name="email"></label><br>
  <button type="submit">Search</button>
</form> <!-- a simple html form to submit email -->

<?php
$conn = mysqli_connect("localhost","root","","class_db");

$email = $_POST['email']; //misspelled* correct spelling

$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);
?>