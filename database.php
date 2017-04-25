<?php
$server="localhost";
$user="root";
$pass="";
$dbn="cms";
$mysqli= new mysqli($server,$user,$pass,$dbn);
$query="SELECT * FROM articles";
$conn=$mysqli->query($query) or die('error_log(message)');
$user= new mysqli($server,$user,$pass,$dbn);
$query="SELECT * FROM users";
$conn_user=$mysqli->query($query) or die('error_log(message)');


?>