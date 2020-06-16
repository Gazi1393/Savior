<?php
if(isset($_POST["submit"])){
$con=new mysqli("localhost","root","","why");
 
$name = $con->real_escape_string($_POST['name']);
$con->query("INSERT INTO test1 (`ID`,`Name`) VALUES (NULL,'$name')");
 
}
?>
<html>
<body>
<div class="container">
<form action="index2.php" method="POST">
<input type="text" class="form-control" name="name" required/><br/>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>