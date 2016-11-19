<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit NOCHP Member</div>
                                <div class="muted pull-right"><a href="members.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = $conn->query("select * from members where member_id = '$get_id'")or die(mysql_error());
						$row = $query->fetch();
						?>
						<form id="update_member" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
											<input type="hidden" value="<?php echo $row['member_id']; ?>" class="input-block-level"  name="member_id" placeholder="Card Number" required>
											<input type="text" value="<?php echo $row['card_number']; ?>" class="input-block-level"  name="card_number" placeholder="Card Number" required>
											<input type="text" value="<?php echo $row['surname']; ?>" class="input-block-level"  name="surname"     placeholder="Surname"     required>
											<input type="text" value="<?php echo $row['given_name']; ?>" class="input-block-level"  name="given_name"  placeholder="Given Name"  required>
											<input type="text" value="<?php echo $row['middlename']; ?>" class="input-block-level"  name="middlename"  placeholder="Middlename"  required>
											<label>Sex:</label>
												<select name="sex" class="span5" required>
													<option><?php echo $row['sex']; ?></option>
													<option>Male</option>
													<option>Female</option>
												</select>
											<textarea Placeholder="Permanent Address" name="address" class="my_message"><?php echo $row['address']; ?></textarea>
											<input type="text" value="<?php echo $row['contact_no']; ?>" class="input-block-level"  name="contact_no" placeholder="Tel/Mobile Number">
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">
											<input type="text" value="<?php echo $row['age']; ?>" class="input-block-level span2"  name="age" placeholder="Age">
											<input type="text" value="<?php echo $row['date_of_birth']; ?>" class="input-block-level"  name="date_of_birth" placeholder="Date of Birth">
											<input type="text" value="<?php echo $row['place_of_birth']; ?>" class="input-block-level"  name="place_of_birth" placeholder="Place of Birth">
											<input type="text" value="<?php echo $row['voters_id']; ?>" class="input-block-level"  name="voters_id" placeholder="Voters ID">
											<input type="text" value="<?php echo $row['postal_code']; ?>" class="input-block-level"  name="postal_code" placeholder="Postal Code">		
											<input type="text" value="<?php echo $row['philhealth_membership']; ?>" class="input-block-level"  name="philhealth_membership" placeholder="Philhealth Membership">
											<input type="text" value="<?php echo $row['philhealth_number']; ?>" class="input-block-level"  name="philhealth_number" placeholder="Philhealth Number">
											<input type="text" value="<?php echo $row['philhealth_enrollment_sponsor']; ?>" class="input-block-level"  name="philhealth_enrollment_sponsor" placeholder="Philhealth Enrollment Sponsor">
											<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Update</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
											<label>Civil Status:</label>
											<select name="civil_status" required>
												<option><?php echo $row['civil_status']; ?></option>
												<option>Single</option>
												<option>Married</option>
												<option>Widowed</option>
												<option>Separated</option>
												<option>Divorced</option>
											</select>
										<label>If Married: Name of Spouse</label>		
										<input type="text" value="<?php echo $row['spouse_surname']; ?>" class="input-block-level"  name="spouse_surname" placeholder="Surname">
										<input type="text" value="<?php echo $row['spouse_given_name']; ?>" class="input-block-level"  name="spouse_given_name" placeholder="Given Name">
										<input type="text" value="<?php echo $row['spouse_middlename']; ?>" class="input-block-level"  name="spouse_middlename" placeholder="Middlename">
										<label>If Employed:</label>		
										<input value="<?php echo $row['name_of_employer']; ?>" type="text" class="input-block-level"  name="name_of_employer" placeholder="Name of Employer">
											<label>Employment Status:</label>
											<select name="employment_status">
												<option><?php echo $row['employment_status']; ?></option>
												<option>Regular</option>
												<option>Contractual</option>
												<option>Seasonal</option>
											</select>
											<div class="input-prepend">
											<span class="add-on">P</span>
											<input value="<?php echo $row['ave_income']; ?>" name="ave_income" class="span" class="input-block-level span8" id="prependedInput" type="text" placeholder="Average Monthly Income">
											</div>
						</div>
						<!--end span 4 -->
						<div class="span12"><hr></div>
						DEPENDENTS
						<div class="pull-right">
								<a href="add_dep.php<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-plus"></i> Add Dependents</a>
						</div>
						<div class="span12"><hr></div>
							<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
									<thead>
									<tr>
												<th>Surname</th>
												<th>Given Name</th>
												<th>Middlename</th>
												<th>Birthdate</th>
												<th>Relationship to Member</th>
												<th class="empty"></th>
									</tr>
									</thead>
							<tbody>
							<?php
								$query = $conn->query("select * from dependents where member_id = '$get_id'") or die(mysql_error());
								while ($row = $query->fetch()) {
								$id = $row['dependent_id'];
								?>
								<tr>
									<td><?php echo $row['dependent_surname']; ?></td> 
									<td><?php echo $row['dependent_givenname']; ?></td> 
									<td><?php echo $row['dependent_middlename']; ?></td> 
									<td><?php echo $row['birthdate']; ?></td> 
									<td><?php echo $row['relationship']; ?></td> 
									<td class="empty" width=""><a href="delete_dependent.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Delete</a></td>
								</tr>
								<?php } ?>    
							</tbody>
							</table>
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#update_member").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_member.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Member Updated' });
													window.location = 'members.php';
												}
											});
										});
									});
								</script>
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