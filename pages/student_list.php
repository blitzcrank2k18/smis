
<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
<div class="col-sm-2">
	<h4><b>Student</b></h4></div>
<div class="alert alert-info col-sm-3" style="float:right;color:black !important">
	<center>
		<h4><b>SY:<?php echo $dsy ?></b></h4>
	</center>
</div>
<br>
<br>
<hr></hr>

</div>
<div class="col-md-11 col-md-offset-9"></div>
<br>
<div class="col-md-12" id='add-form' style="display:none">
	<div class="panel panel-info">
	<div class="panel-heading"><b>New Student</b></div>
		<div class="panel-body">
			<form method="POST" id="student-form" >
				<div class="form-horizontal">
			<div class="col-md-6">
				<h5><i>-- Student Details --</i></h5>
				<div class="form-group">
						<div class="col-sm-12"><input type="text" pattern="[0-9]{12}" maxlength="12" class="form-control input-sm" placeholder="LRN" name="lrn" id="lrn" autocomplete="off" onkeyup="validate_stud()" onkeydown="validate_stud()" required/></div>
					</div>
					<div class="form-group" id="validate">
						<div class="col-sm-12"><div class="alert alert-danger">LRN already exist.</div></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Last name" name="lname" autocomplete="off" required/></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="First name" name="fname" autocomplete="off" required/></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Middle name" name="mname" autocomplete="off" ></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="date" class="form-control input-sm" placeholder="Date of Birth" name="bday" autocomplete="off" required/></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						<textarea rowspan="2" class="form-control input-sm" placeholder="Birth Place" name="birthplace" autocomplete="off" required/></textarea>
						<span><i>eg.(Province, Town, Brgy.)</i></span></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						<select class="form-control input-sm" name="gender" autocomplete="off" required/>
						<option selected="" disabled="">Gender</option>
						<option>Female</option>
						<option>Male</option>
						</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" pattern="[0-9]{11}" maxlength="11" class="form-control input-sm" placeholder="Contact number" name="cn" autocomplete="off" required/></div>
					</div>

			</div>
			<div class="col-md-6">
				<div class="form-group">
						<div class="col-sm-12">
							<textarea type="text" name="address" style="height:75px" class="form-control " placeholder="Address" required/></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Parent/Guardian" name="guardian" autocomplete="off" ></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" pattern="[0-9]{11}" maxlength="11" class="form-control input-sm" placeholder="Guardian Contact number" name="guardian_contact" autocomplete="off" required/></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Parent/Guardian Occupation" name="guardian_occupation" autocomplete="off" ></div>
					</div>
					<h5><i>-- Elementary Details --</i></h5>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Course Completed" name="elementary_course" autocomplete="off" ></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="School" name="e_school" autocomplete="off" ></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="School Year (YYYY-YYYY)" name="e_sy" autocomplete="off" ></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Genereal Average" name="e_gen_ave" autocomplete="off" ></div>
					</div>
				
			</div>
				
					
					<div class="form-group">
						<div class="col-sm-12 col-sm-offset-7">
						<button class="btn btn-sm btn-info">Save</button>
						<a class="btn btn-sm btn-info" onclick="window.location.reload()">Cancel</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12" id="list-body">
<a onclick="add_new()" class="col-sm-2 btn btn-sm btn-info" id="add-btn" style="float:right"><i class="fa fa-plus"></i> Add Student</a>
	<div class="panel panel-default">
        <div class="panel-heading">
          <b>List of Students's</b>
        </div> 
        <div class="panel-body"> 
			
       <table id="students" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-1 text-center"></th>
        <th class="col-md-1 text-center">LRN</th>
        <th class="col-md-2 text-center">Name</th>
        <th class="col-md-1 text-center">Date of Birth</th>
        <th class="col-md-1 text-center">Gender</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../includes/db.php';
   
      $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ',midname) as name FROM student_profile");
         while($row = mysqli_fetch_assoc($query)) {   
         $id =$row['student_id']; 

    ?>
      <tr>

      	<td class="text-center"><center><img src="../images/<?php echo $row['pic'] ?>" height="75px" width="60px" alt=""></center> <br>
      	<center><a href="#change_pic<?php echo $id ?>" type="button" data-toggle="modal">Change Image</a></center></td>
       <td class="text-left"><?php echo $row['lrn_no'] ?></td>
       <td class="text-left"><?php echo ucwords($row['name']) ?></td>
       <td class="text-left"><?php echo date("F d,Y",strtotime($row['bday'])) ?></td>
       <td class="text-left"><?php echo $row['gender'] ?></td>
       <td class="text-center"><center><a href="#profile<?php echo $id ?>" data-toggle="modal"><i class='fa fa-eye'></i> Profile</a></center></td>
       </tr>

      <?php
   	include '../includes/update_modals.php';
    } 
      ?>
    </tbody>
  </table>
		</div>
	</div>
</div>
<div id="retCode"></div>
<script>
	jQuery(document).ready(function(){
		$('#add-form').hide();
		$('#validate').hide();
						jQuery("#student-form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=student_profile",
									data: formData,
									success: function(data){
										$('#retCode').append(data);
									}
								});
									return false;
						});

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
<script>
 
  function res_form(){
    $('#subject').val("");
    $('#desc').html("");
  }
  function add_new(){
  	$('#list-body').css('display','none');
  	$('#add-form').show('slideDown');
  	$('#add-btn').hide();
  }
  function validate_stud(){
var lrn = $('#lrn').val();

$.ajax({
	url:"validate_stud.php?lrn="+lrn,
	success: function(html){
		$('#retCode').append(html);
	}
});
  }
</script>

<script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 1, "asc" ]] }
      );
        });
    </script>
     
<!-- ,
             -->
</div>