<?php
 include 'includes/header2.php'; ?>
<style>
	#title1 {
		display: block;
		width:50%;
		height:90px;
		background-color: white;
		padding:1px;
		border-radius:5px;
		position:fixed;
		top:30%;
		z-index: 1000px;
	}
	#main-bod{
		    background: url(images/6943_Desert.jpg);
		    background-repeat: no-repeat;
		    background-size: cover;

	}
	#log_box{
		position: fixed;
		top:40%;
		left:40%;
		width:30%;
	}
</style>
<body id="main-bod">
		<div class="panel panel-info" id="log_box">
			<div class="panel-body">
				<div class="col-lg-12">
					<form method="POST" id="login_form">
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-md-4 text-right"><label for="user">Username</label></div>
							<div class="col-md-8"><input type="text" class="form-control input-sm" id="user" name="user"></div>
						</div>
						<div class="form-group">
							<div class="col-md-4 text-right"><label for="pass">Password</label></div>
							<div class="col-md-8"><input type="password" class="form-control input-sm" id="pass" name="pass"></div>
						</div>
						<div class="form-group">
							<div class="col-md-12 col-md-offset-10"><button class="btn btn-sm btn-default">Login</button></div>
						</div>
						<div class="form-group" id="correct">
							<div class="col-md-12">
								<div class="alert alert-success"><i class="fa fa-check"></i> Successfully Login</div>
							</div>
						</div>
						<div class="form-group" id="error">
							<div class="col-md-12">
								<div class="alert alert-danger">Incorrect Username or Password</div>
							</div>
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
<script>
		jQuery(document).ready(function(){
					jQuery(document).ready(function(){
						$("#correct").hide();
						$("#error").hide();
						jQuery("#login_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "includes/login.php",
									data: formData,
									success: function(html){
									if(html=='true' )
									{
										$('#error').hide();
										$("#correct").slideDown();
										var delay = 2000;
										setTimeout(function(){	window.location = 'pages/smis.php?request=home';   }, delay);  
									}else{
									$('#error').slideDown();	
									}
									}
								});
									return false;
						});
						});
						});
	
</script>