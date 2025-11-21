<form method="POST" action="">
    <label>First Name: <input type="text" name="fname"></label><br>
    <label>Last Name: <input type="text" name="lname"></label><br>
    <button type="submit">Submit</button>
</form>
<hr>

<?php
$conn = mysqli_connect("localhost","root","","class_db");

if (isset($_POST['fname']) && isset($_POST['lname'])) {//added to make sure the value exists to avoid errors
$first = $_POST['fname'];
$last = $_POST['lname'];

$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first','$last')";
mysqli_query($conn, $sql);
echo "Inserted!";
}
?>