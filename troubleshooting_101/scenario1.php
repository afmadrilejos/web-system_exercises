<?php //add ?id=3 on  the URL for the result to show since we are using GET which retrieves the data from the URL
$conn = mysqli_connect("localhost", "root", "", "class_db");

$id = $_GET['id']; //changed $_POST to $_GET since we're not changing any data

$sql = "SELECT * FROM students WHERE student_id = $id"; //changed id to student_id because it is the correct name on db
$res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);

echo $r['first_name'];
?>