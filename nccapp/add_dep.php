<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php  $get_id = $_GET['id']; ?>
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
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add Dependents</div>
                                <div class="muted pull-right">
								<a id="return" class="btn btn-success" data-placement="left" title="Click to Return" href="members.php"><i class="icon-arrow-right icon-large"></i> Save and Finish</a>
								<a id=""  data-placement="left"  href="edit_member.php<?php echo '?id='.$get_id; ?>"><i class="icon-arrow-left icon-large"></i> Back</a></div>
															                         
						    </div>
                            <div class="block-content collapse in">						
						<form id="add_dependents" class="form-signin" method="post">		
						<!-- span 4 -->		
						
						<div class="span4">
											<input type="hidden" class="input-block-level"  name="get_id" value="<?php echo $get_id; ?>">
											<input type="text" class="input-block-level"  name="given_name" placeholder="Given Name">
											<input type="text" class="input-block-level"  name="date_of_birth" placeholder="Date of Birth">
											
						</div>
						<div class="span4">
											<input type="text" class="input-block-level"  name="surname" placeholder="Surname">
											<input type="text" class="input-block-level"  name="relationship" placeholder="Relationship To Member">
											<button class="btn btn-info" name="save"><i class="icon-plus-sign icon-large"></i> Add</button>
						</div>
						<div class="span4">
											<input type="text" class="input-block-level"  name="middlename" placeholder="Middlename">
											
						</div>
						</form>
				<div class="span12"><hr></div>
					
				<div id="depDIV">
				<?php include('dependents_table_add.php'); ?>
				</div>
					
						
	
			<script>
			jQuery(document).ready(function($){
				$("#add_dependents").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_member_update.php",
						data: formData,
						success: function(html){
							$.jGrowl("Dependent Successfully  Added", { header: 'Dependent Added' });
/* 							$('#depDIV').load('dependents_table_add.php');
							$(_this).find(":input").val(''); */
							window.location="add_dep.php<?php echo '?id='.$get_id; ?>";
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