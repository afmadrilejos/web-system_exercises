<?php
$conn = mysqli_connect("localhost","root","","class_db");

$age = $_GET['age'];

$sql = "SELECT * FROM students WHERE age = '$age'"; //we need to use a string '' to prevent error because $age is a label and not a variable
$res = mysqli_query($conn, $sql);
?>