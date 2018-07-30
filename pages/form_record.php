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
	<h3 style = "text-align:center;">EJEGENIO LIZRES NATIONAL HIGH SCHOOL</h3>
	<h5 style = "text-align:center;">SECONDARY STUDENT PERMANENT RECORD</h5>
	<div class = "row-fluid">
<?php
include "../includes/db.php";
$stud = mysqli_query($conn,"SELECT * from student_sy_status  left join student_profile on student_sy_status.student_id = student_profile.student_id left join school_year on student_sy_status.sy_id = school_year.sy_id where  student_sy_status.student_id ='".$_GET['student_id']."' and student_sy_status.grade = '".$_GET['grade']."' ");
	while($t_row = mysqli_fetch_assoc($stud)){
 ?>

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
	</div>

<?php } ?>


</div>

