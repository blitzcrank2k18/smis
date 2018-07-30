<style>
	input{
		text-transform: capitalize;
	}
</style>
<div class="col-lg-12">
	<div class="col-md-12">
		<h3>Edit Student Profile</h3>
		<hr style="border-bottom:1px solid black">
	</div>

	<?php
    include '../includes/db.php';
   
      $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ',midname) as name FROM student_profile where student_id = '".$_GET['id']."' ");
        $row = mysqli_fetch_assoc($query); 

    ?>

	<div class="col-md-12">
		<div class="alert alert-success" id="msg_not" style="display:none"><i class="fa fa-check"></i> Data successfully updated.</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" class="form-horizontal" id="update_student">
					<div class="container">
						<div class="col-md-6">
							<span><center><h4>-- Student Details --</h4></center></span>
							<div class="form-group">
								<label class="col-sm-3">LRN</label>
								<div class="col-sm-8">
								<input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
									<input type="text" class="form-control" name="lrn" value="<?php echo $row['lrn_no']; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Last Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="lname" value="<?php echo $row['lastname']; ?>" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">First Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="fname" value="<?php echo $row['firstname']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Middle Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="mname" value="<?php echo $row['midname']; ?>" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Birthday</label>
								<div class="col-sm-8">
									<input type="date" class="form-control" name="bday" value="<?php echo $row['bday']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Birth Place</label>
								<div class="col-sm-8">
									<textarea class="form-control" name="birthplace" required><?php echo $row['birthplace']; ?></textarea>
									<span>eg.(Province, Town, Brgy.)</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Gender</label>
								<div class="col-sm-8">
									<select name="gender" class="form-control" required="">
										<option><?php echo $row['gender']; ?></option>
										<?php if($row['gender'] == 'Male'): ?><option>Female</option><?php endif ?>
										<?php if($row['gender'] == 'Female'): ?><option>Male</option><?php endif ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Contact no.</label>
								<div class="col-sm-8">
									<input type="text" maxlength="11" pattern="[0-9]{11}" class="form-control" name="contact" value="<?php echo $row['contact']; ?>" >
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">Address</label>
								<div class="col-sm-8">
									<textarea type="text" rowspan="2" class="form-control" name="address" ><?php echo $row['midname']; ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<br>
						<br>
							<div class="form-group">
								<label class="col-sm-3">Parent/Guardian</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="guardian" value="<?php echo $row['guardian']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Guardian Contact no</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" pattern="[0-9]{11}" maxlength="11" name="guardian_contact" value="<?php echo $row['guardian_contact']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">Guardian Occupation</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="guardian_occupation" value="<?php echo $row['guardian_occupation']; ?>" required>
								</div>
							</div>
							<span><center><h4>-- Elementary Details --</h4></center></span>
							<div class="form-group">
								<label class="col-sm-3">Course Completed</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="course_completed" value="<?php echo $row['course_completed']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">School</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="e_school" value="<?php echo $row['e_school']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3">School Year</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="e_sy" value="<?php echo $row['e_sy']; ?>" placeholder="eg(YYYY-YYYY)" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3">General Average</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="e_gen_ave" value="<?php echo $row['e_gen_ave']; ?>"  required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-11">
									<button class="btn btn-info pull-right"><i class="fa fa-save"> </i> Update</button>
									<a href="smis.php?request=student_list" class="btn btn-success pull-right"><i class="fa fa-angle-left"> </i> Back</a>
								</div>
							</div>

						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<div id="retCode"></div>
<script>
	jQuery(document).ready(function(){
jQuery("#update_student").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/update_forms.php?action=student_profile",
									data: formData,
									success: function(data){
										$('#retCode').append(data);
									}
								});
									return false;
						});
						});
</script> 