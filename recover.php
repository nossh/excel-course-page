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



    if(isset($_POST['recover']))
	{
				
		
			if (isset($_POST['email']))
			{
				mysqli_select_db($vEdit, $database_v);

				$email = test_input($_POST['email']);
				$SQLUser = "SELECT id,full_name, email FROM excel WHERE email = '$email' LIMIT 1";
				$SQLUserQuery = mysqli_query($vEdit, $SQLUser);
				if (mysqli_num_rows($SQLUserQuery) <= 0)
				{
					$errorMsg = "User not found!";
					echo "<script> alert('". $errorMsg ."')</script>";
				}
				else
				{

					while ($users = mysqli_fetch_assoc($SQLUserQuery)) {
							$id = $users['id'];
							$email = $users['email'];
							$fname = $users['full_name'];
						}
					
					$tempID = substr(sha1(uniqid(rand())), 0, 6);

					$sqlIn = "INSERT INTO temp (uID, email, tempID, action) VALUES ('$id', '$email', '$tempID', 'recover')";
	        		$sqlInQuery = mysqli_query($vEdit, $sqlIn);
					
					
					mail($email, 'Excel Training '.'- Password recovery', 
		'<html>
			<body style="font-family: Verdana; color: #333333; font-size: 12px;">
				<table style="width: 400px; margin: 0px auto;">
					<tr style="text-align: center;">
						<td style="border-bottom: solid 1px #cccccc;"><h2 style="text-align: right; font-size: 14px; margin: 7px 0 10px 0;">&laquo; Password recovery</h2></td>
					</tr>
					<tr style="text-align: justify;">
						<td style="padding-top: 15px; padding-bottom: 15px;">
							Hi '. $fname .',
							<br />
							<p>Forgot your password? No worries, we got you covered. </p>
							<br />
							Click the link bellow to reset your password:<br />
							<a href="'.'https://www.nosshinc.com/excel-training/confirm.php'.'?u='.$id.'&tempID='.$tempID.'&action='.'recover'.'">'.'<b>| SET NEW PASSWORD |</b>'.'</a>
							<br />
							<p>If you did not make this request, or made it by mistake, please ignore this email your password will remain as it was.</p>
							<center></center>
						</td>
					</tr>
					<tr style="text-align: right; color: #777777;">
						<td style="padding-top: 10px; border-top: solid 1px #cccccc;">
							Best Regards,
							<br>
							<span style="color: #222222;">'.'Excel Training'.'</span>
						</td>
					</tr>
				</table>
			</body>
		</html>',
		"Reply-To: ".'Solomon'." <".'nosshamary@gmail.com'.">\r\n" . 
		"From: ".'Solomon'." <".'nosshamary@gmail.com'.">\r\n" .
		"MIME-Version: 1.0\r\n" .
		"Content-type: text/html; charset=iso-8859-1");
					
					$successMsg2 = "<p class='alert alert-success'> Password recovery link sent to your email.</p>";
					echo "<script> alert('". $successMsg2 ."')</script>";
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
			
		</div>
		<div class="clear"> </div>	
    </div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">

</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="login_left">
		<h3>Recover password</h3>
		<p>If you have forgotten your password, recover it here.</p>
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
				
				if (isset($errorMsg)) {
					echo $errorMsg;
				}
				if (isset($successMsg2)) {
					echo $successMsg2;
				}
			?>
		</p>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="" method="post">
				<div>
					<label>
						<input name="email" placeholder="email address" type="email" tabindex="3" required="">
					</label>
				</div>
				
				<div>
					<input type="submit" name="recover" value="Recover password" id="register-submit">
				</div>
				<div class="forget">
					<a href="signup.php">login</a>
				</div>
				<!-- <div class="sky_form">
					<label class="checkbox"><input type="checkbox" name="checkbox"><i>i agree to <a class="terms" href="#"> terms of service</a> </i></label>
				</div> -->
			</form>
			<!-- /Form -->
		</div>
	</div>
	</div>
	<!-- end registration -->
	</div>
	<div class="login_left">
		
		<div class="registration_left">
		
		 <div class="registration_form">
		 <!-- Form -->
			
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
		 <p>Copyright 2020. All Rights Reserved</p>
   </div>
	<div class="copy">
		 <p>Template by <a href="http://w3layouts.com">w3layouts</a></p>
   </div>
</div>
</div>
</body>
</html>