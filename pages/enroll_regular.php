<div class="panel panel-default">
<div class="panel-body">
<form method="POST" id="enroll">
<input type="hidden" name="sy" value="<?php echo $sy_id; ?>">
<input type="hidden" name="status" value="2">
<div id="enroll_form">
<div class="row">
<div class="col-md-6">
	<div class="form-group">
			<div class="col-sm-3"><label class="control-label">Student Name:</label></div>
			<div class="col-sm-9">
			<select style="text-transform:capitalize" class="form-control chosen-select" onchange="get_data()" data-placeholder="Students" name="student_id" id="student_id" autocomplete="off" required/>\
			<option disabled=""></option>
			<?php
			include '../includes/db.php';
				$student_query= mysqli_query($conn,"SELECT *,CONCAT(lastname,', ',firstname,' ', midname) as name from student_profile where student_id NOT IN (SELECT student_id from student_sy_status where sy_id = '$sy_id' ) order by name ");
				while($s_row = mysqli_fetch_assoc($student_query)){
					$sid= $s_row['student_id'];
					
			 ?>
			 		<option  value="<?php echo $sid ?>" <?php if( $_GET['student_id'] == $sid){ ?> selected="" <?php } ?> ><?php echo ucwords($s_row['name']). ' [LRN:' . $s_row['lrn_no'] .']' ?></option>
			 <?php } ?>
			</select>
			</div>
			</div>
	</div>
	</div>
	</div>
</form>
</div>
</div>