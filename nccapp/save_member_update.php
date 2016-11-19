		<?php
		include('dbcon.php');
		include('session.php');
		
		$given_name = $_POST['given_name'];
		$surname = $_POST['surname'];
		$middlename = $_POST['middlename'];
		$date_of_birth = $_POST['date_of_birth'];
		$relationship = $_POST['relationship'];

		$get_id = $_POST['get_id'];
		
		$conn->query("insert into dependents (dependent_givenname,dependent_surname,dependent_middlename,birthdate,relationship,member_id)
						values ('$given_name','$surname','$middlename','$date_of_birth','$relationship','$get_id')")or die(mysql_error());
		$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Dependents $given_name $surname')")or die (mysql_error());
	
		?>