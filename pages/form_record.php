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
<div class = "col-lg-12">
	<h3 style = "text-align:center;position:relative;top:-100px;">EFEGENIO LIZRES NATIONAL HIGH SCHOOL</h3>
	<h5 style = "text-align:center;position:relative;top:-100px;">SECONDARY STUDENT PERMANENT RECORD</h5>
	<div class = "row-fluid" style="position:relative;top:-80px;">
		<div class = "col-lg-6 col-md-6 col-xs-6 col-sm-6">
			<p class = "text-info">Name:<?=$t_row['firstname']?></p>
			<p class = "text-info">Place of birth: ARMANDO FERNANDEZ</p>
			<p class = "text-info">Parents / Guardian: ARMANDO FERNANDEZ Sr.</p>
			<p class = "text-info">Earn Course Completed : Test</p>
		</div>
		<div class = "col-lg-6 col-md-6 col-xs-6 col-sm-6">
			<p class = "text-info">Date of Birth</p>
			<p class = "text-info">Gender</p>
			<p class = "text-info">Residence</p>
			<p class = "text-info">Year</p>
		</div>

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
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

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
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

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
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
		
		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
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




</div>

