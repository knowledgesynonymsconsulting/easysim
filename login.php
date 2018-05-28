<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>EasySIM: Login Console</title>
	<script src="content/js/bootstrap.js"></script>
	<script src="content/js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.css" /> 
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.min.css" />	
	
	
<style>
body{
font-size:14px;
font-family:Segoe UI;
background-image:url('img/1_signUp.png')
}




	.login-form {
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 45px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
	

</style>
	
</head>
<body style="background-color: #f1f3f4;">  

<br><br><br><br>

 <div class="login-form">
 <div class="col-md-4"></div>
	<div class="col-md-4">
		<form method="post" action="login.php">
			<center><img src="img/logo.png"style="max-width:50%; height:auto"></center><br>
			<?php include('errors.php'); ?>
			<div class="form-group">
			<label for="pwd">Name:</label>
				<input type="text" class="form-control" placeholder="Username" name="username" required="required">
			</div>
			<div class="form-group">
			<label for="pwd">Password:</label>
				<input type="password" class="form-control" placeholder="Password" name="password" required="required">
			</div>        
			<div class="form-group">
			<label for="pwd">Role:</label>
				<select class="form-control" id="sel1" name="role">
					<option value="admin">Admin</option>
					<option value="author">Author</option>
					<option value="reviewer">Reviewer</option>
					<option value="learner">Learner</option>
				</select>            
			</div>        
			<div class="form-group">
				<center> <button type="submit" class="btn btn-primary btn-block" name="login_user" style="background-color:#73CDD6; width:30%;">Log in</button></center>
			</div>
			<!--<div class="clearfix">
				<a href="#" class="pull-left" style="color:#73CDD6">Forgot Password?</a>
			</div>-->
			<p class="text-center"><a href="register.php" style="color:#73CDD6">Create an Account</a></p>
		</form>	
	</div>
</div>	



</body>
</html>



