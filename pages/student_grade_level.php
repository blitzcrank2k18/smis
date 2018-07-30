<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">
<div class="col-sm-4">
  <h4><b>
  <?php 
  if($_GET['grade_level'] == 'all'){
    echo 'All Enrolled Students';
  }else{
    echo 'Grade '.$_GET['grade_level'];
  } ?></b></h4></div>
<div class="alert alert-info col-sm-3" style="float:right;color:black !important">
	<center>
		<h4><b>SY:<?php echo $dsy ?></b></h4>
	</center>
</div>
<br>
<br>
<hr style="border-bottom:1px solid black"></hr>

</div>

<div class="col-md-12" id="list-body">
	<div class="panel panel-default">
        <div class="panel-heading">
          <b>List of Students</b>
        </div> 
        <div class="panel-body"> 
			
       <table id="students" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th class="col-md-1 text-center"></th>
        <th class="col-md-2 text-center">Name</th>
        <th class="col-md-1 text-center">Grade & Sec.</th>
        <th class="col-md-1 text-center">Adviser</th>
        <th class="col-md-1 text-center">Status</th>
        <th class="col-md-1 text-center"></th>
      </tr>
    </thead>
    <tbody>
    <?php
    include '../includes/db.php';
   if($_GET['grade_level'] == 'all'){
          $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ',midname) as sname,student_profile.status as statss FROM student_sy_status inner join student_profile on student_profile.student_id=student_sy_status.student_id where sy_id = '$sy_id'  and sy_status != 'Transferee'  ");
                   
         
   }else{
    $query=  mysqli_query($conn, "SELECT *,concat(lastname,', ',firstname,' ',midname) as sname,student_profile.status as statss FROM student_sy_status inner join student_profile on student_profile.student_id=student_sy_status.student_id  where student_sy_status.grade = '".$_GET['grade_level']."' and '$sy_id' and sy_status != 'Transferee' ");
         
        
   }
       while($row = mysqli_fetch_assoc($query)) {  
       $id =$row['student_id']; 
    ?>
      <tr>


       <td class="text-center"><center><img src="../images/<?php echo $row['pic'] ?>" height="75px" width="60px" alt=""></center></td>
       <td class="text-left"><?php echo ucwords($row['sname']) ?></td>
       <td class="text-center"><?php echo $row['grade'] ."-".$row['section'] ?></td>
       <td class="text-left"><?php echo ucwords($row['name']) ?></td>
       <td class="text-center"> <?php echo $row['sy_status'] ?> </td>
       <td class="text-center"><center><a href="smis.php?request=academic_record&student_id=<?php echo $id ?>&grade=<?php echo $_GET['grade_level'] ?>&form=record" ><i class='fa fa-eye'></i> View Record</a></center></td>
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
<div id="retCode"></div>



<script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 1, "asc" ]] }
      );
        });
    </script>
     
<!-- ,
             -->
</div>