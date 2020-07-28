<?php
$hostname_v = "localhost";
$database_v = "nosshinc_videoediting";
$username_v = "root";
$password_v = "";
$vEdit = mysqli_connect($hostname_v, $username_v, $password_v);

	//Function for data validation
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
   if (isset($_POST['signup'])) {
   		$fname = test_input($_POST['fname']);
   		$email = test_input($_POST['email']);
   		$pass = test_input($_POST['pass']);
   		$hash = password_hash($pass, PASSWORD_DEFAULT);
   		$passCon = test_input($_POST['passCon']);

   		$SQLUser = "SELECT email FROM excel WHERE email = '$email' LIMIT 1";


   		mysqli_select_db($vEdit, $database_v);
   		$SQLUserQuery = mysqli_query($vEdit, $SQLUser);


   	if (empty($fname))
	 {
		$errorMsg = "<p class='alert alert-warning'>Please, your first name should not be empty.</p>";
	}elseif (empty($pass)) {
		$errorMsg = "<p class='alert alert-warning'>Please, the password should not be empty.</p>";
	}elseif (empty($passCon)) {
		$errorMsg = "<p class='alert alert-warning'>Please, confirm your password.</p>";
	}elseif ($pass !== $passCon) {
		$errorMsg = "<p class='alert alert-warning'>Your password does not matche.</p>";
	}
	elseif (empty($email)) {
		$errorMsg = "<p class='alert alert-warning'>Please, your email should not be empty.</p>";
	}elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
	{
		$errorMsg = "<p class='alert alert-warning'>You have entered invalid email.</p>";
	}
	//Checking if user exists
	elseif (mysqli_num_rows($SQLUserQuery) > 0) {
		$errorMsg = "<p class='alert alert-warning'>Sorry, the email already exists.</p>";
	}else{
	$sqlIn = "INSERT INTO excel (full_name, email, pass) VALUES ('$fname', '$email', '$hash')";
	        $sqlInQuery = mysqli_query($vEdit, $sqlIn);
	        
	        if($sqlInQuery){
	            $success = "<p class='alert alert-success'>Registration is successful, you can login.</p>";
	        }else{
	            $errorMsg = "<p class='alert alert-info'>Please, try again</p>";
	            //echo mysqli_error($vEdit);
	        }
	}
        
        
    }


    if (isset($_POST['signin'])) {
    	$email = test_input($_POST['emailIn']);
   		$pass = test_input($_POST['passIn']);
	

	if (empty($email)) {
		$errorMsgLog = "<p class='alert alert-warning'>Your email is required.</p>";
	}elseif (empty($pass)) {
		$errorMsgLog = "<p class='alert alert-warning'>The password is required.</p>";
	}else{
		mysqli_select_db($vEdit, $database_v);
		$SQLUser = "SELECT * FROM excel WHERE email = '$email' LIMIT 1";
		$SQLUserQuery = mysqli_query($vEdit, $SQLUser);

		if(!$SQLUserQuery){
			//echo mysqli_error($vEdit);
		}

		if (mysqli_num_rows($SQLUserQuery) > 0){
			while ($users = mysqli_fetch_assoc($SQLUserQuery)) {
				$hash = $users['pass'];
				$userEmail = $users['email'];
			}
			if (password_verify($pass, $hash)) {
				session_start();
				$_SESSION['email'] = $userEmail;
				header("location: member.php");
			}
			else{
				$errorMsgLog = "<p class='alert alert-warning'>Incorrect email or password.</p>";
			}
		}
	}

    }



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Excel Training For Beginners | Nossh Inc.</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<!---header--->
<div class="header">
	<div class="wrap">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/></a>
		</div>
		<div class="signin">
			<ul>
				<li><a href="#signin">Signin</a></li>
				<li class="a"><h6>or</h6></li>
				<li class="b"><a href="#signup">Signup</a></li>
				<div class="clear"> </div>	
			</ul>
		</div>
		<div class="clear"> </div>	
    </div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h4 class="style">login or create an account</h4>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="login_left">
		<h3>login users</h3>
		<p>if you have any account with us, please log in.</p>
	<!-- start registration -->
	<div class="registration">
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
	<div class="registration_left">
		<p>
			<?php
				
				if (isset($errorMsgLog)) {
					echo $errorMsgLog;
				}
			?>
		</p>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="" method="post">
				<div>
					<label>
						<input name="emailIn" placeholder="email:" type="email" tabindex="3" required="">
					</label>
				</div>
				<div>
					<label>
						<input name="passIn" placeholder="password" type="password" tabindex="4" required="">
					</label>
				</div>						
				<div>
					<input name="signin" type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			<!-- /Form -->
		</div>
	</div>
	</div>
	<!-- end registration -->
	</div>
	<div class="login_left">
		<h3>register new users</h3>
		<p>Create an account to access your product.</p>
		<div class="registration_left">
		<p>
			<?php
				if (isset($success)) {
					echo $success;
				}
				if (isset($errorMsg)) {
					echo $errorMsg;
				}
			?>
		</p>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="" method="post">
				<div>
					<label>
						<input name="fname" placeholder="first name:" type="text" tabindex="1" required="" autofocus="">
					</label>
				</div>
				
				
				<div>
					<label>
						<input name="email" placeholder="email address:" type="email" tabindex="3" required="">
					</label>
				</div>
				<div>
					<label>
						<input name="pass" placeholder="password" type="password" tabindex="4" required="">
					</label>
				</div>						
				<div>
					<label>
						<input name="passCon" placeholder="retype password" type="password" tabindex="4" required="">
					</label>
				</div>	
				<div>
					<input type="submit" name="signup" value="create an account" id="register-submit">
				</div>
				<!-- <div class="sky_form">
					<label class="checkbox"><input type="checkbox" name="checkbox"><i>i agree to <a class="terms" href="#"> terms of service</a> </i></label>
				</div> -->
			</form>
			<!-- /Form -->
		</div>
	</div>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<div class="footer-bottom">
<div class="wrap">
   <div class="copy-right">
		 <p>Copyright 2014. All Rights Reserved</p>
   </div>
	<div class="copy">
		 <p>Template by <a href="http://w3layouts.com">w3layouts</a></p>
   </div>
</div>
</div>
</body>
</html>