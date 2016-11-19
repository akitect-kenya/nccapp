<?php
include('dbcon.php');
include('session.php');
$get_id = $_GET['id'];
$member_id = $_GET['member_id'];

$conn->query("delete from dependents where dependent_id = '$member_id'")or die(mysql_error());
?>
<script>
	window.location = 'add_dep.php<?php echo '?id='.$get_id;  ?>';
</script>