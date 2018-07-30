<?php
include "../includes/db.php";
$stud = mysqli_query($conn,"SELECT * from student_sy_status  left join student_profile on student_sy_status.student_id = student_profile.student_id 
	left join school_year on student_sy_status.sy_id = school_year.sy_id 
	  where  student_sy_status.student_id ='".$_GET['student_id']."' and student_sy_status.grade = '".$_GET['grade']."' ");
while($t_row = mysqli_fetch_assoc($stud)){
$bd1 = date("Y",strtotime($t_row['bday']));
if ( date("md",strtotime($t_row['bday'])) > date("md") ){
	$bd2 =(date("Y") - $bd1) - 1; 
	}else{
	$bd2 =  date("Y") - $bd1; 
	}
if(mysqli_num_rows($stud) > 0 ){
 ?>

<div class="panel panel-default">
		<div class="panel-body">
<div class="col-md-12">
	<div class="col-sm-4">
	<img src="../images/<?php echo $t_row['pic'] ?>" height="150" width="125px" alt="">
		<h4>Name: <label><?php echo ucfirst($t_row['firstname']) . " ". ucfirst(substr($t_row['midname'],0, 1)) . ". " . ucfirst($t_row['lastname']) ?></label></h4>
		<h5>Address: <label><?php echo ucwords($t_row['address'])  ?></label></h5>
		<h5>Birth Day: <label><?php echo ucwords(date("F d, Y",strtotime($t_row['bday'])))  ?></label></h5>
		<h5>Age: <label><?php echo $bd2  ?></label></h5>
		<h5>School: <label><?php echo ucwords($t_row['school'])  ?></label></h5>
		<h5>Grade & Section: <label><?php echo $t_row['grade'] . "-" . $t_row['section']  ?></label></h5>
		<h5>Adviser: <label>
			<?php if($t_row['adviser'] != '' ){
				echo ucwords($t_row['adviser']);
			}else{
				$query_teacher = mysqli_query($conn,"SELECT * FROM teacher_list where teacher_id = '".$t_row['teacher_id']."' ");
				$teacher = mysqli_fetch_assoc($query_teacher);
				echo ucwords($teacher['name']);
			}
			 ?>
		</label></h5>
		<h5>School Year: <label><?php echo $t_row['sy'] ?></label></h5>
		<h5>Status: <label><?php echo $t_row['sy_status'] ?></label></h5>
	</div>
	<div class="col-md-8">
		<table id="grade" class="table table-bordered">
		<thead>
			<tr>
				<th style="width:30%;border-bottom: 0px solid black !important"><center>Subject</center></th>
				<th style="width:40%" colspan="4"><center>Period</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Final</center></th>
			</tr>
			<tr>
				<th style="border-top: 0px solid black !important"></th>
				<th style="width:10%"><center>1st</center></th>
				<th style="width:10%"><center>2nd</center></th>
				<th style="width:10%"><center>3rd</center></th>
				<th style="width:10%"><center>4th</center></th>
				<th style="border-top: 0px solid black !important"></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$grade = mysqli_query($conn,"SELECT * from student_grade natural join subject_list where sss_id = '".$t_row['sss_id']."' ");
			while($g_row= mysqli_fetch_assoc($grade)){
			 ?>
			 <tr>
			 	<td class="text-left"><?php echo ucwords($g_row['subject']) ?></td>
			 	<td class="text-center"><?php echo $g_row['1grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['2grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['3grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['4grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['final'] ?></td>
			 </tr>
			<?php } ?>
			<tr>
				<th colspan="5" class="text-right">General Average</th>
				<th class="text-center"><?php echo $t_row['average'] ?></th>
			</tr>
		</tbody>
		</table>
	</div>
</div>
<div class="col-md-12">
	<?php if($t_row['adviser'] == ''){ ?>
	<a type="button" class="btn btn-sm btn-info" style="float:right" href="smis.php?request=update_record&student_id=<?php echo $_GET['student_id'] ?>&grade=<?php echo $_GET['grade'] ?>"><i class="fa fa-edit"></i> Edit</a></div>
	<?php }else{ ?>
		<a type="button" class="btn btn-sm btn-info" style="float:right" href="smis.php?request=update_record2&student_id=<?php echo $_GET['student_id'] ?>&grade=<?php echo $_GET['grade'] ?>"><i class="fa fa-edit"></i> Edit</a></div>
	<?php } ?>
</div>
</div>

<?php }else{ echo '<h4>No data found.</h4>';} } ?>

<script>
	function edit_record{
		window.location.href="";
	}
</script>