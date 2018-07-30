<div class="col-lg-12">

<?php include '../includes/msg_box.php'; ?>	
<div class="col-md-12">

	<h4><b>Academic Record's</b></h4>
<hr style="border-bottom:1px solid black"></hr>

</div>
<div class="col-md-12">
	<div class="panel panel-info">
		<div class="panel-body">
			<div class="col-sm-4 cols-sm-offset-3 text-right"><label for="student">Select Student:</label></div>
			<div class="col-sm-5"><select id="student" class="form-control chosen-select" onchange="student()">
			<option></option>
			<?php
				$student_query= mysqli_query($conn,"SELECT *,CONCAT(lastname,', ',firstname,' ', midname) as name from student_profile order by name ");
				while($s_row = mysqli_fetch_assoc($student_query)){
					$sid= $s_row['student_id'];
					
			 ?>
			 		<option  value="<?php echo $sid ?>" <?php if( $_GET['student_id'] == $sid){ ?> selected="" <?php } ?> ><?php echo ucwords($s_row['name']). ' [LRN:' . $s_row['lrn_no'] .']' ?></option>
			 <?php } ?>

			 </select></div>
		</div>
	</div>
</div>
</div>
<div id="retCode">
	<?php if(isset($_GET['student_id'])){ include "records.php"; } ?>

</div>
<script>
	jQuery(document).ready(function(){
		$('#add-form').hide();
		$('#validate').hide();
						jQuery("#student-form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=student_profile",
									data: formData,
									success: function(data){
										$('#retCode').append(data);
									}
								});
									return false;
						});
						});
		function student (){
			var id = $('#student').val();
				window.location.href="smis.php?request=academic_record&student_id="+id+"&grade=7&form=record";
		}
</script>    

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