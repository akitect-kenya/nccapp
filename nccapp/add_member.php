<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add Employee</div>
                                <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="members.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>                          
						    </div>
                            <div class="block-content collapse in">						
						<form id="add_member" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
											<input type="text" class="input-block-level"  name="card_number" placeholder="Card Number" required>
											<input type="text" class="input-block-level"  name="surname"     placeholder="Surname"     required>
											<input type="text" class="input-block-level"  name="given_name"  placeholder="Given Name"  required>
											<input type="text" class="input-block-level"  name="middlename"  placeholder="Middlename"  required>
											<label>Sex:</label>
												<select name="sex" class="span5" required>
													<option></option>
													<option>Male</option>
													<option>Female</option>
												</select>
											<textarea Placeholder="Permanent Address" name="address" class="my_message" required></textarea>
											<input type="text" class="input-block-level"  name="contact_no" placeholder="Tel/Mobile Number">
										</div>
						<!-- span 4 -->				
						<!-- span 4 -->				
						<div class="span4">

											<input type="number"  class="input-block-level span3"  name="age" placeholder="Age" min="1" max="100" required>
											<input type="text" class="input-block-level"  name="date_of_birth" placeholder="Date of Birth">
											<input type="text" class="input-block-level"  name="place_of_birth" placeholder="Place of Birth">
											<input type="text" class="input-block-level"  name="voters_id" placeholder="Voters ID">
											<input type="text" class="input-block-level"  name="postal_code" placeholder="Postal Code">		
											<input type="text" class="input-block-level"  name="philhealth_membership" placeholder="Philhealth Membership">
											<input type="text" class="input-block-level"  name="philhealth_number" placeholder="Philhealth Number">
											<input type="text" class="input-block-level"  name="philhealth_enrollment_sponsor" placeholder="Philhealth Enrollment Sponsor">
											<button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Save and Proceed</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
											<label>Civil Status:</label>
											<select name="civil_status" required>
												<option></option>
												<option>Single</option>
												<option>Married</option>
												<option>Widowed</option>
												<option>Separated</option>
												<option>Divorced</option>
											</select>
										<label>If Married: Name of Spouse</label>		
										<input type="text" class="input-block-level"  name="spouse_surname" placeholder="Surname">
										<input type="text" class="input-block-level"  name="spouse_given_name" placeholder="Given Name">
										<input type="text" class="input-block-level"  name="spouse_middlename" placeholder="Middlename">
										<label>If Employed:</label>		
										<input type="text" class="input-block-level"  name="name_of_employer" placeholder="Name of Employer">
											<label>Employment Status:</label>
											<select name="employment_status">
												<option></option>
												<option>Regular</option>
												<option>Contractual</option>
												<option>Seasonal</option>
											</select>
											<div class="input-prepend">
											<span class="add-on">P</span>
											<input name="ave_income" class="span" class="input-block-level span8" id="prependedInput" type="text" placeholder="Average Monthly Income">
											</div>
						</div>
						<!--end span 4 -->
						</form>						
			<script>
			jQuery(document).ready(function($){
				$("#add_member").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_member.php",
						data: formData,
						success: function(html){
							$.jGrowl("Member Successfully  Added", { header: 'Member Added' });
							window.location = 'Add_dependents.php';  
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