<style>
	#table{
		border-collapse: collapse;
		width: 100%;
	}
	th{
		border:1px solid black;
	}
	td{
		border:1px solid black;
	}
</style>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12 col-md-offset-3">
				<div class="form-group">
			<label for="" class="col-sm-2">School Year:</label>
			<div class="col-sm-5">
			<select type="text" class="form-control" id="sy_id" onchange="filtered_promoted()" required/>
			<option selected disabled>-- Select Year --</option>
			<?php
				include '../includes/db.php';
				$query_sy = mysqli_query($conn,"SELECT * FROM school_year order by sy DESC");
				while( $sy_row=mysqli_fetch_assoc($query_sy) ){ ?>
					<option value='<?php echo $sy_row['sy_id'] ?>'><?php echo $sy_row['sy']; ?></option>
			<?php	}
			 ?>
			</select>
		</div>
		</div>
			</div>
		</div>
	</div>
	<button type="button" onclick="print_report('report')" class="btn btn-info pull-right"><i class="fa fa-fw fa-print"></i> Print</button>
	<br>
	<br>
	<div class="panel panel-default">
		<div class="panel-body">
			<div id="report">
			<style>
	#table{
		border-collapse: collapse;
		width: 100%;
	}
	th{
		border:1px solid black;
	}
	td{
		border:1px solid black;
	}
</style>
				<h4><b>SY:<?php echo $dsy;?></b></h4>
				<br>
			<table id="table">
				<thead>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Grade & Section</th>
						<th>Average</th>
					</tr>
				</thead>
				<tbody>
					  <?php
					  include '../includes/db.php';
          $query = mysqli_query($conn,"SELECT *,CONCAT(lastname,' ',firstname,' ',midname) as name FROM student_sy_status
           inner join student_profile on student_profile.student_id=student_sy_status.student_id where student_sy_status.sy_id='$sy_id'
            and sss_id in (SELECT sss_id From promoted_students) order by grade ASC ");
          $i = 1;
          while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
              <td style="text-align:center"><?php echo $i++ ?></td>
              <td class="text-center"><?php echo ucwords($row['name'])?></td>
              <td class="text-center">Grade <?php echo $row['grade'].'-'.$row['section'] ?></td>
              <td class="text-center"><?php if(isset($row['average']) && $row['average'] != ''){ echo $row['average'];}else{ echo 'Update Record';}?></td>
            </tr>
          <?php
          }
         ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<script>
	function filtered_promoted(){
		var id = $('#sy_id').val();

		$.ajax({
			url:'filtered_promoted.php?id='+id,
			beforeSend:function(){
				$('#report').html("Please wait.");
			},
			success:function(html){
				$('#report').html(html);
			}
		});
	}
	function print_report(i){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(i).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>