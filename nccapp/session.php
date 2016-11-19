<?php
 session_start(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];

$user_query = $conn->query("select * from users where user_id = '$session_id'")or die(mysql_error());
$user_row = $user_query->fetch();
$user_username = $user_row['username'];
?>