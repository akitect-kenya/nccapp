<?php
	include('dbcon.php');
	include('session.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$query = $conn->query("select * from users where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ")or die(mysql_error());
$conn->query("insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')")or die(mysql_error());
$conn->query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add User $username')")or die(mysql_error());
?>