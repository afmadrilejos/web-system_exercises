<?php //add ?id=3 on  the URL
$conn = mysqli_connect("localhost", "root", "", "class_db");

$id = $_GET['id']; //changed $_POST to $_GET

$sql = "SELECT * FROM students WHERE student_id = $id"; //changed id to student_id
$res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);

echo $r['first_name'];
?>