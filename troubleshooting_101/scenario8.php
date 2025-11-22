<?php 
$conn = mysqli_connect("localhost","root","","class_db");

$res = mysqli_query($conn,"SELECT * FROM students");

while ($row = mysqli_fetch_assoc($res)) { //put in whilein order for the loop condition to fetch all rows of emailinstead of just one row

echo $row['email'] . "<br>";
}
?>