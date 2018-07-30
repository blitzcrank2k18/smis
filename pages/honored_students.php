<style>
	.nav.navbar.grade>li{
		border:2px black !important ;
		background:white ;
		color:black;
		padding: 5px;
	}
	.nav.navbar.grade>li.active{
		border:1px rgb(251, 251, 251) ;
		background:rgb(251, 251, 251);
		color:black;
	}
	.nav.navbar.grade>li>a{
		color:black;
	}
	.sid>.panel{
		background-color: rgb(250, 250, 250) ;
	}
	.sid>.panel.panel-default>.panel-body{
		padding: 1px !important;
		margin: 1px !important;
	}
</style>
<?php
if($_GET['grade'] == 'all'){ $all = "active";}
if($_GET['grade'] == '7'){ $active1 = "active";}
if($_GET['grade'] == '8'){ $active2 = "active";}
if($_GET['grade'] == '9'){ $active3 = "active";}
if($_GET['grade'] == '10'){ $active4 = "active";}
 ?>
<div class="col-md-12">

	<h4><b>Honored Students</b></h4>

<hr style="border-bottom:1px solid black"></hr>

</div>
<div class="col-lg-12">

<div class="col-md-3 sid">
<div class="alert alert-info col-md-12" style="color:black !important">
	<center>
		<h4><b>SY:<?php echo $dsy ?></b></h4>
	</center>
</div>
	<div class="panel panel-default">
	<div class="panel-heading"><b>Select Grade</b></div>
		<div class="panel-body">
			<ul class="nav navbar grade">
				<li class="<?php echo $all ?>"><a href="smis.php?request=honored_students&grade=all&form=record" ><i class="fa fa-angle-right"></i>   All</a></li>
				<li class="<?php echo $active1 ?>"><a href="smis.php?request=honored_students&grade=7&form=record" ><i class="fa fa-angle-right"></i>   Grade 7</a></li>
				<li class="<?php echo $active2 ?>"><a href="smis.php?request=honored_students&grade=8&form=record" ><i class="fa fa-angle-right"></i>   Grade 8</a></li>
				<li class="<?php echo $active3 ?>"><a href="smis.php?request=honored_students&grade=9&form=record" ><i class="fa fa-angle-right"></i>   Grade 9</a></li>
				<li class="<?php echo $active4 ?>"><a href="smis.php?request=honored_students&grade=10&form=record" ><i class="fa fa-angle-right"></i>   Grade 10</a></li>
				
			</ul>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
			<div id="recCode">
				<?php
			if($_GET['grade'] == 'all'){
				include '../includes/db.php';

				$query1 = mysqli_query($conn,"SELECT * from student_sy_status where sy_id='$sy_id' group by grade order by grade ASC ");
					if(mysqli_num_rows($query1) > 0 ){
				while($row1 = mysqli_fetch_assoc($query1)){
				
				 echo '<div id="table'.$row1["grade"].'"></div>';
				 echo '
				 <script>
				 $(document).ready(function(){
				 	honored_students('.$row1["grade"].')
				 });
	function honored_students(i){
		$.ajax({
			url:"honor_by_grade.php?grade="+i+"&sy='.$sy_id.'",
			success:function(data){
				$("#table"+i).append(data);
			}
		});
	}
</script>';

				}	
				}else{
					echo "No data Yet.";
				}	
				 }else{ ?>
				 	<h3><b>Grade <?php echo $_GET['grade'] ?></b></h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="col-md-1 text-center">Rank</th>
							<th class="col-md-2 text-center">Name</th>
							<th class="col-md-1 text-center">Grade&Section</th>
							<th class="col-md-1 text-center">Average</th>
						</tr>
					</thead>
				<tbody>
					<?php
					$query = mysqli_query($conn,"SELECT *,@row_number :=IFNULL(@row_number, 0) + 1 as row_number FROM student_sy_status where grade = '".$_GET['grade']."' and sy_id = '$sy_id' and student_sy_status.average != '' group by average order by average DESC  limit 10");
					while($row = mysqli_fetch_assoc($query)){
						$query2 = mysqli_query($conn,"SELECT *,concat(lastname,', ',firstname,' ',midname) as name  from student_sy_status left join student_profile on student_sy_status.student_id = student_profile.student_id where grade = '".$_GET['grade']."' and sy_id = '$sy_id' and student_profile.status = '1' and student_sy_status.average = '".$row['average']."' order by name");
						while($row2 = mysqli_fetch_assoc($query2)){
						?>
						<tr>
							<td class="text-center"><?php echo $row['row_number'] ?></td>
							<td class="text-left"><?php echo ucwords($row2['name']) ?></td>
							<td class="text-center"><?php echo $row2['grade'].'-'.$row2['section'] ?></td>
							<td class="text-center"><?php echo $row2['average'] ?></td>
						</tr>
					<?php
					}}?>
					</tbody>
					</table>
				 <?php }
				  ?>
				
			</div>
		</div>
	</div>
</div>
</div>
