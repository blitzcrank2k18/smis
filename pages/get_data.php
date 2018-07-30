<?php
include '../includes/db.php';
$query = mysqli_query($conn,"SELECT * from student_sy_status where student_id = '".$_GET['id']."' order by grade DESC limit 1 ");
$row = mysqli_fetch_assoc($query);

 ?>
 <br>
 <br>
 <br>
<div class="row">
<div class="col-md-6">
	<div class="form-group">
		<div class="col-sm-3">
			<label class="control-label">Grade</label>
		</div>
		<div class="col-sm-9">
			<select class="form-control" id="grade" name="grade" readonly>
				<option value="7">Grade 7</option>
			<?php if(mysqli_num_rows($query) > 0): 
$query2 = mysqli_query($conn,"SELECT * from promoted_students where sss_id = '".$row['sss_id']."' ");
 if(mysqli_num_rows($query2) != '' && mysqli_num_rows($query2) > 0 ): 
			?><option selected="" value="<?php echo $row['grade'] + 1; ?>">Grade <?php echo $row['grade'] + 1; ?></option>
			<?php elseif($row['sy_status'] == 'Transferee'): ?>
			<option selected="" value="<?php echo $row['grade'] + 1; ?>">Grade <?php echo $row['grade'] + 1; ?></option>
			<?php else: ?>
			<option selected="" value="<?php echo $row['grade']; ?>">Grade <?php echo $row['grade']; ?></option>
			<?php
			 endif;
			 endif;
			  ?>
			</select>
		</div>
	</div>
	<br>
	<br>
	<div class="form-group">
		<div class="col-sm-3">
			<label class="control-label">Section</label>
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="section" name="section" onkeyup="get_section()" onkeydown="get_section()">
			<span id="advisory"></span>
			<input type="hidden" name="adviser" id="adviser">
		</div>
	</div>
	<br>
	<br>
	<div class="form-group">
		<div class="col-sm-3">
			<label class="control-label">Status</label>
		</div>
		<div class="col-sm-9">
			<select type="text" class="form-control" id="status" name="status" required>
				<option disabled></option>
				<option>New</option>
				<option>Regular</option>
				<option>Repeater</option>
				<option>Transferee</option>
			</select>
		</div>
	</div>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-md-6">
	<button class="btn btn-info pull-right">Enroll</button>
</div>
</div>

