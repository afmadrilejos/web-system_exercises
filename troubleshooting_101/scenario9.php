<?php
$id = isset($_GET['id']) ? $_GET['id'] : null; //changed $_POST to $_GET since we're not changing any data; make sure the value exists
echo "Student ID: " . $id;
?>
<a href="scenario9.php?id=3">View Student</a>