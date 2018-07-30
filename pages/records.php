<style>
	.nav.navbar.grade>li{
		border:2px black !important ;
		background:white ;
		color:black;
		padding: 5px;
	}
	.nav.navbar.grade>li.active{
		border:1px rgb(251, 251, 251) ;
		background:rgb(251, 251, 251);
		color:black;
	}
	.nav.navbar.grade>li>a{
		color:black;
	}
	.sid>.panel{
		background-color: rgb(250, 250, 250) ;
	}
	.sid>.panel.panel-default>.panel-body{
		padding: 1px !important;
		margin: 1px !important;
	}
	.menus>.btn{
		margin: 0px !important;
	}
</style>
<?php
if($_GET['grade'] == '7'){ $active1 = "btn-success";}else{ $active1 = 'btn-default'; }
if($_GET['grade'] == '8'){ $active2 = "btn-success";}else{ $active2 = 'btn-default'; }
if($_GET['grade'] == '9'){ $active3 = "btn-success";}else{ $active3 = 'btn-default'; }
if($_GET['grade'] == '10'){ $active4 = "btn-success";}else{ $active4 = 'btn-default'; }
 ?>

<div class="col-lg-12">
	<div class="col-md-12 menus">
<a href="smis.php?request=academic_record&student_id=<?php echo $_GET['student_id'] ?>&grade=7&form=record" class="btn btn-menu <?php echo $active1 ?> pull-left"> Grade 7</a>
<a href="smis.php?request=academic_record&student_id=<?php echo $_GET['student_id'] ?>&grade=8&form=record" class="btn btn-menu <?php echo $active2 ?> pull-left"> Grade 8</a>
<a href="smis.php?request=academic_record&student_id=<?php echo $_GET['student_id'] ?>&grade=9&form=record" class="btn btn-menu <?php echo $active3 ?> pull-left"> Grade 9</a>
<a href="smis.php?request=academic_record&student_id=<?php echo $_GET['student_id'] ?>&grade=10&form=record" class="btn btn-menu <?php echo $active4 ?> pull-left"> Grade 10</a>
<a class="btn btn-sm btn-primary pull-left" style = "position:relative;left:10px;" href="smis.php?request=form_record&student_id=<?php echo $_GET['student_id'] ?>"><i class="fa fa-print"></i> Print Form 137</a>		
<a class="btn btn-sm btn-info pull-right" href="smis.php?request=academic_record&student_id=<?php echo $_GET['student_id'] ?>&form=add_record"><i class="fa fa-plus"></i> Add Past Record if Transferee</a>
<br><br>
	</div>
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-body">
			<div id="recCode">
				<?php
		if(isset($_GET['form'])){
				 if($_GET['form'] == 'add_record')
				 	{ include 'add_record.php'; }
				 elseif($_GET['form'] == 'record')
				 	{ include 'view_records.php'; } } ?>
				

			</div>

		</div>

	</div>

</div>

</div>