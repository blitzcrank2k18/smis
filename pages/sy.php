<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
	<h4>School Year</h4>

<hr style="border-bottom:1px solid black"></hr>
</div>
<div class="col-md-4">
	<div class="panel panel-info">
	<div class="panel-heading"><b>New School Year</b></div>
		<div class="panel-body">
			<form method="POST" >
				<div class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-12"><input type="text" style="text-transform:capitalize" class="form-control input-sm" placeholder="Enter Subject" name="sy" id="sy" autocomplete="off" required/></div>
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

<div class="col-md-8">
	<div class="panel panel-default">
        <div class="panel-heading">
          <b>List of School year</b>
        </div> 
        <div class="panel-body"> 
			
       <table id="sy-table" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-2 text-center">School Year</th>
        <th class="col-md-1 text-center">Default?</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../includes/db.php';
   
      $query=  mysqli_query($conn, "SELECT * FROM school_year");
         while($row = mysqli_fetch_assoc($query)) {   
         $id =$row['sy_id']; 

    ?>
      <tr>


       <td class="text-left"><?php echo ucfirst($row['sy']) ?></td>
       <td class="text-left"><?php if($row['status'] == '1'){ echo 'Yes'; }else{ echo 'No'; } ?></td>
       <td class="text-center"><center><a href="#sy<?php echo $id ?>" data-toggle="modal"><i class='fa fa-edit'></i> Edit</a></center></td>
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
<?php include '../includes/msg_box.php'; ?> 
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){


  $sy = $_POST['sy'];

  
  if($query = mysqli_query($conn,"INSERT INTO school_year (sy,status)VALUES('$sy','2')")){
    echo '<script>
      $("#data_msg").modal("show");
        setTimeout(function(){  window.location = "smis.php?request=subject_list";   }, 1500);
    </script>';
  }else{
    echo "alert('Failed')";
  }

 } 
 ?>


<script type="text/javascript">
        $(function() {
            $("#sy-table").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
    </script>

<!-- ,
             -->
</div>