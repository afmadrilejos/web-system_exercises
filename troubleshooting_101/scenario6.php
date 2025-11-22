<?php //adding ?id=2 on the URL since we are using GET which retrieves the data from the URL to successfully delete a data
$conn = mysqli_connect("localhost","root","","class_db");

$id = intval($_GET['id']);// intval is used to makes sure that only numbers get through and not cause more errors

$sql = "DELETE FROM students WHERE student_id = $id"; //changed id to student_id because it is the correct name on db; changed . $_GET['id'] with $id for the SQL to read it easier
mysqli_query($conn, $sql);
?>