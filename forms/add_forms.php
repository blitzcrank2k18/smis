<?php include '../includes/db.php' ?>

<?php 
$action = $_GET['action'];

if($action == 'subject'){

	$subj = $_POST['subject'];
	$desc = $_POST['desc'];

	
	if($query = mysqli_query($conn,"INSERT INTO subject_list (subject,description)VALUES('$subj','$desc')")){
		echo 'true';
	}else{
		echo "false";
	}
}

if($action == 'user'){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$utype = $_POST['utype'];

	
	if($query = mysqli_query($conn,"INSERT INTO users (fname,lname,username,password,user_type,status)VALUES('$fname','$lname','$uname','$pass','$utype','1')")){
		echo '<script>$("#suc_msg").show("SlideDown");
						var delay = 2000;
					setTimeout(function(){	window.location = "smis.php?request=users";   }, delay); </script>';
	}else{
		echo '<script>$("#err.msg").show("SlideDown");</script>';
	}
}

if($action == 'student_profile'){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$bday = $_POST['bday'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$cn = $_POST['cn'];
	$lrn = $_POST['lrn'];
	foreach ($_POST as $var => $value){
		$$var = $value;
	} 
$query = mysqli_query($conn,"INSERT INTO student_profile (firstname,lastname,midname,bday,gender,contact,lrn_no,status,date_added,pic,birthplace,guardian,guardian_contact,guardian_occupation,address,course_completed,e_school,e_sy,e_gen_ave)VALUES('$fname','$lname','$mname','$bday','$gender','$cn','$lrn','1',now(),'default.jpg','$birthplace','$guardian','$guardian_contact','$guardian_occupation','$address','$elementary_course','$e_school','$e_sy','$e_gen_ave')");
	if($query){
		echo "<script>
			$('#data_msg').modal('show');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=student_list';   }, delay);
		</script>";
	}else{
		/*echo "<script>alert('failed')</script>";*/
		echo $query;
	}
}

if($action == 'new_rec_trans'){

	foreach($_POST as $var => $value){
		$$var=$value;
	}
	
$query1 = mysqli_query($conn,"INSERT INTO student_sy_status (student_id,school,school_address,adviser,average,grade,section
	,sy_id,total_days,total_present,number_in_school,curriculum,advance_unit,lack_unit,classified_as,sy_status)
	VALUES('$id','$school','$school_address','$adviser','$ave','$grade','$sec','$sy_id','$Tdc','$Tp','$tns','$curriculum','$aunit'
		,'$lunit','$tbc','$sy_status')");
$last_id = mysqli_insert_id($conn);
$s_count = count($subj);
for($i = 0; $i < $s_count ;$i++){
	$one = $_POST['1g'];
	$two = $_POST['2g'];
	$three = $_POST['3g'];
	$four = $_POST['4g'];
$query2 = mysqli_query($conn,"INSERT INTO student_grade (sss_id,subject_id,1grading,2grading,3grading,4grading,final)Values('$last_id','$subj[$i]','$one[$i]','$two[$i]','$three[$i]','$four[$i]','$fg[$i]') ");
}
for($q = 0 ; $q < 12 ;$q++){
	$query3 = mysqli_query($conn,"INSERT INTO student_attendance (sss_id,month,days_classes,days_present)Values('$last_id','$month[$q]','$dc[$q]','$p[$q]') ");
}

	if($query1 && $query2 && $query3){
		include "../includes/msg_box.php";
		echo "<script>
			$('#data_msg').modal('show');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=academic_record&student_id=". $id. "&grade=".$grade."&form=record';   }, delay);
		</script>";
	}else{
		echo "<script>alert('failed')</script>";
	}
}
if($action == 'teacher'){

	foreach ($_POST as $var => $value) {
		$$var = $value;
	}

	
	if($query = mysqli_query($conn,"INSERT INTO teacher_list (name,grade,section,sy_id)VALUES('$name','$grade','$section','$sy')")){
		echo 'true';
	}else{
		echo "false";
	}
}
if($action == 'setting'){

	foreach ($_POST as $var => $value) {
		$$var = $value;
	}
	for($i = 0; $i < count($sid); $i++){
		$query = mysqli_query($conn,"INSERT INTO mr_and_ms (sss_id,sy_id)VALUES('$sid[$i]','$sy') ");
	}
	
	if($query){
		echo "true";
	}else{
		echo "false";
	}
}
if($action == 'enroll'){
	foreach($_POST as $var => $value){
		$$var = $value;
	}
	$month = array('June','July','August','September','October','November','December','January','Febuary','March','April','May');
	$query1 = mysqli_query($conn,"INSERT INTO student_sy_status (student_id,teacher_id,sy_id,school,school_address,status,grade,section,sy_status)VALUES
		('$student_id','$adviser','$sy','Efegenio Lizares National High School','Brgy. Efegenio Lizares, Talisay City','1','$grade','$section','$status')");
	$last_id = mysqli_insert_id($conn);
	for($i = 0; $i < 12; $i++){
		$query2=mysqli_query($conn,"INSERT INTO student_attendance (sss_id,month,days_classes,days_present)
		values('$last_id','$month[$i]','0','0') ");
	}
	if($query1 && $query2){
		echo '<div class="alert alert-success">Student successfully enrolled.</div>';
		echo "<script>setTimeout(function(){	window.location = 'smis.php?request=enroll_students';   }, 1500);</script>";
	}else{
		return false;
	}
}
if($action == 'promote'){
	if(isset($_POST['id'])){

	$id=$_POST['id'];
	$count = count($id);
	for($i =0; $i < $count;$i++){
		$query = mysqli_query($conn,"INSERT INTO promoted_students (sss_id)values('$id[$i]') ");
	}
	if($query){
		echo '<div class="alert alert-success"><i class="fa fa-checked"></i> Student/s successfully promoted.</div>';
		echo "<script>setTimeout(function(){	window.location.href='smis.php?request=student_promotion&status=1';   }, 1500);</script>";

	}
}else{
		echo '<div class="alert alert-warning"><i class="fa fa-warning"></i> You have to to select student to continue this action.</div>';

}
}
if($action == 'revoke'){
	if(isset($_POST['id'])){

	$id=$_POST['id'];
	$count = count($id);
	for($i =0;$i<$count;$i++){
		$query = mysqli_query($conn,"DELETE  From promoted_students where sss_id='$id[$i]' ");
	}
	if($query){
		echo '<div class="alert alert-success"><i class="fa fa-checked"></i> Student/s successfully removed from promoted list.</div>';
		echo "<script>setTimeout(function(){	window.location.href='smis.php?request=student_promotion&status=2';   }, 1500);</script>";

	}
	}else{
		echo '<div class="alert alert-warning"><i class="fa fa-warning"></i> You have to to select student to continue this action.</div>';

}
}
?>
