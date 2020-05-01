<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myenrollment = mysqli_real_escape_string($db,$_POST['enrollment']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password1']); 
      
      $sql = "SELECT * FROM `userdetails` WHERE `enrollment` = '$myenrollment' AND `password` LIKE '$mypassword'";
	  $result = mysqli_query($db,$sql);
	  if($result === false){
		  echo "error!:". mysqli_error($db);
		  $count = 0;
	  }
	  else{
      	$row = mysqli_fetch_row($result);
     	//$active = $row['active'];
      
      	$count = mysqli_num_rows($result);
	  }
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		 //session_register("myusername");
         $row = mysqli_fetch_assoc($result);
         $_SESSION['login_user'] = $myenrollment;
         $_SESSION['username'] = $row['fullname'];
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
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
            <h1 style="text-align: center"> LOGIN</h1>
            <form method="post" action="">
                <input type="hidden" name="csrfmiddlewaretoken" value="4YqJt2nIXX5T0uIdvpLGtdj0IPkEvCVOGErhfY3Nvpcpowe7htcFL1CTvN5XJ4dq">
                <fieldset class="form-group">


                    <div id="div_id_enrollment" class="form-group"> <label for="id_enrollment" class=" requiredField">
						Enrollment<span class="asteriskField">*</span> </label>
                        <div class=""> <input type="number" name="enrollment" maxlength="20" autofocus class="textinput textInput form-control" required id="id_enrollment">
                        </div>
                        <div id="div_id_password1" class="form-group"> <label for="id_password1" class=" requiredField">
						Password<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="password" name="password1" autocomplete="new-password" class="textinput textInput form-control" required id="id_password1">
                            </div>
                        </div>

                </fieldset>
                <div class="form-group">
                    <button class="btn btn-outline-info" type="submit">Login</button>
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
                function validate() {
                    var name = document.forms["registration-form"]["enrollment"];
                    var email = document.forms["registration-form"]["email"];
                    var password = document.forms["registration-form"]["password"];
                    var regex = "^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$";

                    if (name.value == "") {
                        window.alert("Please enter your name.");
                        name.focus();
                        return false;
                    } else {
                        var result = regex.test(address.value)
                        if (result == -1) {
                            window.alert("Please enter enrollment number");
                            name.focus();
                            return false;
                        }

                    }



                    if (email.value == "") {
                        window.alert("Please enter a valid e-mail address.");
                        email.focus();
                        return false;
                    }


                    if (password.value == "") {
                        window.alert("Please enter your password");
                        password.focus();
                        return false;
                    }


                    return true;
                }
            </script>
    </body>

    </html>