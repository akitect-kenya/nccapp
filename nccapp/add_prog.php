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
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Add Program Coordinator</div>
                                <div class="muted pull-right">
									<a href="prog_user.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span4"></div>
								  <div class="span4">
								  <form method="post" id="add_coordinator">
											<input type="text" class="input-block-level"  name="firstname" placeholder="Firstname" required>
											<input type="text" class="input-block-level"  name="lastname" placeholder="Lastname" required>
											<input type="text" class="input-block-level"  name="username" placeholder="Username" required>
											<input type="text" class="input-block-level"  name="password" placeholder="Password" required>
											<textarea Placeholder="Program Coordinator In" class="my_message" name="pci"></textarea>

											<button data-placement="right" title="Click to Save" id="save" name="save" class="btn btn-success"><i class="icon-save icon-large"></i> Save</button>
                                						<script type="text/javascript">
														$(document).ready(function(){
															$('#save').tooltip('show');
															$('#save').tooltip('hide');
														});
														</script>
								</form>
								</div>
								  <div class="span4"></div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
								<script>
								jQuery(document).ready(function($){
									$("#add_coordinator").submit(function(e){
										e.preventDefault();
										var _this = $(e.target);
										var formData = $(this).serialize();
										$.ajax({
											type: "POST",
											url: "add_coordinator.php",
											data: formData,
											success: function(html){
												$.jGrowl("Program Coordinator Successfully  Added", { header: 'Program Coordinator Added' });
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