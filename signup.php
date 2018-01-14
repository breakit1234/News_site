<html>

<head>
	<title>
		Login/Signup
	</title>


	<!-- REPLACE THE LINKS WITH THE LOCATION TO YOUR FILES -->


	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link href="./assets/fonts/font.css" rel="stylesheet">
	<link href="./assets/css/blog_page.css" rel="stylesheet">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>

<body>


 <h2>
    <a href="http://www.mnnit.ac.in/" target="_blank"> MNNIT Official Site</a>
</h2>


<div class="container">
	<div class="row">
	
</div>
	<div class="container">    
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
			<div class="panel panel-info" >
				<div class = "panel panel-danger">
   					<div class = "panel-heading" style="height: 50px; padding-top:15px;" >
     				 <h2 class = "panel-title"><b>Signup</h2></b>
  					 </div>  
  				</div>   
  							<div class="form-group">
							<label for="email" class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="email" placeholder="Email Address">
							</div>
						</div>

						<div class="form-group">
							<label for="firstname" class="col-md-3 control-label">First Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="firstname" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-md-3 control-label">Last Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="lastname" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						</div>

						

						<div class="form-group">
							<!-- Button -->                                        
							<div class="col-md-offset-3 col-md-9">
								<input type="submit" id="btn-signup" class="btn btn-info" value="Register"><i class="icon-hand-right"></i>
							</div>
						</div>

										<div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									<h5>Already have an account! 
									<a href="login.html">
										Login
									</a>
									</h5>
									</a>
								</div>
							</div>
						</div>    
					</form>     



				</div>                     
			</div>  
		</div>
		<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title" style="font-size:32px">Sign Up</div>
					<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
				</div>  
				<div class="panel-body" >
					<form id="signupform" class="form-horizontal" role="form" action="signup_backend.php" method="post">

						
						



					</form>
				</div>
			</div>




		</div> 
	</div>



	
</body>
</html>

