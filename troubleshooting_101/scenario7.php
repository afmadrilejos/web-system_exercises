<form action="scenario7.php" method="POST">
  <label>Student ID: <input type="text" name="id"></label><br>
  <label> New Email: <input type="email" name="email"></label><br>
  <button type="submit">Update</button>
</form> <!-- a simple html form to update a student id and email -->

<?php
$conn = mysqli_connect("localhost","root","","class_db");

$id = $_POST['id']; //$_POST is used because we're changing datas
$email = $_POST['email'];

$sql = "UPDATE students SET email='$email' WHERE student_id=$id";

$res = mysqli_query($conn, $sql);

if ($res) { //this checks if the update was successful and notifies if not
    echo "Updated!";
} else {
    echo "Error updating: " . mysqli_error($conn);
}
?>