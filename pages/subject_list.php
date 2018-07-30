<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
	<h4>Subject's</h4>

<hr style="border-bottom:1px solid black"></hr>
</div>
<div class="col-md-4">
	<div class="panel panel-info">
	<div class="panel-heading"><b>New Subject</b></div>
		<div class="panel-body">
			<form method="POST" id="subject-form">
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Enter Subject" name="subject" autocomplete="off" required/></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
						<textarea type="text" name="desc" style="height:75px" class="form-control " placeholder="Description" required/></textarea>
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
<div class="col-md-8">
	<div class="panel panel-default">
        <div class="panel-heading">
          <b>List of Subject's</b>
        </div> 
        <div class="panel-body"> 
			
       <table id="subject" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-2 text-center">Subject</th>
        <th class="col-md-2 text-center">Description</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../includes/db.php';
   
      $query=  mysqli_query($conn, "SELECT * FROM subject_list");
         while($row = mysqli_fetch_assoc($query)) {   
         $id =$row['subject_id']; 

    ?>
      <tr>


       <td class="text-left"><?php echo ucfirst($row['subject']) ?></td>
       <td class="text-left"><?php echo ucfirst($row['description']) ?></td>
       <td class="text-center"><center><a href="#subject<?php echo $id ?>" data-toggle="modal"><i class='fa fa-edit'></i> Edit</a></center></td>
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
						jQuery("#subject-form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=subject",
									data: formData,
									success: function(data){
											$('#data_msg').modal('show');
									var delay = 2000;
										setTimeout(function(){	window.location = 'smis.php?request=subject_list';   }, delay);  
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
            $("#subject").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
    </script>
     
<!-- ,
             -->
</div>