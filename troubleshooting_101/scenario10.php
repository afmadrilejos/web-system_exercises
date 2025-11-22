<form method="POST" action=""> 
    <input type="text" name="age" placeholder="Enter age">
    <button type="submit">Search</button>
</form> <!-- a simple html form to search age -->
<hr>
<?php
$age = $_POST['age'] ?? '';
$sql = "SELECT * FROM students WHERE age = $age"; //correct spelling of variable
?>