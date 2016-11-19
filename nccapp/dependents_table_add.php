	<?php include('dbcon.php'); ?>
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
		<td class="empty" width=""><a href="delete_dependent_add.php<?php echo '?id='.$get_id; ?>&<?php echo 'member_id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Delete</a></td>

	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
				