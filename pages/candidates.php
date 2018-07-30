<form method="POST" id="promotes" action="">
<table id='' class="table table-bordered promotion">
    <button class="btn btn-info pull-right">Promote Selected</button>
    <br>
    <br>
     
      <thead>


        <tr>
            <th class="text-center" width="1%"><input type="checkbox" id="select_all"></th>
            <th class="text-center col-md-2">Name</th>
            <th class="text-center col-md-1">Grade</th>
            <th class="text-center col-md-1">Average</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $query = mysqli_query($conn,"SELECT *,CONCAT(lastname,' ',firstname,' ',midname) as name FROM student_sy_status
           inner join student_profile on student_profile.student_id=student_sy_status.student_id where student_sy_status.sy_id='$sy_id'
            and sss_id not in (SELECT sss_id From promoted_students)  ");
          while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
              <td><center><input type="checkbox" name="id[]" id="" class='checkbox-info sss_id' value="<?php echo $row['sss_id']?>"></center></td>
              <td><?php echo ucwords($row['name']) ?></td>
              <td class="text-center">Grade <?php echo $row['grade'].'-'.$row['section'] ?></td>
              <td class="text-center"><?php if(isset($row['average']) && $row['average'] != ''){ echo $row['average'];}else{ echo 'Update Record';}?></td>
            </tr>
          <?php
          }
         ?>

      </tbody>
    </table>
    </form>
