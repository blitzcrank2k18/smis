
<div class="col-lg-12">

<div class="col-md-2">
	<h4><b>Enroll Student</b></h4></div>
<div class="alert alert-info col-sm-3" style="float:right;color:black !important;height:50px !important">
	<center>
		<h4><b>SY:<?php echo $dsy ?></b></h4>
	</center>
</div>
<br>
<br>
<hr style="border-bottom:1px solid black"></hr>
</div>
<div class="col-lg-12">
<div id="retCode"></div>
<div class="panel panel-default">
<div class="panel-body">
<form method="POST" id="enroll">
<input type="hidden" name="sy" value="<?php echo $sy_id; ?>">
<div class="row">
<div class="col-md-6">
	<div class="form-group">
			<div class="col-sm-3"><label class="control-label">Student Name:</label></div>
			<div class="col-sm-9">
			<select style="text-transform:capitalize" class="form-control chosen-select" onchange="get_data()" data-placeholder="Students" name="student_id" id="student_id" autocomplete="off" required/>\
			<option disabled=""></option>
			<?php
			include '../includes/db.php';
				$student_query= mysqli_query($conn,"SELECT *,CONCAT(lastname,', ',firstname,' ', midname) as name from student_profile where student_id NOT IN (SELECT student_id from student_sy_status where sy_id = '$sy_id' ) order by name ");
				while($s_row = mysqli_fetch_assoc($student_query)){
					$sid= $s_row['student_id'];
					
			 ?>
			 		<option  value="<?php echo $sid ?>" <?php if( $_GET['student_id'] == $sid){ ?> selected="" <?php } ?> ><?php echo ucwords($s_row['name']). ' [LRN:' . $s_row['lrn_no'] .']' ?></option>
			 <?php } ?>
			</select>
			</div>
	</div>
	</div>
	<div id="enroll_form">
	</div>
	</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  <script>
  	function get_data(){
  		var id= $('#student_id').val();
  		$.ajax({
  			url:'get_data.php?id='+id,
  			success:function(html){
  				$('#enroll_form').html(html);
  			}
  		});
  	}
  </script>
  <script>
	function get_section(){
		var grade = $('#grade').val();
		var section = $('#section').val();
		if(section != ''){
		$.ajax({
			url:'../forms/update_forms.php?action=section&grade='+grade+'&section='+section+'&sy=<?php echo $sy_id ?>',
			success:function(data){
				$('#advisory').html(data);
			}
		});
	}else{
		$('#advisory').html('');
		$('#adviser').val('');
	}
	}
</script>
<script>
	jQuery(document).ready(function(){
						jQuery("#enroll").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								if($('#adviser').val() != ''){
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=enroll",
									data: formData,
									success: function(data){
										$('#retCode').html(data);
									
									}
								});
							}else{
								return false;
							}
									return false;
						});
						});
</script>