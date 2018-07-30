<!-- New User -->
<div id="new_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i> New User
                     </h4> 
                 
                  </div> 
                       <form method="POST" id='user_form'  > 
 <div class="modal-body">

   
    <div class="form-horizontal">
        
        <div class="form-group" id="form-login">
            <div class="col-sm-12">
             <div id="retCode2">
               <div class="alert alert-success" id="suc_msg">
               <h4><i class="fa fa-check"></i> Data successfully added.</h4>
             </div>
             <div class="alert alert-danger" id="err_msg">
               <h4><i class="fa fa-times"></i> Data failed to add.</h4>
             </div>
             </div>
             </div>
        </div>
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Last Name:</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" id="" name="lname" type="text"  required>
          </div>
        </div>
   
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">First Name:</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" id="" name="fname" type="text"  required>
          </div>
        </div> 

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Username:</label>
          <div class="col-sm-8">
            <input class="form-control"  id="" name="uname" type="text"  required>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Password:</label>
          <div class="col-sm-8">
            <input class="form-control"  id="" name="pass" type="password"  required>
          </div>
        </div>

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">User Type:</label>
          <div class="col-sm-8">
            <select class="form-control"  name="utype" type="text"  required>
            <option disabled="" selected="">==Select==</option>
            <option value="1">Administrator</option>
            <option value="2">Staff</option>
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

<!-- New Project Modal -->
<div id="new_project" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i> New Project
                     </h4> 
                 
                  </div> 
                       <form method="POST" id='proj_form'  > 
 <div class="modal-body">

   
    <div class="form-horizontal">
        
        <div class="form-group" id="form-login">
            <div class="col-sm-12">
             <div id="retCode2">
               <div class="alert alert-success" id="suc_msg2">
               <h4><i class="fa fa-check"></i> Data successfully added.</h4>
             </div>
             <div class="alert alert-danger" id="err_msg2">
               <h4><i class="fa fa-times"></i> Data failed to add.</h4>
             </div>
             </div>
             </div>
        </div>
         <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Proposed Project:</label>
          <div class="col-sm-8">
           <select type="text" class="form-control input-sm" style="text-transform:capitalize" autocomplete="off" name="p_type" id="p_type" onchange="div_field()" required/>
          <option id="p_typ"></option>
          <option value="1">Building</option>
          <option value="2">House</option>
          <option value="3">Highways</option>
          </select>
          </div>
        </div>
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Project Name:</label>
          <div class="col-sm-8">
            <input class="form-control" style="text-transform:capitalize" id="" name="pname" type="text"  required>
          </div>
        </div>
   
      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Location:</label>
          <div class="col-sm-8">
            <textarea class="form-control" style="text-transform:capitalize" id="" name="location" type="text"  required></textarea>
          </div>
        </div> 

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Cost:</label>
          <div class="col-sm-6">
            <input class="form-control" style="text-align:right" id="cc" name="cost" type="text" placeholder="Php.">
          </div>
        </div>

      <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Deadline:</label>
          <div class="col-sm-8">
            <input class="form-control"  id="" name="deadline" type="date"  required>
          </div>
        </div>

        <div class="form-group" id="form-login">
          <label class="col-sm-4 control-label">Head Engineer:</label>
          <div class="col-sm-8">
            <select class="form-control"  id="" name="eid" type="text"  required>
            <option></option>
            <?php
            include '../includes/db.php';
              $pos_query = mysqli_query($conn,"SELECT *,Concat(lastname,', ',firstname,' ',midname) as name FROM employee order by name ASC");
              while($pos_row = mysqli_fetch_assoc($pos_query)){
             ?>
            <option style="text-transform:capitalize" value="<?php echo $pos_row['eid'] ?>"><?php echo $pos_row['name'] ?></option>
            <?php } ?>
            </select>
          </div>
        </div>

        
            <div id="div-field"></div>
         

       
    
    </div>
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-info btn-sm" id="btn_sub"><i class="fa fa-save"></i> Save</button>
                <button data-dismiss="modal" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-close"></i>Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>

<script>
  jQuery(document).ready(function(){
      $('#suc_msg2').hide();
      $('#err_msg2').hide();
      $('#suc_msg').hide();
      $('#err_msg').hide();


});

  function div_field(){
    var id = $('#p_type').val();
    $.ajax({
                  url: "div_field.php?id="+id,
                  success: function(html){
                    $('#div-field').html(html);
                   
                  }
                });

  }
</script>