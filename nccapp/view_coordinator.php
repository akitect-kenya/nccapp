<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_prog.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="members.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = mysql_query("select * from members where member_id = '$get_id'")or die(mysql_error());
						$row = mysql_fetch_array($query);
						?>
						<div class="alert alert-success">Name: <strong><?php echo $row['surname']." ".$row['given_name']." ".$row['middlename']; ?></strong></div>
						<div class="span6">
						Card Number: <strong><?php echo $row['card_number']; ?></strong><hr>
						Permanent Address: <strong><?php echo $row['address']; ?></strong><hr>
						Sex: <strong><?php echo $row['sex']; ?></strong><hr>
						Tel/Mobile Number: <strong><?php echo $row['contact_no']; ?></strong><hr>
						Age: <strong><?php echo $row['age']; ?></strong><hr>
						Date of Birth: <strong><?php echo $row['place_of_birth']; ?></strong><hr>
						Place of Birth: <strong><?php echo $row['date_of_birth']; ?></strong><hr>
						Voters ID: <strong><?php echo $row['voters_id']; ?></strong><hr>
						Postal Code: <strong><?php echo $row['postal_code']; ?></strong><hr>
						Philhealth Membership: <strong><?php echo $row['philhealth_membership']; ?></strong><hr>
						Philhealth Number: <strong><?php echo $row['philhealth_number']; ?></strong><hr>
						Philhealth Enrollment Sponsor: <strong><?php echo $row['philhealth_enrollment_sponsor']; ?></strong><hr>
						</div>
						
												<div class="span5">
						Civil Status: <strong><?php echo $row['civil_status']; ?></strong><hr>
						If Married: Name of Spouse:<hr>
						Spouse Surname: <strong><?php echo $row['spouse_surname']; ?></strong><hr>
						Spouse Given Name: <strong><?php echo $row['spouse_given_name']; ?></strong><hr>
						Spouse Middlename: <strong><?php echo $row['spouse_middlename']; ?></strong><hr>
						Name of Employer: <strong><?php echo $row['name_of_employer']; ?></strong><hr>
						Employment Status: <strong><?php echo $row['employment_status']; ?></strong><hr>
						Average Monthly Income: <strong><?php echo $row['ave_income']; ?></strong><hr>
						</div>

							

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>