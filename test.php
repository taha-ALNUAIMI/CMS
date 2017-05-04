<?php
$server="localhost";
$user="root";
$pass="";
$dbn="cms";
$mysqli= new mysqli($server,$user,$pass,$dbn);
$query="SELECT email FROM users WHERE email LIKE 'admin'";
$conn_user=$mysqli->query($query) or die('error_log(message)');
 while($row=$conn_user->fetch_assoc()) 
 {
echo $row['email']."    ".'<br>';	
}
	
?>
<!doctype html>
<html>
<body>
	<form method="POST">
	mail<input type="text" name="mail"  />
	pass<input type="text" name="pass"/>
	<input  type="submit" name="submit" value="search" id="del"><br>
	</form>
</body>
</html>




