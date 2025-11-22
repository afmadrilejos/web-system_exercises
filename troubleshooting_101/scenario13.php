<form action="scenario13.php" method="POST">
  <input type="text" name="id" placeholder="Student ID">
  <input type="email" name="email" placeholder="New Email">
  <button type="submit">Update</button>
</form> <!-- a simple html form to update email -->
<hr>
<?php
$conn = mysqli_connect("localhost","root","","class_db"); //it is added to connect php to the db
$newEmail = $_POST['email'];
$id = $_POST['id']; //we identify the specific student for the email we want to update

$sql = "UPDATE students SET email='$newEmail' WHERE student_id=$id"; //adding WHERE student_id=$id to identify the specific student for the email we want to update
?>
