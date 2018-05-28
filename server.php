<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$role    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'easysim');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$role = mysqli_real_escape_string($db, $_POST['role']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
        if (empty($role)) { array_push($errors, "Role is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password, role) 
					  VALUES('$username', '$email', '$password', '$role')";
			mysqli_query($db, $query);

//			$_SESSION['username'] = $username;
//			$_SESSION['success'] = "You are now logged in";
			$_SESSION['success'] = "User Added Successfully";
			$_SESSION['username'] = "";
			$_SESSION['email'] = "";
			$_SESSION['role'] = "";
            
            
//			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$role = mysqli_real_escape_string($db, $_POST['role']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
        


       /* if (empty($role)) {
			array_push($errors, "Role is required");
		} */
        
    
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'  AND role='$role'";
			//$query = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1 && ($role == "author"))  {
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
               	$_SESSION['success'] = "You are now logged in";
                header('location: author-dash.php');
			}
            
            elseif(mysqli_num_rows($results) == 1 && ($role == "reviewer")){
                $_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
               	$_SESSION['success'] = "You are now logged in";
                header('location: create_scenario.php');
                }				
               
            elseif(mysqli_num_rows($results) == 1 && ($role == "admin")){
                $_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
               	$_SESSION['success'] = "You are now logged in";
                header('location: home.php');
                }
 
            elseif(mysqli_num_rows($results) == 1 && ($role == "learner")){
                $_SESSION['username'] = $username;
				$_SESSION['role'] = $role;
               	$_SESSION['success'] = "You are now logged in";
                header('location: dashboard_learner.php');
                } 
			
			
            else {
				array_push($errors, "Wrong username/password/role combination");
			}
            
            
            
            
            
		}
        
            
       

        
        
        
	}






?>