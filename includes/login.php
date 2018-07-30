<?php
	
	session_start();
	
	$errmsg_arr = array();
	
	$errflag = false;
	
	include('db.php');
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	

	$query = mysqli_query($conn,"SELECT *,CONCAT(fname,', ', lname) as name FROM users where username='$user' and password='$pass' and status='1'");
	$count = mysqli_num_rows($query);
	while($row = mysqli_fetch_assoc($query)){
		if($count > 0) {
			session_regenerate_id();

			$_SESSION['ID'] = $row['user_id'];
			$_SESSION['NAME'] = $row['name'];
			echo "true";
		}
	
	}

		
?>