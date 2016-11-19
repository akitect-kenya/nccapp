<?php
		include('dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
		$resultFilms = $conn->prepare("select * from users where username = '$username' and password = '$password'")or die(mysql_error());
		$resultFilms->execute();
		$num_row = $resultFilms->rowcount();
		$row = $resultFilms->fetch();
		/* teacher */
		$query_teacher = $conn->prepare("SELECT * FROM program_coordinator WHERE username='$username' AND password='$password'")or die(mysql_error());
		$query_teacher->execute();	
		$num_row_teacher = $query_teacher->rowcount();
		$row_teahcer = $query_teacher->fetch();
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['user_id'];
		echo 'true_user';	
		$conn->query("insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error()); 
		}else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['program_coordinator_id'];
		echo 'true';
		$conn->query("insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row_teahcer['program_coordinator_id'].")")or die(mysql_error());
		 } else{ 
				echo 'false';
		}	
		?>