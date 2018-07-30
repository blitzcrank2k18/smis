<style>
	input{
		border:0px solid black;
		width:100%;
		
		background-color: white;	
	}
</style>
<div class="col-md-12">
	<center>
		<h4><b>New Record</b></h4>
	</center>
	<br>
<br>
</div>
<form id="new_rec" method="POST">
<div class="col-md-6">
<div class="form-horizontal">

		
		<div class="form-group">
			<label for="" class="col-sm-4">Grade:</label>
			<div class="col-sm-8">
			<input type="hidden" name="sy" value="<?php echo $sy_id; ?>">
			<input type="hidden" name="id" value="<?php echo $_GET['student_id']; ?>">
			<select name="grade" class="form-control" id="" required/>
					<option></option>
					<option value="7">Garade 7</option>
					<option value="8">Garade 8</option>
					<option value="9">Garade 9</option>
					<option value="10">Garade 10</option>
			</select>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-4">Section:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="sec" required/>
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">Adviser:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="adviser" required/>
		</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-4">School:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="school" required/>
		</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-4">School Address:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="school_address" required/>
		</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-4">School Year:</label>
			<div class="col-sm-8">
			<select type="text" class="form-control" name="sy_id" required/>
			<option selected disabled>-- Select Year --</option>
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

		
	
</div>
</div>
<div class="col-md-6">
	<div class="form-horizontal">

	<div class="form-group">
			<label for="" class="col-sm-4">Total no. of years in school:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="tns" required/>
		</div>
		</div>

	<div class="form-group">
			<label for="" class="col-sm-4">Curriculum:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="curriculum" />
		</div>
	</div>
	<div class="form-group">
			<label for="" class="col-sm-4">Advance Unit in:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="aunit" />
		</div>
	</div>
	<div class="form-group">
			<label for="" class="col-sm-4">Lack Unit in:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control" name="lunit" />
		</div>
	</div>
	<div class="form-group">
			<label for="" class="col-sm-4">To be classified as:</label>
			<div class="col-sm-8">
			<select name="tbc" class="form-control" id="" required/>
					<option></option>
					<option value="7">Garade 7</option>
					<option value="8">Garade 8</option>
					<option value="9">Garade 9</option>
					<option value="10">Garade 10</option>
			</select>
			<input type="hidden" class="form-control" name="sy_status" value="Transferee" required/>
		</div>
	</div>
	<div class="form-group">
			<label for="" class="col-sm-4">General Average:</label>
			<div class="col-sm-8">
			<input type="text" class="form-control text-right" name="ave" id="ave" readonly="">
		</div>
		</div>
</div>
</div>
<div class="col-md-4">
	 <table class="table table-bordered" >
         <thead>
           <tr class="text-center">
             <td >Months</td>
             <td style="font-size:11px">Days of <br> Classes</td>
             <td style="font-size:11px">Days<br> Present</td>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td><input type="text" name="month[]" value="June" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc1" style="text-align:center;" ></td>
             <td><input type="text" class="p" name="p[]" id="p1" onkeyup="validate('1')" onkeydown="validate('1')" style="text-align:center;width:100px" ></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="July" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc2" style="text-align:center;" ></td>
             <td><input type="text" class="p" name="p[]" id="p2" onkeyup="validate('2')" onkeydown="validate('2')" style="text-align:center;width:100px" ></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="August" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc3" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p3" onkeyup="validate('3')" onkeydown="validate('3')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="September" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc4" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p4" onkeyup="validate('4')" onkeydown="validate('4')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="October" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc5" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p5" onkeyup="validate('5')" onkeydown="validate('5')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="November" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc6" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p6" onkeyup="validate('6')" onkeydown="validate('6')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="December" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc7" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p7" onkeyup="validate('7')" onkeydown="validate('7')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="January" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc8" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p8" onkeyup="validate('8')" onkeydown="validate('8')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="February" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc9" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p9" onkeyup="validate('9')" onkeydown="validate('9')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="March" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc10" style="text-align:center;"></td>
             <td><input type="text" class="p" name="p[]" id="p10" onkeyup="validate('10')" onkeydown="validate('10')" style="text-align:center;width:100px"></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="April" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc11" style="text-align:center;" ></td>
             <td><input type="text" class="p" name="p[]" id="p11" onkeyup="validate('11')" onkeydown="validate('11')" style="text-align:center;width:100px"  ></td>
           </tr>
           <tr>
             <td><input type="text" name="month[]" value="May" readonly></td>
             <td><input class="dc" type="text" name="dc[]" id="dc12" style="text-align:center;"  ></td>
             <td><input type="text" class="p" name="p[]" id="p12" onkeyup="validate('12')" onkeydown="validate('12')" style="text-align:center;width:100px" ></td>
           </tr>
           <tr>
             <td><input type="text" name="Total" value="Total" readonly></td>
             <td><input id="tdc" type="text" name="Tdc" style="text-align:center;width:100px"></td>
             <td><input type="text" id="tp" name="Tp" style="text-align:center;width:100px" ></td>
           </tr>

         </tbody>

       </table>
</div>
<div class="col-md-8">
<input type="hidden" id="row_count" value="4">
	<table id="grade" class="table table-bordered">
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
			<tr id="g1">
				<td>
					<select name="subj[]" id="" required/>
						<option selected="" disabled="">--Select--</option>
						<?php
							include "../includes/db.php";
							$s_query = mysqli_query($conn,"SELECT * FROM subject_list order by subject");
							while($s_row = mysqli_fetch_assoc($s_query)){
								$sub_id = $s_row['subject_id'];
						 ?>
						<option value="<?php echo $sub_id ?>"><?php echo ucwords($s_row['subject']) ?></option>
						<?php } ?>
					</select>
				</td>
				<td> <input type="text" pattern="[0-9]{2}" class="g1" name="1g[]" onkeydown="calculateFinal(1)" onkeyup="calculateFinal(1)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g1" name="2g[]" onkeydown="calculateFinal(1)" onkeyup="calculateFinal(1)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g1" name="3g[]" onkeydown="calculateFinal(1)" onkeyup="calculateFinal(1)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g1" name="4g[]" onkeydown="calculateFinal(1)" onkeyup="calculateFinal(1)" required/></td>
				<td> <p class="fgg" id="fgg1"></p> <input type="hidden" class="fg" id="fg1"  onkeydown="calculateAverage()" onkeyup="calculateAverage()" name="fg[]" /></td>
				<th width="5%"><button type="button" onclick="rem_row('1')">X</button></th>
			</tr>
			<tr id="g2">
				<td>
					<select name="subj[]" id="" required/>
						<option selected="" disabled="">--Select--</option>
						<?php
							include "../includes/db.php";
							$s_query = mysqli_query($conn,"SELECT * FROM subject_list order by subject");
							while($s_row = mysqli_fetch_assoc($s_query)){
								$sub_id = $s_row['subject_id'];
						 ?>
						<option value="<?php echo $sub_id ?>"><?php echo ucwords($s_row['subject']) ?></option>
						<?php } ?>
					</select>
				</td>
				<td> <input type="text" pattern="[0-9]{2}" class="g2" name="1g[]" onkeydown="calculateFinal(2)" onkeyup="calculateFinal(2)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g2" name="2g[]" onkeydown="calculateFinal(2)" onkeyup="calculateFinal(2)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g2" name="3g[]" onkeydown="calculateFinal(2)" onkeyup="calculateFinal(2)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g2" name="4g[]" onkeydown="calculateFinal(2)" onkeyup="calculateFinal(2)" required/></td>
				<td><p class="fgg" id="fgg2"></p> <input type="hidden" class="fg" id="fg2" onkeydown="calculateAverage()" onkeyup="calculateAverage()" name="fg[]" /></td>
				<th width="5%"><button type="button" onclick="rem_row('2')">X</button></th>
			</tr>
			<tr id="g3">
				<td>
					<select name="subj[]" id="" required/>
						<option selected="" disabled="">--Select--</option>
						<?php
							include "../includes/db.php";
							$s_query = mysqli_query($conn,"SELECT * FROM subject_list order by subject");
							while($s_row = mysqli_fetch_assoc($s_query)){
								$sub_id = $s_row['subject_id'];
						 ?>
						<option value="<?php echo $sub_id ?>"><?php echo ucwords($s_row['subject']) ?></option>
						<?php } ?>
					</select>
				</td>
				<td> <input type="text" pattern="[0-9]{2}" class="g3" name="1g[]" onkeydown="calculateFinal(3)" onkeyup="calculateFinal(3)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g3" name="2g[]" onkeydown="calculateFinal(3)" onkeyup="calculateFinal(3)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g3" name="3g[]" onkeydown="calculateFinal(3)" onkeyup="calculateFinal(3)" required/></td>
				<td> <input type="text" pattern="[0-9]{2}" class="g3" name="4g[]" onkeydown="calculateFinal(3)" onkeyup="calculateFinal(3)" required/></td>
				<td> <p class="fgg" id="fgg3"></p> <input type="hidden" class="fg" id="fg3" onkeydown="calculateAverage()" onkeyup="calculateAverage()" name="fg[]" /></td>
				<th width="5%"><button type="button" onclick="rem_row('3')">X</button></th>
			</tr>
		</tbody>
	</table>
	<button type="button" onclick="new_rows()" style="float:right" id="btn_add" class="btn btn-sm btn-info"><i class="fa fa-plus"></i></button type="button" >
	</div>
</div>
<div class="col-md-12">
	<center>
		<button class="btn btn-sm btn-info">Save</button>
		<a class="btn btn-sm btn-info" onclick="location.replace(document.referrer)">Cancel</a>
	</center>
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
        $("#row_count").val(1+parseFloat(i));
			if($('.fg').length == 8){ $('#btn_add').hide(); }else{ $('#btn_add').show();}
    });
  var ave = parseFloat(sum2)/ $('.fg').length  ;
  $("#ave").val(ave.toFixed(2));
	}
	function new_rows(){
		
var i = $("#row_count").val();

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
				'<td> <p class="fgg" id="fgg'+i+'"></p> <input type="hidden" class="fg" id="fg'+i+'"  onkeydown="calculateAverage()" onkeyup="calculateAverage()" name="fg[]" /></td>'+
				'<th width="5%"><button type="button" onclick="rem_row('+i+')">X</button></th>'+
			'</tr>';
			
			$('#gbody').append(data);
			$("#row_count").val(1+parseFloat(i));
			if($('.fg').length == 8){ $('#btn_add').hide(); }else{ $('#btn_add').show();}
	}
	
</script>
<script>
	jQuery(document).ready(function(){

		calculateSum();
     calculateAVE();
      $(".dc").on("keydown keyup", function() {
        calculateSum();
    });
    $(".p").on("keydown keyup", function() {
        calculateAVE();
    });
						jQuery("#new_rec").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "../forms/add_forms.php?action=new_rec_trans",
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
