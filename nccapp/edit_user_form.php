   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add user</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Edit User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = $conn->query("select * from users where user_id = '$get_id'")or die(mysql_error());
								$row = $query->fetch();
								?>
								<form method="post" id="update_user">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['user_id']; ?>" name="user_id" id="focusedInput" type="hidden"  required>
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="text" placeholder = "Password" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i> Update</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
							<script>
			jQuery(document).ready(function($){
				$("#update_user").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_user.php",
						data: formData,
						success: function(html){
							$.jGrowl("User Successfully  Updated", { header: 'User Updated' });
							window.location = 'admin_user.php';  
						}
					});
				});
			});
			</script>
					
		