<?php
$id = isset($_GET['id']) ? $_GET['id'] : null; //change $_POST to $_GET, and make sure the value exists
echo "Student ID: " . $id;

?>
<a href="scenario9.php?id=3">View Student</a>