<?php
		include('dbcon.php');
		include('session.php');
		
		$member_id = $_POST['member_id'];
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
		
		$conn->query("update members set 
		card_number = '$card_number',
		given_name ='$given_name',
		surname ='$surname',
		middlename ='$middlename',
		sex ='$sex',
		address ='$address',
		contact_no ='$contact_no',
		age ='$age',
		date_of_birth ='$date_of_birth',
		place_of_birth ='$place_of_birth',
		civil_status ='$civil_status',
		voters_id ='$voters_id',
		postal_code ='$postal_code',
		philhealth_membership ='$philhealth_membership',
		philhealth_number ='$philhealth_number',
		philhealth_enrollment_sponsor ='$philhealth_enrollment_sponsor',
		spouse_surname ='$spouse_surname',
		spouse_given_name ='$spouse_given_name',
		spouse_middlename ='$spouse_middlename',
		name_of_employer ='$name_of_employer',
		employment_status ='$employment_status',
		ave_income ='$ave_income'
		where member_id = '$member_id'
		")or die(mysql_error());
		$conn->query("insert into activity_log (username,date,action) values('$user_username',NOW(),'Update Member $given_name $surname')")or die (mysql_error());
		?>