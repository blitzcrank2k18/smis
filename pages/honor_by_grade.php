<h3><b>Grade <?php echo $_GET['grade'] ?></b></h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="col-md-1 text-center">Rank</th>
							<th class="col-md-2 text-center">Name</th>
							<th class="col-md-1 text-center">Grade&Section</th>
							<th class="col-md-1 text-center">Average</th>
						</tr>
					</thead>
				<tbody>
					<?php
					include('../includes/db.php');
					$query = mysqli_query($conn,"SELECT * FROM student_sy_status where grade = '".$_GET['grade']."' and sy_id = '".$_GET['sy']."' and student_sy_status.average != '' group by average order by average DESC  limit 10");
				
					while($row = mysqli_fetch_assoc($query)){
						$query2 = mysqli_query($conn,"SELECT *,concat(lastname,', ',firstname,' ',midname) as name,@row_number :=IFNULL(@row_number, 0) + 1 as row_number  from student_sy_status left join student_profile on student_sy_status.student_id = student_profile.student_id where grade = '".$_GET['grade']."' and sy_id = '".$_GET['sy']."' and student_profile.status = '1' and student_sy_status.average = '".$row['average']."' order by name");
						while($row2 = mysqli_fetch_assoc($query2)){
						?>
						<tr>
							<td class="text-center"><?php echo $row2['row_number'] ?></td>
							<td class="text-left"><?php echo ucwords($row2['name']) ?></td>
							<td class="text-center"><?php echo $row2['grade'].'-'.$row2['section'] ?></td>
							<td class="text-center"><?php echo $row2['average'] ?></td>
						</tr>
					<?php
					}}?>
					</tbody>
					</table>