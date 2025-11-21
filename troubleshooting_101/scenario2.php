<form method="POST" action="">
    <label>First Name: <input type="text" name="fname"></label><br>
    <button type="submit">Search</button>
</form> a form to locate the name
<hr>
<?php
$conn = mysqli_connect("localhost","root","","class_db");

$fname =  isset($_POST['id']) ? $_POST['id'] : null;
//it makes sure the value exists to avoid errors

$sql = "SELECT * FROM students WHERE first_name = '$fname'"; //we need to use a string ''
$res = mysqli_query($conn, $sql);
?>