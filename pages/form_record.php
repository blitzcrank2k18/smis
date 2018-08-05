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
	table th,table td {
		font-size:9px !important;
		font-weight: normal !important; 		
	}
	td.text-left {
    	font-size: 8px !important;
    	padding: 2px !important;
	}
	@media print {
		.hereby{
			position: relative;
			top:-75px !important;
		}
		.print{
			display: none;
		}

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
	<div class = "container" style="position:relative;top:-80px;">
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

<div class = "col-lg-12" style ='position: relative;top: -65px;'>
		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered" style = "width:50% !important">
		<thead>
		<?php 
			$que=mysqli_query($conn,"SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_attendance ON student_attendance.sss_id = student_sy_status.sss_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '7'
				")or die(mysqli_error($conn));		
			$rows=mysqli_fetch_array($que);
		?>


			<tr>
				<td style = 'border: none !important;' colspan = "2">First Year</td>
				<td style = 'border: none !important;' colspan = "3">Year: <?= $rows['sy'];?></td>				
				<td style = 'border: none !important;' colspan = '2'>Section : <?= $rows['section']?></td>
			</tr>
			<tr>
				<td style = 'border: none !important;' colspan = "7">School : <?= $rows['school']?></td>			
			</tr>
			<!-- <tr>
				<td style = 'border: none !important;' colspan = "7">Address:</td>			
			</tr> -->
			<tr>
				<th style="width:15%;border-bottom: 0px solid black !important;font-size:9px;"><center>Subject</center></th>
				<th style="width:15%;font-size: 9px;" colspan="4"><center>Period</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Final</center></th>				
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Pass/Fail</center></th>
			</tr>
			<tr>
				<th style="border-top: 0px solid black !important"></th>
				<th style="width:3%"><center>1st</center></th>
				<th style="width:3%"><center>2nd</center></th>
				<th style="width:3%"><center>3rd</center></th>
				<th style="width:3%"><center>4th</center></th>
				<th style="border-top: 0px solid black !important"></th>
				<th style="border-top: 0px solid black !important"></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '7' AND student_profile.student_id= $id");
			while($g_row= mysqli_fetch_assoc($grade)){
			 ?>
			 <tr>
			 	<td class="text-left"  style = "font-size:7px"><?php echo ucwords($g_row['subject']) ?></td>
			 	<td class="text-center"><?php echo $g_row['1grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['2grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['3grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['4grading'] ?></td>			 
			 	<td class="text-center first-yr">
			 		<?php 
			 		$a = $g_row['1grading'];
			 		$b= $g_row['2grading'];
			 		$c = $g_row['3grading'];
			 		$d = $g_row['4grading'];			 		
			 		$sum = $a + $b + $c +$d ;
			 		$ave = $sum / 4;
			 		echo $ave;
			 	?>
			 	</td>
			 	<td class="text-center"><?php
			 		if($ave >= 75){			 				
			 			echo "Passed";
			 		}
			 		else{
			 			echo "Failed";
			 		}
			 	 	?>			 	 	
			 	 </td>
			 </tr>
			<?php } ?>
			<tr>
				<td colspan="5" class="text-right">General Average</td>
				<td class="text-center gen-average-first"></td>
				<th></th>
			</tr>
			<tr>
				<td colspan="4" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Total days of school:<?=$rows['total_days']?></p>
					<p style = 'margin-bottom:3px;'>Total days present : <?=$rows['total_present']?></p>
				</td>
				<td colspan="3" style = 'border: none !important;'>
					Total no of years in school to date : 
				</td>
			</tr>			
			<tr>
				<td colspan="7" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Has advance in: <?=$rows['advance_unit']?> </p>
					<p style = 'margin-bottom:3px;'>Lacks units in: <?=$rows['lack_unit']?></p>
					<!--<p style = 'margin-bottom:3px;'>To be classified as : </p>-->
				</td>
			</tr>
		</tbody>
		</table>
		</div>

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered" style = "width:50% !important">
		<thead>
		<?php 
			$que2=mysqli_query($conn,"SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_attendance ON student_attendance.sss_id = student_sy_status.sss_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '8'
				")or die(mysqli_error($conn));		
			$rows2=mysqli_fetch_array($que2);
		?>
			<tr>
				<td style = 'border: none !important;' colspan = "2">Second Year</td>
				<td style = 'border: none !important;' colspan = "3">Year :  <?= $rows2['sy'];?></td>				
				<td style = 'border: none !important;' colspan = '2'>Section : <?= $rows2['section']?></td>
			</tr>
			<tr>
				<td style = 'border: none !important;' colspan = "7">School : <?= $rows2['school']?></td>			
			</tr>
			<!-- <tr>
				<td style = 'border: none !important;' colspan = "7">Address:</td>			
			</tr> -->
			<tr>
				<th style="width:15%;border-bottom: 0px solid black !important; font-size:9px;"><center>Subject</center></th>
				<th style="width:15%;font-size: 9px;" colspan="4"><center>Period</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Final</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Pass/Fail</center></th>
			</tr>
			<tr>
				<th style="border-top: 0px solid black !important"></th>
				<th style="width:3%"><center>1st</center></th>
				<th style="width:3%"><center>2nd</center></th>
				<th style="width:3%"><center>3rd</center></th>
				<th style="width:3%"><center>4th</center></th>
				<th style="border-top: 0px solid black !important"></th>
				<th style="border-top: 0px solid black !important"></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '8' AND student_profile.student_id = $id" );
			while($g_row= mysqli_fetch_assoc($grade)){
			 ?>
			 <tr>
			
			 	<td class="text-left" style = "font-size:7px"><?php echo ucwords($g_row['subject']) ?></td>
			 	<td class="text-center"><?php echo $g_row['1grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['2grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['3grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['4grading'] ?></td>
			 	<td class="text-center second-yr">
			 	<?php 
			 		$a = $g_row['1grading'];
			 		$b= $g_row['2grading'];
			 		$c = $g_row['3grading'];
			 		$d = $g_row['4grading'];			 		
			 		$sum = $a + $b + $c +$d ;
			 		$ave = $sum / 4;
			 		echo $ave;
			 	?>
			 		
			 	</td>
			 	<td class="text-center"><?php
			 		if($ave >= 75){			 				
			 			echo "Passed";
			 		}
			 		else{
			 			echo "Failed";
			 		}
			 	 	?>			 	 	
			 	 </td>
			 </tr>
			<?php } ?>
			<tr>
				<td colspan="5" class="text-right">General Average</td>
				<td class="text-center gen-average-second"></td>
				<th></th>
			</tr>
			<tr>
				<td colspan="4" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Total days of school:<?=$rows2['total_days']?></p>
					<p style = 'margin-bottom:3px;'>Total days present : <?=$rows2['total_present']?></p>
				</td>
				<td colspan="3" style = 'border: none !important;'>
					Total no of years in school to date : 
				</td>
			</tr>			
			<tr>
				<td colspan="7" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Has advance in: <?=$rows2['advance_unit']?> </p>
					<p style = 'margin-bottom:3px;'>Lacks units in: <?=$rows2['lack_unit']?></p>
					<!--<p style = 'margin-bottom:3px;'>To be classified as : </p>-->
				</td>
			</tr>
		</tbody>
		</table>
		</div>

		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered" style = "width:50% !important">
		<thead>
		<?php 
			$que3=mysqli_query($conn,"SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_attendance ON student_attendance.sss_id = student_sy_status.sss_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '9'
				")or die(mysqli_error($conn));		
			$rows3=mysqli_fetch_array($que3);
		?>

			<tr>
				<td style = 'border: none !important;' colspan = "2">Third Year</td>
				<td style = 'border: none !important;' colspan = "3">Year :  <?= $rows3['sy'];?></td>				
				<td style = 'border: none !important;' colspan = '2'>Section : <?= $rows3['section']?></td>

			</tr>
			<tr>
				<td style = 'border: none !important;' colspan = "7">School : <?= $rows3['school']?></td>			
			</tr>
			<!-- <tr>
				<td style = 'border: none !important;' colspan = "7">Address:</td>			
			</tr> -->
			<tr>
				<th style="width:15%;border-bottom: 0px solid black !important; font-size:9px;"><center>Subject</center></th>
				<th style="width:15%;font-size: 9px;" colspan="4"><center>Period</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Final</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Pass/Fail</center></th>
			</tr>
			<tr>
				<th style="border-top: 0px solid black !important"></th>
				<th style="width:3%"><center>1st</center></th>
				<th style="width:3%"><center>2nd</center></th>
				<th style="width:3%"><center>3rd</center></th>
				<th style="width:3%"><center>4th</center></th>
				<th style="border-top: 0px solid black !important"></th>
				<th style="border-top: 0px solid black !important"></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '9' AND student_profile.student_id = $id");
			while($g_row= mysqli_fetch_assoc($grade)){
			 ?>
			 <tr>
			 	<td class="text-left subject-row" style = "font-size:7px"><?php echo ucwords($g_row['subject']) ?></td>
			 	<td class="text-center grade-int1"><?php echo $g_row['1grading'] ?></td>
			 	<td class="text-center grade-int2"><?php echo $g_row['2grading'] ?></td>
			 	<td class="text-center grade-int3"><?php echo $g_row['3grading'] ?></td>
			 	<td class="text-center grade-int4"><?php echo $g_row['4grading'] ?></td>
			 	<td class="text-center third-yr">
			 	<?php //echo $g_row['final'] <?php 
			 		$a = $g_row['1grading'];
			 		$b= $g_row['2grading'];
			 		$c = $g_row['3grading'];
			 		$d = $g_row['4grading'];			 		
			 		$sum = $a + $b + $c +$d ;
			 		$ave = $sum / 4;
			 		echo $ave;
			 	?>			 		
			 	</td>
			 	<td class="text-center"><?php
			 		if($ave >= 75){			 				
			 			echo "Passed";
			 		}
			 		else{
			 			echo "Failed";
			 		}
			 	 	?>			 	 	
			 	 </td>
			 </tr>
			<?php } ?>
			<tr>
				<th colspan="5" class="text-right">General Average</th>
				<th class="text-center gen-average-third"></th>
				<th></th>
			</tr>
			<tr>
				<td colspan="4" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Total days of school:<?=$rows3['total_days']?></p>
					<p style = 'margin-bottom:3px;'>Total days present : <?=$rows3['total_present']?></p>
				</td>
				<td colspan="3" style = 'border: none !important;'>
					Total no of years in school to date : 
				</td>
			</tr>			
			<tr>
				<td colspan="7" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Has advance in: <?=$rows3['advance_unit']?> </p>
					<p style = 'margin-bottom:3px;'>Lacks units in: <?=$rows3['lack_unit']?></p>
					<!--<p style = 'margin-bottom:3px;'>To be classified as : </p>-->
				</td>
			</tr>
		</tbody>
		</table>
		</div>
		
		<div class = "col-lg-6 col-sm-6 col-xs-6 col-sm-6">
		<table id="grade" class="table table-bordered" style = "width:50% !important">
		<thead>
		<?php 
			$que4=mysqli_query($conn,"SELECT * FROM `student_profile` LEFT JOIN student_sy_status ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_attendance ON student_attendance.sss_id = student_sy_status.sss_id LEFT JOIN school_year ON school_year.sy_id = student_sy_status.sy_id WHERE student_sy_status.grade = '10'
				")or die(mysqli_error($conn));		
			$rows4=mysqli_fetch_array($que4);
		?>
			<tr>
				<td style = 'border: none !important;' colspan = "2">Fourth Year</td>
				<td style = 'border: none !important;' colspan = "3">Year :  <?= $rows4['sy'];?></td>				
				<td style = 'border: none !important;' colspan = '2'>Section : <?= $rows4['section']?></td>
			</tr>
			<tr>
				<td style = 'border: none !important;' colspan = "7">School : <?= $rows4['school']?></td>			
			</tr>
			<!-- <tr>
				<td style = 'border: none !important;' colspan = "7">Address:</td>			
			</tr> -->
			<tr>
				<th style="width:25%;border-bottom: 0px solid black !important"><center>Subject</center></th>
				<th style="width:15%;font-size: 9px;" colspan="4"><center>Period</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Final</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Pass/Fail</center></th>
			</tr>
			<tr>
				<th style="border-top: 0px solid black !important"></th>
				<th style="width:3%"><center>1st</center></th>
				<th style="width:3%"><center>2nd</center></th>
				<th style="width:3%"><center>3rd</center></th>
				<th style="width:3%"><center>4th</center></th>
				<th style="border-top: 0px solid black !important"></th>
				<th style="border-top: 0px solid black !important"></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$grade = mysqli_query($conn,"SELECT * FROM `student_sy_status` LEFT JOIN student_profile ON student_sy_status.student_id = student_profile.student_id LEFT JOIN student_grade ON student_grade.sss_id = student_sy_status.sss_id LEFT JOIN subject_list ON subject_list.subject_id = student_grade.subject_id WHERE grade = '10' AND student_profile.student_id= $id");
			while($g_row= mysqli_fetch_assoc($grade)){
			 ?>
			 <tr>
			 	<td class="text-left" style = "font-size:px"><?php echo ucwords($g_row['subject']) ?></td>
			 	<td class="text-center"><?php echo $g_row['1grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['2grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['3grading'] ?></td>
			 	<td class="text-center"><?php echo $g_row['4grading'] ?></td>
			 	<td class="text-center fourth-yr">
			 	<?php //echo $g_row['final'] <?php 
			 		$a = $g_row['1grading'];
			 		$b= $g_row['2grading'];
			 		$c = $g_row['3grading'];
			 		$d = $g_row['4grading'];			 		
			 		$sum = $a + $b + $c +$d ;
			 		$ave = $sum / 4;
			 		echo $ave;
			 	?>			 		
			 	</td>
			 	<td class="text-center">
			 		<?php
			 		if($ave >= 75){			 				
			 			echo "Passed";
			 		}
			 		else{
			 			echo "Failed";
			 		}
			 	 	?>			 	 	
			 	 </td>
			 </tr>
			<?php } ?>
			<tr>
				<th colspan="5" class="text-right">General Average</th>
				<th class="text-center gen-average-fourth"></th>
				<th></th>
			</tr>
			<tr>
				<td colspan="4" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Total days of school:<?=$rows4['total_days']?></p>
					<p style = 'margin-bottom:3px;'>Total days present : <?=$rows4['total_present']?></p>
				</td>
				<td colspan="3" style = 'border: none !important;'>
					Total no of years in school to date : 
				</td>
			</tr>			
			<tr>
				<td colspan="7" style = 'border: none !important;'>
					<p style = 'margin-bottom:3px;'>Has advance in: <?=$rows4['advance_unit']?> </p>
					<p style = 'margin-bottom:3px;'>Lacks units in: <?=$rows4['lack_unit']?></p>
					<!--<p style = 'margin-bottom:3px;'>To be classified as : </p>-->
				</td>
			</tr>
		</tbody>
		</table>
		</div>
		</div>
	</div>
</div>
<div class = "container hereby" style="position: relative;top:-70px;">
<div class = "col-lg-12">	
<p style = "width:100%;">I hereby certify that this is true record of <span style="text-transform:capitalize;"><?=$row['firstname']. " " .$row['midname']. " ".$row['lastname'];?></span>. This student is eligible on this <?= date('d');?> day of <?= date('F');?> <?= date('Y');?> for admission to College as a regular/irregular student and has no money or property responsible for this school
</p>
<p class ='pull-right' style="position:relative;right:125px !important;">VIVIAN GRACE V. DUDAS</p><br/>
<p class="pull-right" style="position:relative;right: -35px !important;font-size: 10px;">Registrar/Guidance Counselor</p>
<?php }else{ echo '<h4>No data found.</h4>';} } ?>	
</div>
<button class = "btn btn-primary print" onclick="myFunction()">Print this page</button>
</div>




<script>
function myFunction() {
    window.print();
}
$(document).ready(function(){

$('.first-yr').attr('class', function(i) {
    return 'first-yr';
  });
$('.second-yr').attr('class', function(i) {
    return 'second-yr';
  });
$('.third-yr').attr('class', function(i) {
    return 'third-yr';
  });
$('.fourth-yr').attr('class', function(i) {
    return 'fourth-yr';
  });




var sum1 = 0.0;
var devide1 = $('.first-yr').length;
$('.first-yr').each(function()
{
    sum1 += parseFloat($(this).text() / devide1);
});

$('.gen-average-first').text(sum1.toFixed(2));



var sum2 = 0.0;
var devide2 = $('.second-yr').length;
$('.second-yr').each(function()
{
    sum2 += parseFloat($(this).text() / devide2);
});

$('.gen-average-second').text(sum2.toFixed(2));

var sum3 = 0.0;
var devide3 = $('.third-yr').length;
$('.third-yr').each(function()
{
    sum3 += parseFloat($(this).text() / devide3);
});

$('.gen-average-third').text(sum3.toFixed(2));


var sum4 = 0.0;
var devide4 = $('.fourth-yr').length;
$('.fourth-yr').each(function()
{
    sum4 += parseFloat($(this).text() / devide4);
});

$('.gen-average-fourth').text(sum4.toFixed(2));


});
</script>