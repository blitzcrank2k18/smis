<?php include 'includes/header2.php'; ?>
<body>
		<!-- <div class="panel panel-info" id="log_box">
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
						
					</form>
				</div>
			</div>
		</div>
 -->
 	<div class = "container">

 	<div class="card card-container">          
            <img id="profile-img" class="profile-img-card" src="images/images.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method = "POST" id  = "login_form">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" id="user" name="user" placeholder="Username">
                
                <input type="password" id="inputPassword" class="form-control" id="pass" name="pass"  placeholder="Password" required="">
              
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <div class="form-group" id="correct">				
					<div class="alert alert-success"><i class="fa fa-check"></i> Successfully Login</div>				
			</div>
			<div class="form-group" id="error">
				<div class="alert alert-danger">Incorrect Username or Password</div>				
			</div>
        </div><!-- /card-container --> 		
        <h3 style="text-align: center;text-align: center; font-weight: 700;text-shadow: 1px 1px 1px #f2f2f2;font-size: 32px;">Efegenio Lizares National High School</h3>
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