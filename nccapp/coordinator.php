<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_prog.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="">
					 <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query = $conn->query("select * from members") or die(mysql_error());
							$count = $query->rowcount();
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> NOCHP Member List</div>
                                <div class="muted pull-right">
									Number of Members: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('members_table_prog.php'); ?>
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