
		
		<?php
		include('dbcon.php');
		include('session.php');
		
		$card_number = $_POST['card_number'];
		$given_name = $_POST['given_name'];
		$surname = $_POST['surname'];
		$middlename = $_POST['middlename'];
		$sex = $_POST['sex'];
		$address = $_POST['address'];
		$contact_no = $_POST['contact_no'];
		$age = $_POST['age'];
		$date_of_birth = $_POST['date_of_birth'];
		$place_of_birth = $_POST['place_of_birth'];
		$civil_status = $_POST['civil_status'];
		$voters_id = $_POST['voters_id'];
		$postal_code = $_POST['postal_code'];
		$philhealth_membership = $_POST['philhealth_membership'];
		$philhealth_number = $_POST['philhealth_number'];
		$philhealth_enrollment_sponsor = $_POST['philhealth_enrollment_sponsor'];
		$spouse_surname = $_POST['spouse_surname'];
		$spouse_given_name = $_POST['spouse_given_name'];
		$spouse_middlename = $_POST['spouse_middlename'];
		$name_of_employer = $_POST['name_of_employer'];
		$employment_status = $_POST['employment_status'];
		$ave_income = $_POST['ave_income'];
		
		$conn->query("insert into members
			   (card_number,given_name,surname,middlename,sex,address,contact_no,age,date_of_birth,place_of_birth,civil_status,voters_id,postal_code,
			   philhealth_membership,philhealth_number,philhealth_enrollment_sponsor,spouse_surname,
			   spouse_given_name,spouse_middlename,name_of_employer,employment_status,ave_income) 
		values ('$card_number','$given_name','$surname','$middlename','$sex','$address','$contact_no','$age','$date_of_birth','$place_of_birth','$civil_status','$voters_id','$postal_code',
		'$philhealth_membership','$philhealth_number','$philhealth_enrollment_sponsor',
		'$spouse_surname','$spouse_given_name','$spouse_middlename','$name_of_employer','$employment_status','$ave_income')")or die(mysql_error());
		
		$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Member $given_name $surname')")or die (mysql_error());
	
		?>