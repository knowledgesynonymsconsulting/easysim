<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>EasySIM: User Registration Console</title>

	
	
	<!----------------------------Bootstrap code(open)---------------------------->
	<script src="content/js/bootstrap.js"></script>
	<script src="content/js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.css" /> 
    <link rel="stylesheet" media="screen" href="content/css/bootstrap.min.css" />	
	<!----------------------------Bootstrap code(close)---------------------------->	
	
<style>
body{
font-size:14px;
font-family:Segoe UI;
background-image:url('img/1_signUp.png')
}



.btn1{
margin-top: 20px;    
    display:inline-block;
}    
    
</style>
	
</head>
<body style="background-color: #f1f3f4;">  
  
	
	
	
	
<div class="container">
	<div class="row" style="margin-top:15%; background-color: #f7f7f7; -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);">
		<div class="col-md-12" style=" padding-bottom:20px; padding-left:30px;"><br>
			<!-- img src="img/logo.png" style="max-width:100%; height:auto; padding-bottom:3%">
			<p><b>Sign Up with</b></p>
			<img src="img/facebook.png" style="max-width:100%; height:auto; padding-bottom:2%">
			<img src="img/google.png" style="max-width:100%; height:auto; padding-bottom:2%">
			<img src="img/linkdin.png" style="max-width:100%; height:auto; padding-bottom:2%">
			<p>Or fill required  fields and become a member.</p -->


	
			<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<div class="form-group">
			<label for="user">Name:</label>
			<input type="text" class="form-control" id="usr" name="username" value="<?php echo $username; ?>">
			</div>	
			<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_1">
			</div>	
			<div class="form-group">
			<label for="pwd">Confirm password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_2">
			</div>				
			<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
			</div>

            <div class="form-group">
            <label for="sel1">Role</label>
            <select class="form-control" id="sel1" name="role">
                <option value="admin">Admin</option>
                <option value="author">Author</option>
                <option value="reviewer">Reviewer</option>
                <option value="learner">Learner</option>
            </select>
		    </div>	
                
                
			<div class="input-group">
			<button type="submit" class="btn" name="reg_user" style="background-color:#73cdd6; color:#fff">Register</button>
			</div> 
                
            <center>  <div class="input-group">
              <button type="submit" class="btn btn1" name=" " style="background-color:#73cdd6; color:#fff"><a href="register.php" style="float:left"><font color="#ffffff"> Add More User</font></a>	</button>		
			</div> </center>	
    
            
          <center><div class="input-group"> </div><br>Already a member?</br>
          <a href="login.php"><font color="#73CDD6">Sign Up</font></a></div></center>			
 		  </form>
		  
          </div>	

</div>
</div>



</body>
</html>