	<?php include('dbcon.php'); ?>
	<form action="delete_member.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	<a href="add_member.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Add Employee</a>
	</div>
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>
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
		$query = $conn->query("select * from members");
		while ($row = $query->fetch()) {
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