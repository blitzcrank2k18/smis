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
           $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ',midname) as sname,student_profile.status as statss FROM student_sy_status inner join student_profile on student_profile.student_id=student_sy_status.student_id where sy_id = '".$_GET['sy_id']."'  and sy_status != 'Transferee' and grade='".$_GET['grade']."' order by concat(grade,section,lastname,', ',firstname,' ',midname,lastname,', ',firstname,' ',midname) ASC ");
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