
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12 col-md-offset-3">
				<div class="form-group">
			<label for="" class="col-sm-2">Grade:</label>
			<div class="col-sm-5">
			<select type="text" class="form-control" id="grade" onchange="filtered_grade()" required/>
			<option value="all">All</option>
			<option value="7">Grade 7</option>
			<option value="8">Grade 8</option>
			<option value="9">Grade 9</option>
			<option value="10">Grade 10</option>
		
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
	@media print{
		#report{
			position: fixed;
			top: 0px;
		}

</style>
				<h4><b>Grade: <?php echo ucwords($_GET['grade']);?></b></h4>
				<br>
			<table id="table">
				<thead>
					<tr>
						<th></th>
						<th>Name</th>
						<th>Grade & Section</th>
						<th>Adviser</th>
					</tr>
				</thead>
				<tbody>
					  <?php
					  include '../includes/db.php';
           $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ',midname) as sname,student_profile.status as statss FROM student_sy_status inner join student_profile on student_profile.student_id=student_sy_status.student_id where sy_id = '$sy_id'  and sy_status != 'Transferee' order by concat(grade,section,lastname,', ',firstname,' ',midname,lastname,', ',firstname,' ',midname) ASC ");
          $i = 1;
          while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
              <td style="text-align:center"><?php echo $i++ ?></td>
              <td class="text-center"><?php echo ucwords($row['sname'])?></td>
              <td class="text-center">Grade <?php echo $row['grade'].'-'.$row['section'] ?></td>
              <?php
               $query_teacher =mysqli_query($conn,"SELECT * FROM teacher_list where teacher_id = '".$row['teacher_id']."' ");
               $row_teacher = mysqli_fetch_assoc($query_teacher);
               ?>
              <td class="text-center"><?php echo ucwords($row_teacher['name']);?></td>
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
	function filtered_grade(){
		var id = $('#grade').val();

		$.ajax({
			url:'filtered_grade.php?grade='+id+'&sy_id=<?php echo $sy_id ?>',
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