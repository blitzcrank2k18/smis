<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
	<h4>Teacher List</h4>

<hr style="border-bottom:1px solid black"></hr>
</div>
<div id="retCode"></div>
<div class="col-md-4">
	<div class="panel panel-info">
	<div class="panel-heading"><b>New Teacher</b></div>
		<div class="panel-body">
			<form method="POST" id="teacher-form">
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-12">
						<input type="hidden" name="sy" value="<?php echo $sy_id ?>">
						<input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Name" name="name" autocomplete="off" required/></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						<select type="text" style="text-transform:capitalize" class="form-control input-sm" name="grade" autocomplete="off" required/>
						<option selected="" disabled="">Select Grade</option>
						<option value="7">Grade 7</option>
						<option value="8">Grade 8</option>
						<option value="9">Grade 9</option>
						<option value="10">Grade 10</option>
						</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						<input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Section" name="section" autocomplete="off" required/></div>
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
<div class="col-md-8">
	<div class="panel panel-default">
        <div class="panel-heading">
          <b>List of Teacher's</b>
        </div> 
        <div class="panel-body"> 
			
       <table id="teacher_list" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-2 text-center">Name</th>
        <th class="col-md-2 text-center">Grade & Section</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../includes/db.php';
   
      $query=  mysqli_query($conn, "SELECT * FROM teacher_list where sy_id = '$sy_id'");
         while($row = mysqli_fetch_assoc($query)) {   
         $id =$row['teacher_id']; 

    ?>
      <tr>


       <td class="text-left"><?php echo ucfirst($row['name']) ?></td>
       <td class="text-left">Grade <?php echo $row['grade'] . '-'.$row['section'] ?></td>
       <td class="text-center">
       <center><a href="#e_teacher<?php echo $id ?>" class="btn btn-info" data-toggle="modal"><i class='fa fa-edit'></i></a>
       <a href="#d_teacher<?php echo $id ?>" class="btn btn-danger" data-toggle="modal"><i class='fa fa-trash'></i> </a></center>
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
									url: "../forms/add_forms.php?action=teacher",
									data: formData,
									success: function(data){
											$('#data_msg').modal('show');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=teacher_list';   }, delay);  
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