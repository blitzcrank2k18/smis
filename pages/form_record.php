<?php 
$id=$_GET['student_id'];
?>


<style type="text/css">
	.text-info {
    font-size: 12px;
    font-family: Arial;
    margin-bottom: 0;
     line-height: 17px; 
	}
</style>
<?php	
	include '../includes/db.php';
	$query=mysqli_query($conn,"select * from student_profile WHERE student_id ='$id'")or die(mysqli_error($conn));		
	$row=mysqli_fetch_array($query);
?>



<div class = "col-lg-12">
	<h3 style = "text-align:center;position:relative;top:-100px;">EFEGENIO LIZRES NATIONAL HIGH SCHOOL</h3>
	<h5 style = "text-align:center;position:relative;top:-100px;">SECONDARY STUDENT PERMANENT RECORD</h5>
	<div class = "row-fluid" style="position:relative;top:-80px;">
		<div class = "col-lg-6 col-md-6 col-xs-6 col-sm-6">
			<p class = "text-info">Name:<span style = "text-transform: capitalize;"><?=$row['firstname']. " " .$row['midname']. " ".$row['lastname'];?></span></p>
			<p class = "text-info">Place of birth: <span style = "text-transform: capitalize;"><?=$row['birthplace'];?></span></p>
			<p class = "text-info">Parents / Guardian: <span style = "text-transform: capitalize;"><?=$row['guardian']?></span></p>
			<p class = "text-info">Earn Course Completed : Test</p>
		</div>
		<div class = "col-lg-6 col-md-6 col-xs-6 col-sm-6">
			<p class = "text-info">Date of Birth: <?=date('F d,Y',strtotime($row['bday']))?> </p>
			<p class = "text-info">Gender : <?=$row['gender']?></p>
			<p class = "text-info">Residence</p>
			<p class = "text-info">Year</p>
		</div>

		<?php
include "../includes/db.php";
$stud = mysqli_query($conn,"SELECT * from student_sy_status  left join student_profile on student_sy_status.student_id = student_profile.student_id left join school_year on student_sy_status.sy_id = school_year.sy_id where  student_sy_status.student_id ='".$_GET['student_id']."' AND student_sy_status.grade = student_sy_status.grade GROUP BY student_sy_status.student_id ='".$_GET['student_id']."'  ");
while($t_row = mysqli_fetch_assoc($stud)){
	$grades = $t_row['grade'];
$bd1 = date("Y",strtotime($t_row['bday']));
if ( date("md",strtotime($t_row['bday'])) > date("md") ){
	$bd2 =(date("Y") - $bd1) - 1; 
	}else{
	$bd2 =  date("Y") - $bd1; 
	}
if(mysqli_num_rows($stud) > 0 ){
 ?>


		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered">
		<thead>
			<tr>
				<th style="width:25%;border-bottom: 0px solid black !important"><center>Subject</center></th>
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
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '7' AND student_profile.student_id= $id");
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

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered">
		<thead>
			<tr>
				<th style="width:25%;border-bottom: 0px solid black !important"><center>Subject</center></th>
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
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '8' AND student_profile.student_id = $id" );
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
				<td colspan="5" class="text-right">General Average</td>
				<td class="text-center"><?php echo $t_row['average'] ?></td>
			</tr>
		</tbody>
		</table>
		</div>

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered">
		<thead>
			<tr>
				<th style="width:25%;border-bottom: 0px solid black !important"><center>Subject</center></th>
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
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '9' AND student_profile.student_id = $id");
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
		
		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered">
		<thead>
			<tr>
				<th style="width:2%;border-bottom: 0px solid black !important"><center>Subject</center></th>
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
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '10' AND student_profile.student_id= $id");
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

</div>
<p>I hereby certify that this is true record of <span style="text-transform: capitalize; text-align:justify; "><?=$row['firstname']. " " .$row['midname']. " ".$row['lastname'];?></span>. This student is eligible on this <?= date('d');?> day of <?= date('F');?> <?= date('Y');?> for admission to College as a regular/irregular student and has no money or property responsible for this school</p>
<?php }else{ echo '<h4>No data found.</h4>';} } ?>

