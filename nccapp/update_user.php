<?php		
include('dbcon.php');
include('session.php');
$user_id = $_POST['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$conn->query("update users set username = '$username'  , firstname = '$firstname' , lastname = '$lastname' , password = '$password' where user_id = '$user_id' ")or die(mysql_error());
$conn->query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit User $username')")or die(mysql_error());
?>
