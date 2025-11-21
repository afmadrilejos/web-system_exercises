<?php
?>
<form method="POST" action="">
    <input type="text" name="age" placeholder="Enter age">
    <button type="submit">Search</button>
</form>
<hr>
<?php
$age = $_POST['age'] ?? '';
$sql = "SELECT * FROM students WHERE age = $age"; //replace wrong variable name to this
?>