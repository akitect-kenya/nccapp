<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
							<?php 
							$user_query = $conn->query("select * from program_coordinator")or die(mysql_error());
							$count = $user_query->rowcount();
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Program Coordinator List</div>
                                <div class="muted pull-right">Number of Coordinators:
									<span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_prog_user.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#prog_user_delete" id="delete"  class="btn btn-danger"><i class="icon-trash icon-large"></i> Delete</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#delete').tooltip('show');
															$('#delete').tooltip('hide');
														});
														</script>
									<div class="pull-right">
									<a data-placement="left" title="Click to Add Coordinator" id="add" href="add_prog.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Program Coordinator</a>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#add').tooltip('show');
															$('#add').tooltip('hide');
														});
														</script>
									</div>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Name</th>
												<th>Username</th>
												<th>Password</th>
												<th>Program Coordinator In</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = $conn->query("select * from program_coordinator")or die(mysql_error());
													while($row = $user_query->fetch()){
													$id = $row['program_coordinator_id'];
													?>
									
												<tr>
												<td width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
												<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['password']; ?></td>
												<td><?php echo $row['program_coordinator_in']; ?></td>									
												<td width="80">
												<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="edit_prog_user.php<?php echo '?id='.$id; ?>"   data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
																	<script type="text/javascript">
																	$(document).ready(function(){
																		$('#edit<?php echo $id; ?>').tooltip('show');
																		$('#edit<?php echo $id; ?>').tooltip('hide');
																	});
																	</script>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
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