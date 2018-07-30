<?php
session_start();
include '../includes/db.php';

$action = $_GET['action'];


if($action == 'subject'){

	$id = $_POST['id'];
	$subject = $_POST['subject'];
	$desc = $_POST['desc'];

	
	if($query = mysqli_query($conn,"UPDATE subject_list SET subject = '$subject',
													description = '$desc' where subject_id = '$id' ")){
		echo '<div class="alert alert-success msg"><i class="fa fa-check"></i> Data successfully updated. </div>
	<script>$(".msg").show("SlideDown");
	setTimeout(function(){ window.location.href = "smis.php?request=subject_list"; }, 1500)
	</script>';
	}else{
		echo "<script>alert('updating data failed!.')</script>";
	}
}
if($action == 'teacher'){

	foreach ($_POST as $var => $value) {
		$$var = $value;
	}

	
	if($query = mysqli_query($conn,"UPDATE teacher_list SET name = '$name',
															grade = '$grade',
															section = '$section' where teacher_id = '$id' ")){
		echo '<div class="alert alert-success msg"><i class="fa fa-check"></i> Data successfully updated. </div>
	<script>$(".msg").show("SlideDown");
	setTimeout(function(){ window.location.href = "smis.php?request=teacher_list"; }, 1500)
	</script>';
	}else{
		echo "<script>alert('updating data failed!.')</script>";
	}
}
if($action == 'del_teacher'){

	
	if($query = mysqli_query($conn,"DELETE FROM teacher_list where teacher_id = '".$_POST['id']."' ")){
		return true;
	}else{
		return false;
	}
}
if($action == 'del_setting'){

	
	if($query = mysqli_query($conn,"DELETE FROM mr_and_ms where sss_id = '".$_POST['id']."' ")){
		return true;
	}else{
		return false;
	}
}
if($action == 'user'){

	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$utype = $_POST['utype'];
	$status = $_POST['status'];

	
	if($query = mysqli_query($conn,"UPDATE users SET fname = '$fname',
													lname = '$lname',
													username = '$uname',
													password = '$pass',
													user_type = '$utype',
													status = '$status' where user_id = '$id' ")){
		echo '<script>$(".suc_msg").show("SlideDown");
						var delay = 2000;
					setTimeout(function(){	window.location = "smis.php?request=users";   }, delay); </script>';
	}else{
		echo '<script>$(".err_msg").show("SlideDown");</script>';
	}
}


if($action == 'sy'){

	$id = $_POST['id'];
	$sy = $_POST['sy'];
	$status = $_POST['status'];

	mysqli_query($conn,"UPDATE school_year set status='2' ");
	if($query = mysqli_query($conn,"UPDATE school_year SET sy = '$sy',
													status = '$status' where sy_id = '$id' ")){
		echo '<div class="alert alert-success msg"><i class="fa fa-check"></i> Data successfully updated. </div>
	<script>$(".msg").show("SlideDown");
	setTimeout(function(){ window.location.href = "smis.php?request=sy"; }, 1500)
	</script>';
	}else{
		echo "<script>alert('updating data failed!.')</script>";
	}
}
if($action == 'update_record'){

	$id = $_POST['id'];
	$sid = $_POST['sid'];
	
	foreach($_POST as $var => $value){
		$$var= $value;
	}
	
$query1 = mysqli_query($conn,"UPDATE student_sy_status SET grade = '$grade',
															section = '$sec',
															average = '$ave',
															teacher_id = '$adviser',
															advance_unit = '$advance',
															lack_unit = '$lack',
															total_days = '$Tdc',
															total_present = '$Tp',
															sy_id = '$sy' where sss_id = '$id' ");
	if(isset($_POST['subj'])){
	$subj = $_POST['subj'];
	$one = $_POST['1g'];
	$two = $_POST['2g'];
	$three = $_POST['3g'];
	$four = $_POST['4g'];
	$fg = $_POST['fg'];
	$s_count = count($subj);

for($i = 0; $i < $s_count ;$i++){
$query2 = mysqli_query($conn,"INSERT INTO student_grade (sss_id,subject_id,1grading,2grading,3grading,4grading,final)Values('$id','$subj[$i]','$one[$i]','$two[$i]','$three[$i]','$four[$i]','$fg[$i]') ");
}}
if(isset($_POST['ssubj'])){
	$ssubj = $_POST['ssubj'];
	$oone = $_POST['1gg'];
	$ttwo = $_POST['2gg'];
	$tthree = $_POST['3gg'];
	$ffour = $_POST['4gg'];
	$ffg = $_POST['ffg'];
	$gid = $_POST['gid'];
	$ss_count = count($ssubj);
	for($q = 0; $q < $ss_count ;$q++){
 mysqli_query($conn,"UPDATE student_grade SET subject_id = '$ssubj[$q]',
														1grading = '$oone[$q]',
														2grading = '$ttwo[$q]',
														3grading = '$tthree[$q]',
														4grading = '$ffour[$q]',
														final = '$ffg[$q]' where sg_id = '$gid[$q]' ");
}
	

	}
	$at_count = count($att_id);
	for($a = 0;$a < $at_count; $a++){
		$query4 = mysqli_query($conn,"UPDATE student_attendance set days_classes ='$dc[$a]' and days_present='$pp[$a]' where att_id = '$att_id[$a]' ");
	}
if($query1  && $query4){
		include "../includes/msg_box.php";
		echo "<script>
			$('#data_msg').modal('show');
			$('#msg-txt').html('Data Successfully Updated.');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=academic_record&student_id=". $sid. "&grade=".$grade."&form=record';   }, delay);
		</script>";
	}
}
if($action == 'update_record2'){

	$id = $_POST['id'];
	$sid = $_POST['sid'];
	
	foreach($_POST as $var => $value){
		$$var= $value;
	}
	
$query1 = mysqli_query($conn,"UPDATE student_sy_status SET grade = '$grade',
															section = '$sec',
															average = '$ave',
															adviser = '$adviser',
															advance_unit = '$advance',
															lack_unit = '$lack',
															curriculum = '$curriculum',
															school = '$school',
															school_address = '$school_address',
															classified_as = '$tbc',
															number_in_school = '$tns',
															total_days = '$Tdc',
															total_present = '$Tp',
															sy_id = '$sy' where sss_id = '$id' ");
	if(isset($_POST['subj'])){
	$subj = $_POST['subj'];
	$one = $_POST['1g'];
	$two = $_POST['2g'];
	$three = $_POST['3g'];
	$four = $_POST['4g'];
	$fg = $_POST['fg'];
	$s_count = count($subj);

for($i = 0; $i < $s_count ;$i++){
$query2 = mysqli_query($conn,"INSERT INTO student_grade (sss_id,subject_id,1grading,2grading,3grading,4grading,final)Values('$id','$subj[$i]','$one[$i]','$two[$i]','$three[$i]','$four[$i]','$fg[$i]') ");
}}
if(isset($_POST['ssubj'])){
	$ssubj = $_POST['ssubj'];
	$oone = $_POST['1gg'];
	$ttwo = $_POST['2gg'];
	$tthree = $_POST['3gg'];
	$ffour = $_POST['4gg'];
	$ffg = $_POST['ffg'];
	$gid = $_POST['gid'];
	$ss_count = count($ssubj);
	for($q = 0; $q < $ss_count ;$q++){
 mysqli_query($conn,"UPDATE student_grade SET subject_id = '$ssubj[$q]',
														1grading = '$oone[$q]',
														2grading = '$ttwo[$q]',
														3grading = '$tthree[$q]',
														4grading = '$ffour[$q]',
														final = '$ffg[$q]' where sg_id = '$gid[$q]' ");
}
	

	}
	$at_count = count($att_id);
	for($a = 0;$a < $at_count; $a++){
		$query4 = mysqli_query($conn,"UPDATE student_attendance set days_classes ='$dc[$a]' and days_present='$pp[$a]' where att_id = '$att_id[$a]' ");
	}
if($query1  && $query4){
		include "../includes/msg_box.php";
		echo "<script>
			$('#data_msg').modal('show');
			$('#msg-txt').html('Data Successfully Updated.');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=academic_record&student_id=". $sid. "&grade=".$grade."&form=record';   }, delay);
		</script>";
	}
}
if($action == 'new_pic'){
	$id = $_POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'../images/'.$file));

	$query = mysqli_query($conn,"UPDATE student_profile set pic = '$file' where student_id = '$id'");
	if($query){
		echo '<script> location.replace(document.referrer);</script>';
		
	}
	}

	if($action == 'student_profile'){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$bday = $_POST['bday'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$cn = $_POST['contact'];
	$lrn = $_POST['lrn'];
	foreach ($_POST as $var => $value){
		$$var = $value;
	} 
$query = mysqli_query($conn,"UPDATE student_profile SET firstname = '$fname',
															lastname = '$lname',
															midname = '$mname',
															bday = '$bday',
															gender = '$gender',
															contact =  '$cn',
															lrn_no = '$lrn',
															status = '$status',
															pic = 'default.jpg',
															birthplace = '$birthplace',
															guardian = '$guardian',
															guardian_contact = '$guardian_contact',
															guardian_occupation = '$guardian_occupation',
															address = '$address',
															course_completed = '$course_completed',
															e_school = '$e_school',
															e_sy = '$e_sy',
															e_gen_ave = '$e_gen_ave' where student_id = '$id'");
														
	if($query){
		echo "<script>
			$('#msg_not').show('SlideDown');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=edit_student&id={$id}';   }, delay);
		</script>";
	}else{
		echo "<script>alert('failed')</script>";
		echo $query;
	}
}
if($action == 'section'){
	$grade= $_GET['grade'];
	$section= $_GET['section'];
	$sy= $_GET['sy'];
	$query = mysqli_query($conn,"SELECT * from teacher_list where grade = '$grade' and section='$section' and sy_id ='$sy' ");
	$row = mysqli_fetch_assoc($query);
	$count = mysqli_num_rows($query);
	if($count >= 1){
		echo "<div class='alert alert-success'>Adviser:".ucwords($row["name"])."</div>";
		echo '<script> $("#adviser").val('.$row["teacher_id"].')</script>';
	}else{
		echo '<div class="alert alert-warning">No advisory for this section.</div>' ;

	}
}
?>