<?php include('header.php'); ?>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "ncc";
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//magic quotes logic
if (get_magic_quotes_gpc())
{
function stripslashes_deep($value)
{
    $value = is_array($value) ?
    array_map('stripslashes_deep', $value) :
    stripslashes($value);
    return $value;
}
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}
?>
                <div class="span12" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
		
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> NOCHP Member List</div>
                                <div class="muted pull-right">
				
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">NOCHP Member List</h2>

	<form action="delete_member.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onClick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	<a href="add_member.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Member</a>
			<script type="text/javascript">
/* 			$(document).ready(function(){
				$('#add').tooltip('show');
				$('#add').tooltip('hide');
			}); */
			</script>
			<script type="text/javascript">
/* 			$(document).ready(function(){
				$('#print').tooltip('show');
				$('#print').tooltip('hide');
			}); */
			</script>
	</div>
	
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>

			<script type="text/javascript">
/* 			$(document).ready(function(){
				$('#delete').tooltip('show');
				$('#delete').tooltip('hide');
			}); */
			</script>


	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th>Surname</th>
					<th>Given Name</th>
					<th>Middlename</th>
					<th>Sex</th>
					<th>Card Number</th>
					<th class="empty"></th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php
	$resultFilms = $mysqli->query("select * from members")or die(mysql_error());
	$count = $resultFilms->num_rows;
	echo $count;
	while($row = $resultFilms->fetch_array()){
		$id = $row['member_id'];
		?>
		<tr>
		<td><?php echo $row['surname']; ?></td> 
		<td><?php echo $row['given_name']; ?></td> 
		<td><?php echo $row['middlename']; ?></td> 
		<td><?php echo $row['sex']; ?></td> 
		<td><?php echo $row['card_number']; ?></td> 
		<td class="empty" width="30"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
		<td class="empty" width="160">
		<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> Edit</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_member.php<?php echo '?id='.$id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
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