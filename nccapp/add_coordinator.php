<?php
include('dbcon.php');
include('session.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$pci = $_POST['pci'];
$conn->query("insert into program_coordinator (firstname,lastname,username,password,program_coordinator_in) values ('$firstname','$lastname','$username','$password','$pci')")or die(mysql_error());
$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Program Coordinator $firstname $lastname')")or die (mysql_error());
?>
