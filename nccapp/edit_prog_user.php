<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_prog_user.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit Program Coordinator</div>
                                <div class="muted pull-right">
									<a href="prog_user.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span4"></div>
								<?php
								$query = $conn->query("select * from program_coordinator where program_coordinator_id = '$get_id'")or die(mysql_error());
								$row = $query->fetch();
								?>
								  <div class="span4">
								  <form method="post" id="update_coordinator">
												<label>Firstname:</label>
											<input type="hidden" class="input-block-level" value="<?php echo $row['program_coordinator_id']; ?>"  name="program_coordinator_id" placeholder="Firstname" required>
											<input type="text" class="input-block-level" value="<?php echo $row['firstname']; ?>"  name="firstname" placeholder="Firstname" required>
												<label>Lastname:</label>
											<input type="text" class="input-block-level" value="<?php echo $row['lastname']; ?>" name="lastname" placeholder="Lastname" required>
												<label>Username:</label>
											<input type="text" class="input-block-level" value="<?php echo $row['username']; ?>" name="username" placeholder="Username" required>
												<label>Passsword:</label>
											<input type="text" class="input-block-level"  name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required>
												<label>Program Coordinator In:</label>		
											<textarea Placeholder="Program Coordinator In" class="my_message" name="pci"><?php echo $row['program_coordinator_in']; ?></textarea>

											<button data-placement="right" title="Click to Update" id="update" name="save" class="btn btn-success"><i class="icon-save icon-large"></i> Update	</button>
                                						<script type="text/javascript">
														$(document).ready(function(){
															$('#update').tooltip('show');
															$('#update').tooltip('hide');
														});
														</script>
								</form>
								</div>
								  <div class="span4">
					
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
							<script>
							jQuery(document).ready(function($){
								$("#update_coordinator").submit(function(e){
									e.preventDefault();
									var _this = $(e.target);
									var formData = $(this).serialize();
									$.ajax({
										type: "POST",
										url: "update_coordinator.php",
										data: formData,
										success: function(html){
											$.jGrowl("Program Coordinator Successfully  Updated", { header: 'Program Coordinator Updated' });
											window.location = 'prog_user.php';
										}
									});
								});
							});
							</script>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>