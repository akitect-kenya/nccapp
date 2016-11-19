	<?php
	include('dbcon.php');
	include('session.php');
	$program_coordinator_id = $_POST['program_coordinator_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pci = $_POST['pci'];
	$conn->query("update program_coordinator set
	firstname = '$firstname',
	lastname = '$lastname',
	username = '$username',
	password = '$password',
	program_coordinator_in = '$pci'
	where program_coordinator_id = '$program_coordinator_id'
	")or die(mysql_error());
	$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Edit Program Coordinator $firstname $lastname')")or die (mysql_error());
	?>

