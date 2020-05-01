<?php
	include("config.php");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 	
		$myenrollment = mysqli_real_escape_string($db,$_POST['enrollment']);
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$myemail = mysqli_real_escape_string($db,$_POST['email']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password1']); 
	   
		$success = 'false';
		$sql = "INSERT INTO userdetails (`enrollment`, `username`, `password`, `email`) VALUES ('$myenrollment', `$myusername`, '$mypassword', '$myemail');";
		if(mysqli_query($db,$sql))
		{
			$success = 'true';
		}
		else{
			$success = 'false';
		}
		
		
	}
?>
<!DOCTYPE html>
<html>


<head>
    <title>Alumni Association</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="login.php">Login</a>
		</li>
			<li class="nav-item">
			<a class="nav-link" href="signup.php">SignUp</a>
		</li>
	</ul>
	</nav>
    <div class="container">
		<br><br>
		<br><br>
		<h1 style="text-align: center"> REGISTRATION FORM </h1>		 
		<form method="post" action="">
            <input type="hidden" name="csrfmiddlewaretoken" value="4YqJt2nIXX5T0uIdvpLGtdj0IPkEvCVOGErhfY3Nvpcpowe7htcFL1CTvN5XJ4dq">
            <fieldset class="form-group">
                <legend class="border-bottom mb-4">
                    Join Today
                </legend>
                

				<div id="div_id_enrollment" class="form-group"> <label for="id_enrollment" class=" requiredField">
					Enrollment<span class="asteriskField">*</span> </label> <div class=""> <input type="number" name="enrollment" maxlength="20" autofocus class="textinput textInput form-control" required id="id_enrollment"> <small id="hint_id_enrollment" class="form-text text-muted">Required. Enrollment Number</small> 
				</div>
				<div id="div_id_username" class="form-group"> <label for="id_username" class=" requiredField">
					Username<span class="asteriskField">*</span> </label> <div class=""> <input type="text" name="username" maxlength="150" autofocus class="textinput textInput form-control" required id="id_username"> <small id="hint_id_username" class="form-text text-muted">Required. Full name. 150 characters or fewer.</small> 
				</div> 
			</div> 
			<div id="div_id_email" class="form-group"> <label for="id_email" class=" requiredField">
					Email<span class="asteriskField">*</span> </label> <div class=""> <input type="email" name="email" class="emailinput form-control" required id="id_email"> </div> 
			</div> 
			<div id="div_id_password1" class="form-group"> <label for="id_password1" class=" requiredField">
					Password<span class="asteriskField">*</span> </label> <div class=""> <input type="password" name="password1" autocomplete="new-password" class="textinput textInput form-control" required id="id_password1"> <small id="hint_id_password1" class="form-text text-muted"><ul><li>Your password can’t be too similar to your other personal information.</li><li>Your password must contain at least 8 characters.</li><li>Your password can’t be a commonly used password.</li><li>Your password can’t be entirely numeric.</li></ul></small> </div> </div> <div id="div_id_password2" class="form-group"> <label for="id_password2" class=" requiredField">
					Password confirmation<span class="asteriskField">*</span> </label> <div class=""> <input type="password" name="password2" autocomplete="new-password" class="textinput textInput form-control" required id="id_password2"> <small id="hint_id_password2" class="form-text text-muted">Enter the same password as before, for verification.</small> 
			</div> 
			</div>

            </fieldset>
            <div class="form-group">
                <button class="btn btn-outline-info" type="submit">Sign Up</button>
            </div>
        </form>

	</div>
	<div class="alert-info" style="margin-top: 50px;">
        <div class="container">
            <br>
            <h3 style="color: grey;">CONTACT</h3>
            <br>
            <p>zeel.sinojia15053@marwadieducation.edu.in</p>
            <p>prince.ginoya@marwadieducation.edu.in</p>
            <p>reedham.tanti@marwadieducation.edu.in</p>
            <br>
            <h3 style="color: grey;">A Web Technology Project</h3>
        </div>
        <div style="padding-right: 20px;" class="text-right">Copyright &copy; 2020 Students Of EC1 Class</div>
	</div>
	
    <script>
		function validate()								 
		{ 
			var name = document.forms["registration-form"]["Name"];			 
			var email = document.forms["registration-form"]["EMail"]; 
			var phone = document.forms["registration-form"]["Telephone"]; 
			var what = document.forms["registration-form"]["Subject"]; 
			var password = document.forms["registration-form"]["Password"]; 
			var address = document.forms["registration-form"]["Address"]; 
			var regex = "^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$";

			if (name.value == "")								 
			{ 
				window.alert("Please enter your name."); 
				name.focus(); 
				return false; 
			} 

			else{
				var result = regex.test(address.value)
				if (result == -1){
					window.alert("Please enter  name."); 
					name.focus(); 
					return false; 
				}
				
			}

			if (address.value == "")							 
			{ 
				window.alert("Please enter your address."); 
				address.focus(); 
				return false; 
			} 
			
			
			if (email.value == "")								 
			{ 
				window.alert("Please enter a valid e-mail address."); 
				email.focus(); 
				return false; 
			} 

			if (phone.value == "")						 
			{ 
				window.alert("Please enter your telephone number."); 
				phone.focus(); 
				return false; 
			} 

			if (password.value == "")					 
			{ 
				window.alert("Please enter your password"); 
				password.focus(); 
				return false; 
			} 

			if (what.selectedIndex < 1)				 
			{ 
				alert("Please enter your course."); 
				what.focus(); 
				return false; 
			} 

			return true; 
		}

	</script>
</body>

</html>