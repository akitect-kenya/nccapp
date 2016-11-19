<?php
include('dbcon.php');
include('session.php');
$get_id = $_GET['id'];

$mysqli->query("delete from dependents where dependent_id = '$get_id'")or die(mysql_error());
header('location:Add_dependents.php');
?>