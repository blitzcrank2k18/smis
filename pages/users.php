<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
<div class="col-sm-2">
	<h4><b>Users</b></h4></div><br>
<hr style="border-bottom:1px solid black"></hr>

</div>
</div>
<div class="col-md-3">
	<a type="button" data-toggle="modal" href="#new_user" class="btn btn-sm btn-info btn-sm-12"><i class="fa fa-plus"></i> Add New User</a>
	<?php include "../includes/add_modal.php"; ?>
</div>
<div class="col-lg-12">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h5>List of Users</h5>
		</div>
		<div class="panel-body">
			<table class="table table-bordered" id="user">
				<thead>
					<tr>
						<th class="col-md-1"></th>
						<th class="col-md-3">Name</th>
						<th class="col-md-2">Username</th>
						<th class="col-md-2">Password</th>
						<th class="col-md-2">User Type</th>
						<th class="col-md-1">Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					include "../includes/db.php";
					$i = 1;
						$query = mysqli_query($conn,"SELECT *,CONCAT(fname,' ',lname) as name from users ");
						while($row = mysqli_fetch_assoc($query)){
							$id = $row['user_id'];
							
							if($_SESSION['ID'] == $id){
								$me = '(You)';
							}else{
								$me = '';
							}
							?>
							<tr>
								<td class="text-center"><?php echo $i++; ?></td>
								<td><?php echo ucwords($row['name']) .' '.$me ?></td>
								<td><?php echo $row['username']; ?></td>
								<td class="text-center">********</td>
								<td><?php if($row['user_type'] == '1'){ echo 'Administrator';}else{ echo 'Staff';} ?></td>
								<td><?php if($row['status'] == '1'){
									echo '<center><div class="alert-success">Active</div></center>';
								}else{
									echo '<center><div class="alert-danger">Inactive</div></center>';
								}	
								 ?></td>
								
								<td><a href="#update_user<?php echo $id ?>" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a></td>
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
						jQuery("#user_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=user",
									data: formData,
									success: function(data){
										$('#retCode2').append(data);
									}
								});
									return false;
						});
						jQuery("#update_user").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=user",
                  data: formData,
                  success: function(html){
                   $('.retCodee').append(html);
                  
                  
                  }
                });
                  return false;
            });
						});
</script> 

<script type="text/javascript">
        $(function() {
            $("#user").dataTable(
        { "aaSorting": [[ 1, "asc" ]] }
      );
        });
    </script>
