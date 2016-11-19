	<?php include('dbcon.php'); ?>
	<form action="delete_member.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>
		<tr>
					<th>Surname</th>
					<th>Given Name</th>
					<th>Middlename</th>
					<th>Card Number</th>
					<th>Sex</th>
					<th>Age</th>
					<th>Permanent Address</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
		<?php
			$query = $conn->query("select * from members") or die(mysql_error());
			while ($row = $query->fetch()) {
			$id = $row['member_id'];
		?>
		<tr>
		<td><?php echo $row['surname']; ?></td> 
		<td><?php echo $row['given_name']; ?></td> 
		<td><?php echo $row['middlename']; ?></td> 
		<td><?php echo $row['card_number']; ?></td> 
		<td><?php echo $row['sex']; ?></td> 
		<td><?php echo $row['age']; ?></td> 
		<td width="300"><?php echo $row['address']; ?></td> 
		<td width="100">
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_member_prog.php<?php echo '?id='.$id; ?>" class="btn btn-warning"><i class="icon-search icon-large"></i> View</a>
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