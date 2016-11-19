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
		$member_query = $mysqli->query("select *from members order by member_id DESC")or die(mysql_error());
		$member_row = $member_query->fetch_array();
		$member_id = $member_row['member_id'];
		$query = $mysqli->query("select * from dependents where member_id = '$member_id'") or die(mysql_error());
		while ($row = $query->fetch_array()) {
		$id = $row['dependent_id'];
		?>
		<tr>
		<td><?php echo $row['dependent_surname']; ?></td> 
		<td><?php echo $row['dependent_givenname']; ?></td> 
		<td><?php echo $row['dependent_middlename']; ?></td> 
		<td><?php echo $row['birthdate']; ?></td> 
		<td><?php echo $row['relationship']; ?></td> 
		<td class="empty" width=""><a href="delete_dependent.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Delete</a></td>

	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
				