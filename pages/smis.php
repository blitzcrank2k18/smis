<?php include '../includes/auth.php';
      include '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<style>
    #page-wrapper {
    background-color: rgb(241, 241, 241) !important;
}
</style>
<body style="background-color:rgba(241, 241, 241, 0.9) !important">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col-md-1">
                </div>
                                
                <a class="navbar-brand" href=""><b>&nbspEjegenio Lizares National High School</b></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                <?php echo $_SESSION['NAME']?>
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                   
                    <!-- <li>
                         <a href="#manage_account" data-toggle="modal" ><i class="fa fa-fw fa-pencil"></i>Account</a>
                    </li> -->
                   <li class="divider"></li>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php  include '../includes/sidebar.php'; ?>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="page-wrapper">

            <div class="container-fluid">

<?php
error_reporting(E_ALL ^ E_NOTICE);

$page = $_GET['request'];
$pages = array('form_record','home','subject_list','sy','student_list','academic_record','update_record','update_record2','student_grade_level','honored_students','elnhs_setting','promoted_report','student_list_report'
  ,'update_progress','users','attendance','edit_student','teacher_list','enroll_students','student_promotion','honor_by_grade');
if (!empty($page)) {
    if(in_array($page,$pages)) {
        $page .= '.php';
        include($page);
    }
    else {
        echo 'Page not found. Return
        <a href="smis.php?request=home">home</a>';
    }
}

?>

            </div>
        </div>
        </div>

        <div id="manage_account" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-md">  
             
                  <div class="modal-header"> 
                     <h4 class="modal-title" id='head'>
                     <i class=""></i> Manage Account
                     </h4> 
                     <div id="retCode10"></div>
                  </div> 
 <div class="modal-body">
  
    <div class="form-horizontal">

  <?php
    include '../includes/db.php';
   
      $query2=  mysqli_query($conn, "SELECT *,CONCAT(lastname,', ',firstname,' ',midname) as name,users.io as status FROM users natural join employee where uid = '".$_SESSION['UID']."' ");
       $row2 = mysqli_fetch_assoc($query2);  
    ?>
  <div id="retCode1"><div class="alert alert-success" id="msg20"><i class="fa fa-check"></i> Data successfully updated. </div></div>
  <div id="retCode1"><div class="alert alert-danger" id="msg21"><i class="fa fa-check"></i> Password is Incorrect. </div></div>
    <form id="update_user_form2" method="POST">
    <div class="form-group">
    
       <input type="hidden"  value="<?php echo $row2['uid'] ?>" name="uid">

    </div>
    </div>
<br>
<br>
     <div class="form-group">
    <div class="col-sm-4 text-right"><label for="us">Username:</label></div>
    <div class="col-sm-8">
   <input type="text" class="form-control input-sm" id="us" value="<?php echo $row2['username'] ?>" name="user">
    </div>
    </div>
<br>
<br>
    <div class="form-group">
    <div class="col-sm-4 text-right"><label for="npass">New Password:</label></div>
    <div class="col-sm-8">
   <input type="password" class="form-control input-sm" id="npass" name="npass">
    </div>
    </div>
<br>
<br>
    <div class="form-group">
    <div class="col-sm-4 text-right"><label for="cpass">Current Password:</label></div>
    <div class="col-sm-8">
   <input type="password" class="form-control input-sm" id="cpass"  name="current">
    </div>
    </div>
<br>



 
   </div>
          <div class="modal-footer">
               <button type="submit" class="btn btn-md btn-info" id="btn_sub"><i class="fa fa-save"></i> Save</button>
                <button data-dismiss="modal" class="btn btn-md btn-info"><i class="glyphicon glyphicon-close"></i>Close</button>
            </form>
                     </div>
                     </div> 
            </div>
          </div>

</body>
<!--
<footer>
    <center>All rights reserved © 2018</center>
</footer>
-->
    <script src="assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
 <script>
    $(document).ready(function(){
      $('#msg20').hide();
      $('#msg21').hide();
    });
     jQuery("#update_user_form2").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/update_forms.php?action=user2",
                  data: formData,
                  success: function(html){
                    $('#retCode10').append(html);
                  }
                });
                  return false;
            });
  </script>

</html>
