<?php include '../includes/db.php' ?>
<!-- subject Modal -->
<div id="subject<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i>Edit Subject 
                     </h4> 
                   
                  </div> 
                       <form method="POST" id='update_subject' > 
 <div class="modal-body">

   
    <div class="form-horizontal">
          <div id="retCode<?php echo $id ?>"></div>
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Subject</label>
          <div class="col-sm-8">
          <input name="id" value='<?php echo $id; ?>' type='hidden'>
            <input class="form-control" style="text-transform:capitalize" id="" name="subject" type="text" value="<?php echo $row['subject'] ?>" required>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Descrition</label>
          <div class="col-sm-8">

            <textarea class="form-control" style="height:100px" id="" name="desc" required><?php echo $row['description'] ?></textarea>
          </div>
        </div>

    </div>
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-info btn-sm" id="btn_sub"><i class="fa fa-save"></i> Save</button>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="fa fa-times"></i> Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>
          <!-- teacher Modal -->
<div id="e_teacher<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i>Edit Teacher 
                     </h4> 
                   
                  </div> 
                       <form method="POST" id='update_teacher' > 
 <div class="modal-body">

   
    <div class="form-horizontal">
          <div id="e_retCode<?php echo $id ?>"></div>
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Name</label>
          <div class="col-sm-8">
          <input name="id" value='<?php echo $id; ?>' type='hidden'>
            <input class="form-control" style="text-transform:capitalize" id="" name="name" type="text" value="<?php echo $row['name'] ?>" required>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Grade</label>
          <div class="col-sm-8">

            <select class="form-control" id="" name="grade" required>
              <option value="<?php echo $row['grade'] ?>">Grade <?php echo $row['grade'] ?></option>
              <?php if($row['grade'] != '7'): ?><option value="7">Grade 7</option><?php endif ?>
              <?php if($row['grade'] != '8'): ?><option value="8">Grade 8</option><?php endif ?>
              <?php if($row['grade'] != '9'): ?><option value="9">Grade 9</option><?php endif ?>
              <?php if($row['grade'] != '10'): ?><option value="10">Grade 10</option><?php endif ?>
            </select>
          </div>
        </div>
        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Section</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" id="" name="section" type="text" value="<?php echo $row['section'] ?>" required>
          </div>
        </div>

    </div>
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-info btn-sm" id="btn_sub"><i class="fa fa-save"></i> Save</button>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="fa fa-times"></i> Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>
<!-- subject sy -->
<div id="d_teacher<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                  <form method="POST" id='del_teacher' > 
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                     <h4 class="modal-title" id='head'>
                     <i class=""></i>Are you sure you want to remove this data? 
                     </h4> 
                   
                  </div> 
                       

          <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-sm" id="btn_sub"> Yes</button>
                <button data-dismiss="modal" class="btn btn-warning btn-sm"> No</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>
<div id="d_setting<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                  <form method="POST" id='del_setting' > 
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                     <h4 class="modal-title" id='head'>
                     <i class=""></i>Are you sure you want to remove this data? 
                     </h4> 
                   
                  </div> 
                       

          <div class="modal-footer">
               <button type="submit" class="btn btn-success btn-sm" id="btn_sub"> Yes</button>
                <button data-dismiss="modal" class="btn btn-warning btn-sm"> No</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>

<!-- subject sy -->
<div id="sy<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i>Edit School Year 
                     </h4> 
                   
                  </div> 
                       <form method="POST" id='update_sy' > 
 <div class="modal-body">

   
    <div class="form-horizontal">
          <div id="syretCode<?php echo $id ?>"></div>
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Subject</label>
          <div class="col-sm-8">
          <input name="id" value='<?php echo $id; ?>' type='hidden'>
            <input class="form-control" style="text-transform:capitalize" id="" name="sy" type="text" value="<?php echo $row['sy'] ?>" required>
          </div>
        </div>
        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Make default</label>
          <div class="col-sm-8">
          <input name="id" value='<?php echo $id; ?>' type='hidden'>
            <select class="form-control" name="status" required>
            <option value="<?php echo $row['status'] ?>"> <?php if($row['status'] == '1'){echo 'Yes';}else{echo 'No';} ?></option>
            <?php if($row['status'] == '1'){ ?><option value="2">No</option><?php } ?> 
            <?php if($row['status'] == '2'){ ?><option value="1">Yes</option><?php } ?> 
            </select>
          </div>
        </div>
    </div>
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-info btn-sm" id="btn_sub"><i class="fa fa-save"></i> Save</button>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="fa fa-times"></i> Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>
      <!-- update student -->
<div id="profile<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-lg">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title head" id='head'>
                     <i class=""></i>Profile
                     </h4> 
                   
                  </div> 
                        
 <div class="modal-body">
<div class="container">
<div class="col-md-2">
  <img src="../images/<?php echo $row['pic'] ?>" width="100px" height="120px" alt="">
</div>
 <div class="col-md-9">
  <div class="row">
   <label class="col-sm-3 control-label">LRN</label>
    <label class="col-sm-9 control-label">: <?php echo $row['lrn_no'] ?></label>
  </div>
  <div class="row">
    
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Gender</label>
    <label class="col-sm-9 control-label">: <?php echo $row['gender'] ?></label>
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Birthday</label>
    <label class="col-sm-9 control-label">: <?php echo date("F d,Y",strtotime($row['bday'])) ?></label>
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Birth Place</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['birthplace']) ?></label>
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Address</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['address']) ?></label>
  </div>
 <div class="row">
    <label class="col-sm-3 control-label">Contact no.</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['contact']) ?></label>
  </div>

  <div class="row">
    <label class="col-sm-3 control-label">Parent/Guardian</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['guardian']) ?></label>
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Guardian Occupation</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['guardian_occupation']) ?></label>
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Guardian Contact no.</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['guardian_contact']) ?></label>
  </div>
  <div class="row">
    <label class="col-sm-3 control-label">Status</label>
    <label class="col-sm-9 control-label">: 
      <?php if($row['status']== '1'){ echo 'Active'; }elseif($row['status']== '2'){ echo 'Stop'; }elseif($row['status']== '3'){ echo 'Transferred'; }elseif($row['status']== '4'){ echo 'Graduated'; } ?>
    </label>
  </div>

   <div class="row">
    <label class="col-sm-3 control-label">Elementary Course Completed</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['course_completed']) ?></label>
  </div>
   <div class="row">
    <label class="col-sm-3 control-label">School</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['e_school']) ?></label>
  </div>
   <div class="row">
    <label class="col-sm-3 control-label">School Year</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['e_sy']) ?></label>
  </div>
   <div class="row">
    <label class="col-sm-3 control-label">General Average</label>
    <label class="col-sm-9 control-label">: <?php echo ucwords($row['e_gen_ave']) ?></label>
  </div>
  
 </div>
  
        
         
</div>
</div>
    <div class="modal-footer">
               <a href="smis.php?request=edit_student&id=<?php echo $row['student_id'] ?>" class="btn btn-info btn-sm" id="btn_sub"><i class="fa fa-pencil"></i> Edit</a>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="fa fa-times"></i> Close</button>
</div>

       
              </div> 
            </div>
          </div>
       

<!-- Change Picture -->
<div id="change_pic<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i>Change <?php echo ucwords($row['name'])."'s" ?> Picture
                     </h4> 
                   
                  </div> 
                       <form method="POST" action="../forms/update_forms.php?action=new_pic" enctype="multipart/form-data"> 
 <div class="modal-body">

   
    <div class="form-horizontal">
          
        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Upload :</label>
          <div class="col-sm-8">
          <input name="id" value='<?php echo $id; ?>' type='hidden'>
          <input type="file" name="file" class="form-control">
            </select>
          </div>
        </div>
    </div>
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-info btn-sm" id="btn_sub"><i class="fa fa-save"></i> Save</button>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="fa fa-times"></i> Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>

    <!-- Update User -->
<div id="update_user<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i> Edit User
                     </h4> 
                 
                  </div> 
                       <form method="POST" id='update_user' > 
 <div class="modal-body">

   
    <div class="form-horizontal">
        
        <div class="form-group" id="form-login">
            <div class="col-sm-12">
             <div class="retCodee">
               <div class="alert alert-success suc_msg" id="">
               <h4><i class="fa fa-check"></i> Data successfully added.</h4>
             </div>
             <div class="alert alert-danger err_msg" id="">
               <h4><i class="fa fa-times"></i> Data failed to add.</h4>
             </div>
             </div>
             </div>
        </div>
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Last Name:</label>
          <div class="col-sm-8">
            <input name="id" type="hidden" value="<?php echo $id ?>" required>
            <input class="form-control" style="text-transform:capitalize" id="" value="<?php echo $row['lname'] ?>" name="lname" type="text"  required>
          </div>
        </div>
   
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">First Name:</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" value="<?php echo $row['fname'] ?>" id="" name="fname" type="text"  required>
          </div>
        </div> 

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Username:</label>
          <div class="col-sm-8">
            <input class="form-control"  id="" name="uname" type="text" value="<?php echo $row['username'] ?>" required>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">New Password:</label>
          <div class="col-sm-8">
            <input class="form-control"  id="" name="pass" type="password"  required>
          </div>
        </div>

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">User Type:</label>
          <div class="col-sm-8">
            <select class="form-control"  name="utype" type="text"  required>
            <option value="<?php echo $row['user_type'] ?>"><?php if($row['user_type'] == '1'){ echo "Administrator";}else{ echo "Staff";} ?></option>
            <?php if($row['user_type']  != '1'){ ?><option value="1">Administrator</option> <?php } ?>
            <?php if($row['user_type']  != '2'){ ?><option value="2">Staff</option> <?php } ?>
            </select>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Status:</label>
          <div class="col-sm-8">
            <select class="form-control"  name="status" type="text"  required>
            <option value="<?php echo $row['status'] ?>"><?php if($row['status'] == '1'){ echo "Active";}else{ echo "Inactive";} ?></option>
            <?php if($row['status']  != '1'){ ?><option value="1">Active</option> <?php } ?>
            <?php if($row['status']  != '2'){ ?><option value="2">Inactive</option> <?php } ?>
            </select>
          </div>
        </div>

        
    </div>
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-info btn-sm" id="btn_sub">Save</button>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-close"></i>Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>




  <script>
  jQuery(document).ready(function(){
           $(".eview").hide();
           $(".err_msg").hide();
           $(".suc_msg").hide();

            jQuery("#update_subject").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=subject",
                  data: formData,
                  success: function(html){
                   $('#retCode<?php echo $id ?>').append(html);
                  
                  
                  }
                });
                  return false;
            });

             jQuery("#update_teacher").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=teacher",
                  data: formData,
                  success: function(html){
                   $('#e_retCode<?php echo $id ?>').append(html);
                  
                  
                  }
                });
                  return false;
            });
             jQuery("#del_teacher").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=del_teacher",
                  data: formData,
                  success: function(html){
                   if(html = true){
                    window.location.href = 'smis.php?request=teacher_list';
                   }
                  
                  
                  }
                });
                  return false;
            });
              jQuery("#del_setting").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=del_setting",
                  data: formData,
                  success: function(html){
                   if(html = true){
                    window.location.href = 'smis.php?request=elnhs_setting';
                   }
                  
                  
                  }
                });
                  return false;
            });

            

            jQuery("#update_sy").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=sy",
                  data: formData,
                  success: function(html){
                   $('#syretCode<?php echo $id ?>').append(html);
                  
                  
                  }
                });
                  return false;
            });


            });

  function edit_profile(){
    $(".viewo").hide();
    $(".eview").show();
    $(".head").html('Edit Profile');
  }
  function close_mod(i){
    $(".viewo").show();
    $(".eview").hide();
    $(".head").html('Profile');
    $("#profile"+i).modal('hide');
  }
</script>