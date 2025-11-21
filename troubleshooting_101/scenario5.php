<?php
$conn = mysqli_connect("localhost","root","","class_db");

$email = isset($_POST['email']) ? $_POST['email'] : null; // misspelled' correct spelling

$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);
?>