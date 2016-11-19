<?php
		include('dbcon.php');
		include('session.php');
		
		$given_name = $_POST['given_name'];
		$surname = $_POST['surname'];
		$middlename = $_POST['middlename'];
		$date_of_birth = $_POST['date_of_birth'];
		$relationship = $_POST['relationship'];
		
		$query = $mysqli->query("select * from members order by member_id DESC")or die(mysql_error());
		$row = $query->fetch_array();
		$member_id = $row['member_id'];
		
		$mysqli->query("insert into dependents (dependent_givenname,dependent_surname,dependent_middlename,birthdate,relationship,member_id)
						values ('$given_name','$surname','$middlename','$date_of_birth','$relationship','$member_id')")or die(mysql_error());
		$mysqli->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Dependents $given_name $surname')")or die (mysql_error());
	
		?>