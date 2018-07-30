<?php
include '../includes/db.php';

$query =mysqli_query($conn,"SELECT * from student_profile where lrn_no = '".$_GET['lrn']."' ");
$count = mysqli_num_rows($query);
if($count > 0){
	echo "<script>$('#validate').show('slidedown');</script>";
 }else{
 	echo "<script>$('#validate').hide('slideup');</script>";
 }
?>