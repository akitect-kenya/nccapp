<?php
include('dbcon.php');
include('session.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = $conn->query("select * from users where user_id ='$id[$i]'")or die(mysql_error());
	$row = $query->fetch();
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Delete  User $firstname $lastname')")or die (mysql_error());
	$conn->query("DELETE FROM users where user_id='$id[$i]'");
}
header("location: admin_user.php");
}
?>