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
 <?php
  include '../includes/db.php';
  $sy_query = mysqli_query($conn,"SELECT * from school_year where sy_id = '".$_GET['id']."'");
  $sy_row = mysqli_fetch_assoc($sy_query);
  ?>
<h4><b>SY:<?php echo $sy_row['sy'];?></b></h4>
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
          $query = mysqli_query($conn,"SELECT *,CONCAT(lastname,' ',firstname,' ',midname) as name FROM student_sy_status
           inner join student_profile on student_profile.student_id=student_sy_status.student_id where student_sy_status.sy_id='".$sy_row['sy_id']."'
            and sss_id in (SELECT sss_id From promoted_students) order by grade ASC ");
          $i = 1;
          if(mysqli_num_rows($query) >= 1){
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
      }else{
      	echo '<tr><td colspan="4">No Data.</td></tr>';
      }
         ?>
				</tbody>
			</table>