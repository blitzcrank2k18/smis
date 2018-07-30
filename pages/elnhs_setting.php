<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
	<h4>Mr. and Miss ELNHS</h4>

<hr style="border-bottom:1px solid black"></hr>
</div>
<div id="retCode"></div>
<div class="col-md-4">
	<div class="panel panel-info">
	<div class="panel-heading"><b>Add</b></div>
		<div class="panel-body">
			<form method="POST" id="teacher-form">
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">MR.:</label></div>
						<div class="col-sm-10">
							<select style="text-transform:capitalize" class="form-control chosen-select" data-placeholder="Students" name="sid[]" id="sid" autocomplete="off" required/>\
							<option "></option>
							<?php
							include '../includes/db.php';
								$student_query= mysqli_query($conn,"SELECT *,CONCAT(lastname,', ',firstname,' ', midname) as name from student_sy_status inner join student_profile on student_profile.student_id = student_sy_status.student_id where gender='Male' and sy_id = '$sy_id' order by name");
								while($s_row = mysqli_fetch_assoc($student_query)){
									$sid= $s_row['sss_id'];
						
				 ?>
				 		<option  value="<?php echo $sid ?>" ><?php echo ucwords($s_row['name']). ' [LRN:' . $s_row['lrn_no'] .']' ?></option>
				 <?php } ?>
				</select>
			</div>
	</div>
	<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Ms.:</label></div>
						<div class="col-sm-10">
							<select style="text-transform:capitalize" class="form-control chosen-select" data-placeholder="Students" name="sid[]" id="sid" autocomplete="off" required/>\
							<option></option>
							<?php
							include '../includes/db.php';
								$student_query2= mysqli_query($conn,"SELECT *,CONCAT(lastname,', ',firstname,' ', midname) as name from student_sy_status inner join student_profile on student_profile.student_id = student_sy_status.student_id where gender='Female' and sy_id = '$sy_id' order by name");
								while($s_row2 = mysqli_fetch_assoc($student_query2)){
									$sid2= $s_row2['sss_id'];
						
				 ?>
				 		<option  value="<?php echo $sid2 ?>" ><?php echo ucwords($s_row2['name']). ' [LRN:' . $s_row2['lrn_no'] .']' ?></option>
				 <?php } ?>
				</select>
			</div>
	</div>
	<input type="hidden" name="sy" value="<?php echo $sy_id; ?>">
					
					
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
<div class="col-md-8">
	<div class="panel panel-default">
        <div class="panel-heading">
          <b></b>
        </div> 
        <div class="panel-body"> 
			
       <table id="teacher_list" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-2 text-center">Name</th>
        <th class="col-md-2 text-center">Grade & Section</th>
        <th class="col-md-1 text-center">SY</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../includes/db.php';
   
      $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ','midname') as name FROM mr_and_ms inner join student_sy_status on student_sy_status.sss_id = mr_and_ms.sss_id  inner join student_profile on student_profile.student_id= student_sy_status.student_id inner join school_year on school_year.sy_id = mr_and_ms.sy_id where mr_and_ms.sy_id = '$sy_id'");
         while($row = mysqli_fetch_assoc($query)) {   
         $id =$row['sss_id']; 

    ?>
      <tr>


       <td class="text-left"><?php echo ucwords($row['name']) ?></td>
       <td class="text-left">Grade <?php echo $row['grade'] . '-'.$row['section'] ?></td>
       <td class="text-left"> <?php echo $row['sy'] ?></td>
       <td class="text-center">
       <center><a href="#d_setting<?php echo $id ?>" class="btn btn-danger" data-toggle="modal"><i class='fa fa-trash'></i> </a></center>
       </td>
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
<script>
	jQuery(document).ready(function(){
						jQuery("#teacher-form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=setting",
									data: formData,
									success: function(data){
											$('#data_msg').modal('show');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=elnhs_setting';   }, delay);  
									
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
</script>

<script type="text/javascript">
        $(function() {
            $("#teacher_list").dataTable(
       {  "aaSorting": [[ 1, "asc" ]]}

      );
        });
    </script>
     
<!-- ,
             -->
</div>
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>