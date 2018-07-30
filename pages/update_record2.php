<style>
	input{
		border:0px solid black;
		width:100%;
		text-align: center;
		background-color: white;	
		text-transform: capitalize;
	}
	textarea{
		text-transform: capitalize;
	}
</style>
<form method="POST" id="update_grade">
<?php 
include "../includes/db.php";
$stud = mysqli_query($conn,"SELECT *,student_sy_status.status as stats from student_sy_status  left join student_profile on student_sy_status.student_id = student_profile.student_id left join school_year on student_sy_status.sy_id = school_year.sy_id  where  student_sy_status.student_id ='".$_GET['student_id']."' and student_sy_status.grade = '".$_GET['grade']."' ");
$t_row = mysqli_fetch_assoc($stud);
$sid= $t_row['sss_id'];
?>
<input type="hidden" name="id" value="<?php echo $t_row['sss_id'] ?>">
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12">
					<h4><b><?php echo ucfirst($t_row['firstname']) . " ". ucfirst(substr($t_row['midname'],0, 1)) . ". " . ucfirst($t_row['lastname']) ?></b></h4> <br>
			</div>

			<div class="row">
			<div class="col-md-4">
				<div class="form-horizontal">
		
		<div class="form-group">
			<label for="" class="col-sm-4">Grade:</label>
			<div class="col-sm-8">
			<input type="hidden" name="sy" value="<?php echo $sy_id; ?>">
			<input type="hidden" name="sid" value="<?php echo $_GET['student_id']; ?>">
			<select name="grade" class="form-control" id="grades" required/>
					<option value="<?php echo $t_row['grade'] ?>">
						<?php
						if($t_row['grade'] == '7'){
							echo "Grade 7";
						}elseif($t_row['grade'] == '8'){
							echo "Grade 8";
						}elseif($t_row['grade'] == '9'){
							echo "Grade 9";
						}elseif($t_row['grade'] == '10'){
							echo "Grade 10";
						}
					 ?>

					</option>
					<?php if($t_row['grade'] != '7'){ ?><option value="7">Garade 7</option> <?php } ?>
					<?php if($t_row['grade'] != '8'){ ?><option value="8">Garade 8</option> <?php } ?>
					<?php if($t_row['grade'] != '9'){ ?><option value="9">Garade 9</option> <?php } ?>
					<?php if($t_row['grade'] != '10'){ ?><option value="10">Garade 10</option> <?php } ?>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-4">Section:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="sec" id='sections' value="<?php echo $t_row['section'] ?>"  required/>
			
		</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-4">Adviser:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="adviser" id='adviser' value="<?php echo $t_row['adviser'] ?>"  required/>
			
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">School:</label>
			<div class="col-sm-8">
			<textarea type="text" class="form-control" name="school" id='school'  required/><?php echo $t_row['school'] ?></textarea>
			
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">School Address:</label>
			<div class="col-sm-8">
			<textarea type="text" class="form-control" name="school_address" id='school_address'  required/><?php echo $t_row['school_address'] ?></textarea>
			
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">School Year:</label>
			<div class="col-sm-8">
			<select type="text" class="form-control" name="sy_id" required/>
			<option value="<?php echo $t_row['sy_id'] ?>"><?php echo $t_row['sy'] ?></option>
			<?php
				include '../includes/db.php';
				$query_sy = mysqli_query($conn,"SELECT * FROM school_year order by sy DESC");
				while( $sy_row=mysqli_fetch_assoc($query_sy) ){ ?>
					<option value='<?php echo $sy_row['sy_id'] ?>'><?php echo $sy_row['sy']; ?></option>
			<?php	}
			 ?>
			</select>
		</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-4">Total no. of years in school:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="tns" value="<?php echo $t_row['number_in_school'] ?>" required/>
		</div>
		</div>

	<div class="form-group">
			<label for="" class="col-sm-4">Curriculum:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="curriculum" value="<?php echo $t_row['curriculum'] ?>" />
		</div>
	</div>

		<div class="form-group">
			<label for="" class="col-sm-4">Advance unit:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control text-right" name="advance" value="<?php echo $t_row['advance_unit'] ?>" >
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">Lack unit:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control text-right" name="lack" value="<?php echo $t_row['lack_unit'] ?>" >
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">To be classified as:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="tbc" value="<?php echo $t_row['classified_as'] ?>" />
		</div>
	</div>
	
</div>
			</div>
			<div class="col-md-8">
				<input type="hidden" id="row_count" value="4">
	<table  class="table table-bordered">
		<thead>
			<tr>
				<th style="width:30%;border-bottom: 0px solid black !important"><center>Subject</center></th>
				<th style="width:40%" colspan="4"><center>Period</center></th>
				<th style="width:15%;border-bottom: 0px solid black !important"><center>Final</center></th>
			</tr>
			<tr>
				<th style="border-top: 0px solid black !important"></th>
				<th style="width:10%"><center>1st</center></th>
				<th style="width:10%"><center>2nd</center></th>
				<th style="width:10%"><center>3rd</center></th>
				<th style="width:10%"><center>4th</center></th>
				<th style="border-top: 0px solid black !important"></th>
			</tr>
		</thead>
		<tbody id="gbody">
		<?php
			$g_row = mysqli_query($conn,"SELECT * from student_grade natural join subject_list where sss_id = '".$t_row['sss_id']."' ");
			while($grade= mysqli_fetch_assoc($g_row)){
				$i = '10'.$grade['sg_id'];
			 ?>
			 <input type="hidden" name="gid[]" value="<?php echo $grade['sg_id'] ?>">
			 <tr id="g<?php echo $grade['sg_id']; ?>">
				<td>
					<select name="ssubj[]" id="" required/>
						<option selected=""  value="<?php echo $grade['subject_id'] ?>"> <?php echo $grade['subject'] ?></option>
						<?php
							include "../includes/db.php";
							$s_query = mysqli_query($conn,"SELECT * FROM subject_list where subject_id != '".$grade['subject_id']."' order by subject");
							while($s_row = mysqli_fetch_assoc($s_query)){
								$sub_id = $s_row['subject_id'];
						 ?>
						<option value="<?php echo $sub_id ?>"><?php echo ucwords($s_row['subject']) ?></option>
						<?php } ?>
					</select>
				</td>
				<td> <input type="text" pattern="[0-9]{2}" class="g<?php echo $i ?>" value="<?php echo $grade['1grading'] ?>" name="1gg[]" onkeydown="calculateFinal(<?php echo $i ?>)" onkeyup="calculateFinal(<?php echo $i ?>)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g<?php echo $i ?>" value="<?php echo $grade['2grading'] ?>" name="2gg[]" onkeydown="calculateFinal(<?php echo $i ?>)" onkeyup="calculateFinal(<?php echo $i ?>)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g<?php echo $i ?>" value="<?php echo $grade['3grading'] ?>" name="3gg[]" onkeydown="calculateFinal(<?php echo $i ?>)" onkeyup="calculateFinal(<?php echo $i ?>)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g<?php echo $i ?>" value="<?php echo $grade['4grading'] ?>" name="4gg[]" onkeydown="calculateFinal(<?php echo $i ?>)" onkeyup="calculateFinal(<?php echo $i ?>)" required/></td>
				<td> <input type="text" class="fg" id="fg<?php echo $i ?>"  value="<?php echo $grade['final'] ?>" onkeydown="calculateAverage()" onkeyup="calculateAverage()" name="ffg[]" readonly/></td>
				<th width="5%"><a type="button" href="del_grade.php?id=<?php echo $grade['sg_id'] ?>" confirm="confirm('Are you sure you want to remove this?')">X</a></th>
			</tr>
		<?php } ?>
		</tbody>
		<tfooter>
			<tr>
			<th colspan="4"> General Average</th>
			<th colspan="2"><div id="gen"><?php echo $t_row['average'] ?></div>
			<input type="hidden" class="form-control text-right" name="ave" id="ave" value="<?php echo $t_row['average'] ?>" ></th>
		</tr>
		</tfooter>
		</table>
		<button type="button" onclick="new_rows()" style="float:right" id="btn_add" class="btn btn-sm btn-info"><i class="fa fa-plus"></i></button type="button" >
<br>
<br>
			 <table class="table-bordered" cellspacing="1" width="100%" >
       
          <tr>
            <th style="font-size:10px;text-align:center;width:100px">Months</td>
            <th style="font-size:10px;text-align:center;">Jun</td>
            <th style="font-size:10px;text-align:center;">Jul</td>
            <th style="font-size:10px;text-align:center;">Aug</td>
            <th style="font-size:10px;text-align:center;">Sept</td>
            <th style="font-size:10px;text-align:center;">Oct</td>
            <th style="font-size:10px;text-align:center;">Nov</td>
            <th style="font-size:10px;text-align:center;">Dec</td>
            <th style="font-size:10px;text-align:center;">Jan</td>
            <th style="font-size:10px;text-align:center;">Feb</td>
            <th style="font-size:10px;text-align:center;">March</td>
            <th style="font-size:10px;text-align:center;">April</td>
            <th style="font-size:10px;text-align:center;">May</td>
            <th style="font-size:10px;text-align:center;">Total</td>
          </tr>
          <tr>
            <td style="font-size:10px;text-align:center;width:100px">Days of School</td>
            <?php
            $atten= mysqli_query($conn, "SELECT * FROM student_attendance where sss_id = '$sid' order by att_id ");
            while($att=mysqli_fetch_assoc($atten)){



             ?>
            <td style="font-size:10px;text-align:center;">
            <input  type="hidden" name="att_id[]" value="<?php echo $att['att_id'] ?>" >
            <input  class="dc" type="text" name="dc[]" value="<?php echo $att['days_classes'] ?>" >
             </td>
            <?php } ?>
            
            <td style="font-size:10px;text-align:center;">
            <input id="tdc" type="text" name="Tdc" >
           </td>
          </tr>
          <tr>
            <td style="font-size:10px;text-align:center;width:100px">Days Present</td>
            <?php
            $atten2= mysqli_query($conn, "SELECT * FROM student_attendance where sss_id = '$sid' order by att_id ");
            while($att2=mysqli_fetch_assoc($atten2)){



             ?>
            <td style="font-size:10px;text-align:center;">
          
            <input  type="hidden" name="att_d[]" value="<?php echo $att2['att_id'] ?>" >
              <input style="border-bottom:0px;" class="p" type="text" name="pp[]" value="<?php echo $att2['days_present'] ?>" >
            </td>
           <?php } ?>
            <td style="font-size:10px;text-align:center;">
              <input type="text" id="tp" name="Tp" style="text-align:center;border-bottom:0px" >
            </td>
          </tr>
        
      </table>
	<br>
	</div>
	</div>
	<br>
			<div class="row">
			<div class="col-md-4">
			<div class="col-md-8">
				 
			</div>
			</div>
			<div class="col-md-12">
	<center>
		<button class="btn btn-sm btn-info">Update</button>
		<a class="btn btn-sm btn-info" onclick="location.replace(document.referrer)">Cancel</a>
	</center>
</div>
		</div>
	</div>
</div>
</form>
<div id="retCode"></div>
<script>
	function rem_row(i){
		$("#g"+i).remove();
		var sum2 = 0;
		$("input.fg").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value) ;
             $(this).css("background-color", "white");
        }
    });
  var ave = parseFloat(sum2)/ $('.fg').length  ;
  $("#ave").val(ave.toFixed(2));
  $("#gen").val(ave.toFixed(2));
  if($('.fg').length == 8){ $('#btn_add').hide(); }else{ $('#btn_add').show();}
	}
	function new_rows(){
		
var i = $(".fg").length;
		 var data = '<tr id="g'+i+'">'+
				'<td>'+
					'<select name="subj[]" id="" required="">'+
						'<option selected="" disabled="">--Select--</option>'+
						'<?php
													include "../includes/db.php";
													$s_query = mysqli_query($conn,"SELECT * FROM subject_list order by subject");
													while($s_row = mysqli_fetch_assoc($s_query)){
														$sub_id = $s_row["subject_id"];
												 ?>'+
						'<option value="<?php echo $sub_id ?>"><?php echo ucwords($s_row["subject"]) ?></option>'+
												'<?php }  ?>'+
					'</select>'+
				'</td>'+
				'<td> <input type="text" pattern="[0-9]{2}" class="g'+i+'" name="1g[]" onkeydown="calculateFinal('+i+')" onkeyup="calculateFinal('+i+')" required/></td>'+
				'<td> <input type="text" pattern="[0-9]{2}" class="g'+i+'" name="2g[]" onkeydown="calculateFinal('+i+')" onkeyup="calculateFinal('+i+')" required/></td>'+
				'<td> <input type="text" pattern="[0-9]{2}" class="g'+i+'" name="3g[]" onkeydown="calculateFinal('+i+')" onkeyup="calculateFinal('+i+')" required/></td>'+
				'<td> <input type="text" pattern="[0-9]{2}" class="g'+i+'" name="4g[]" onkeydown="calculateFinal('+i+')" onkeyup="calculateFinal('+i+')" required/></td>'+
				'<td><input type="text" class="fg" id="fg'+i+'"  onkeydown="calculateAverage()" onkeyup="calculateAverage()" name="fg[]" readonly/></td>'+
				'<th width="5%"><button type="button" onclick="rem_row('+i+')">X</button></th>'+
			'</tr>';
			$('#gbody').append(data);
var sum2 = 0;
		$("input.fg").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value) ;
             $(this).css("background-color", "white");
        }
    });
  var ave = parseFloat(sum2) / $('.fg').length  ;
  $("#ave").val(ave.toFixed(2));
  $("#gen").val(ave.toFixed(2));
  if($('.fg').length == 8){ $('#btn_add').hide(); }else{ $('#btn_add').show();}

	}
	
</script>
<script>
	jQuery(document).ready(function(){
		get_section();
		calculateSum();
		calculateFinal();
calculateAVE();
  $(".dc").on("keydown keyup", function() {
        calculateSum();
    });
    $(".p").on("keydown keyup", function() {
        calculateAVE();
    });

						jQuery("#update_grade").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/update_forms.php?action=update_record2",
									data: formData,
									success: function(data){
										$('#retCode').append(data);
									}
								});
									return false;
						});
						});

	function calculateFinal(i) {
    var sum = 0;
    var sum2 = 0;
    //iterate through each textboxes and add the values
    $("input.g"+i).each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value) / 4 ;
             $(this).css("background-color", "white");
        }
        else if (this.value.length != 0){
            $(this).css("background-color", "red");
        }
    });

    $("input.fg").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum2 += parseFloat(this.value) ;
             $(this).css("background-color", "white");
        }
    });
 
  $("input#fg"+i).val(sum.toFixed(0));
  $("#fgg"+i).html(sum.toFixed(0));
  var ave = parseFloat(sum2)/ $('.fg').length  ;
  $("#ave").val(ave.toFixed(2));
  $("#gen").html(ave.toFixed(2));
}

</script> 
 <script>
	function get_section(){
		var grade = $('#grades').val();
		var section = $('#sections').val();
		if(sections != ''){
		$.ajax({
			url:'../forms/update_forms.php?action=section&grade='+grade+'&section='+section+'&sy=<?php echo $sy_id ?>',
			success:function(data){
				$('#advisorys').html(data);
			}
		});
	}else{
		$('#advisorys').html('');
		$('#advisers').val('');
	}
	}
	function calculateSum() {
    var sum = 0;
    //iterate through each textboxes and add the values
    $(".dc").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            ;
        }
        else if (this.value.length != 0){
            $(this).css("background-color", "red");
        }
    });
 
  $("input#tdc").val(sum.toFixed(0));
}

function calculateAVE() {
    var sum = 0;
    //iterate through each textboxes and add the values
    $("input.p").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value) ;
            ;
        }
        else if (this.value.length != 0){
            $(this).css("background-color", "red");
        }
    });
 
  $("input#tp").val(sum.toFixed(0));
}
</script>