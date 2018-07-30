<div class="col-lg-12">

<?php include '../includes/db.php'; ?>	
<div class="col-md-12">
<div class="col-sm-4">
  <h4><b>Student Promotion</b></h4></div>
<div class="alert alert-info col-sm-3" style="float:right;color:black !important">
	<center>
		<h4><b>SY:<?php echo $dsy ?></b></h4>
	</center>
</div>
<br>
<br>
<hr style="border-bottom:1px solid black"></hr>

</div>
</div>
</div>
<?php
if($_GET['status'] == '1'){ $cand = 'btn-success';}else{ $cand = 'btn-default';}
if($_GET['status'] == '2'){ $prom = 'btn-success';}else{ $prom = 'btn-default';}
 ?>
<div class="col-lg=-12">
  <div id="retCode"></div>
</div>

<div class="col-lg-12">
  <a href="smis.php?request=student_promotion&sy=<?php echo $dsy ?>&status=1" class="btn <?php echo $cand ?> pull-left">Candidates</a>
  <a href="smis.php?request=student_promotion&sy=<?php echo $dsy ?>&status=2" class="btn <?php echo $prom ?> pull-left">Promoted</a>
  <div class="panel panel-info pull-left">
  <div class="panel-head">
    
  </div>

  <div class="panel-body">
    <?php
      if($_GET['status']=='1'){
        include 'candidates.php';
      }else{
        include 'promoted.php';
      }
     ?>
  </div>
  </div>
</div>

<script>
    jQuery(document).ready(function(){
            jQuery("#promotes").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/add_forms.php?action=promote&sy_id=<?php echo $sy_id ?>",
                  data: formData,
                  beforeSend:function(){

                      $('#retCode').html('Loading...');
                  },
                  success: function(html){
                      $('#retCode').html(html);
                          }
                });
                  return false;
            
            });
            });
  
</script>
<script>
    jQuery(document).ready(function(){
            jQuery("#revoke").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "../forms/add_forms.php?action=revoke&sy_id=<?php echo $sy_id ?>",
                  data: formData,
                  beforeSend:function(){

                      $('#retCode').html('Loading...');
                  },
                  success: function(html){
                      $('#retCode').html(html);
                          }
                });
                  return false;
            
            });
            });
  
</script>

     <script>
        $("#select_all").click(function() 
{   $('.sss_id').prop("checked", $(this).prop("checked"));
});


  </script>

<script type="text/javascript">
        $(function() {
            $(".promotion").dataTable(
        { "aaSorting": [[ 1, "asc" ],[ 2, "asc" ]],
          "serverSide":true,
          "columnDefs":{
            "order-target":[0],
            "orderable":false
          } 
      }
      );
        });
    </script>