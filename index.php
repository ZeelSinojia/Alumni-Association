<?php
    include('session.php');
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
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-sm bg-dark">

            <a class="navbar-brand" href="index.php">Home</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="discussion.php">Discussion Forums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="event.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumni.php">Alumni Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sitemap.JPG">Sitemap</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>
            </ul>
        </nav>
        <div class="jumbotron text-center bg-dark">
            <div class="container text-white">
                <h1>Build a Thriving Alumni Community</h1>
                <p>A full-fledged alumni networking solution to enable meaningful engagement!</p>
                <a href="#joinform" class="btn btn-outline-light">Join Now</a>
            </div>
        </div>
        <div class="container text-center">
            <h1 class="page-header">Everything you need to keep your alumni engaged!</h1>
            <p class="lead">We provide a one-stop solution for your all alumni networking needs. Our interactive alumni portals come with all the features required to manage your alumni relations seamlessly while keeping your alumni engaged and happy.</p>
        </div>
        <div class="container">
            <h2 class="text-left">Features we provide</h2>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h5>Discussion Forum</h5>
                    <p>We provide you with a platform to interact with your alumni regarding the doubts you have and help you get a proper insight of the real world.</p>
                </div>
                <div class="col-md-6">
                    <h5>Notice Updates</h5>
                    <p>You will get all the information about upcoming seminars, talks and workshops in here.</p>
                </div>
                <div class="col-md-6">
                    <h5>Alumni Information</h5>
                    <p>Know your alumni alongside there achievments and other information.</p>
                </div>
                
            </div>
        </div>
        <br><br>
        <hr>
        <br><br>
        <div class="container">
            <div class="row" style="display: flex;">
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem; height: 30rem;">
                        <img src="https://pngimage.net/wp-content/uploads/2018/05/discussion-forum-icon-png-7.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Discussion Forum</h5>
                            <p class="card-text"> A discussion forum is a website where people can gather to have discussions about a specific topic.</p>
                            <a href="discussion.php" class="btn btn-outline-dark">Go there</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;  height: 30rem;">
                        <img src="https://www.kindpng.com/picc/m/113-1139511_transparent-event-icon-png-online-portal-icon-png.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Events Details</h5>
                            <p class="card-text"> A event module is a place where people can go to gather information about specific event.</p>
                            <a href="event.php" class="btn btn-outline-dark">Go there</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem; height: 30rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT3HUIxcw7ht8gQvUD5wQwPe0Myb6niVW7V8POvXlAVMSRb6Ss6&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alumni Information</h5>
                            <p class="card-text"> Alumni module will provide people wih information regarding all the current alumni.</p>
                            <a href="alumni.php" class="btn btn-outline-dark">Go there</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <br><br>
            <br><br>
            <h1 style="text-align: center" id="joinform"> JOIN TODAY </h1>
            <form method="post" action="">
                <input type="hidden" name="csrfmiddlewaretoken" value="4YqJt2nIXX5T0uIdvpLGtdj0IPkEvCVOGErhfY3Nvpcpowe7htcFL1CTvN5XJ4dq">
                <fieldset class="form-group">



                    <div id="div_id_enrollment" class="form-group"> <label for="id_enrollment" class=" requiredField">
					Enrollment<span class="asteriskField">*</span> </label>
                        <div class=""> <input type="number" name="enrollment" maxlength="20" class="textinput textInput form-control" required id="id_enrollment"> <small id="hint_id_enrollment" class="form-text text-muted">Required. Enrollment Number</small>
                        </div>
                        <div id="div_id_username" class="form-group"> <label for="id_username" class=" requiredField">
					Username<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="text" name="username" maxlength="150" class="textinput textInput form-control" required id="id_username"> <small id="hint_id_username" class="form-text text-muted">Required. Full name. 150 characters or fewer.</small>
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group"> <label for="id_email" class=" requiredField">
					Email<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="email" name="email" class="emailinput form-control" required id="id_email"> </div>
                        </div>
                        <div id="div_id_password1" class="form-group"> <label for="id_password1" class=" requiredField">
					Password<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="password" name="password1" autocomplete="new-password" class="textinput textInput form-control" required id="id_password1"> <small id="hint_id_password1" class="form-text text-muted"><ul><li>Your password can’t be too similar to your other personal information.</li><li>Your password must contain at least 8 characters.</li><li>Your password can’t be a commonly used password.</li><li>Your password can’t be entirely numeric.</li></ul></small>                                </div>
                        </div>
                        <div id="div_id_password2" class="form-group"> <label for="id_password2" class=" requiredField">
					Password confirmation<span class="asteriskField">*</span> </label>
                            <div class=""> <input type="password" name="password2" autocomplete="new-password" class="textinput textInput form-control" required id="id_password2"> <small id="hint_id_password2" class="form-text text-muted">Enter the same password as before, for verification.</small>
                            </div>
                        </div>

                </fieldset>
                <div class="form-group">
                    <button class="btn btn-outline-dark" type="submit">Join Now</button>
                </div>
            </form>

            </div>
            <br><br>
            <div class="bg-dark text-white">
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
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script src="scrolling.js"></script>
    </body>

    </html>