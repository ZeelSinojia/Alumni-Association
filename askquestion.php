<?php 
   include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $myquestion = mysqli_real_escape_string($db,$_POST['question']);
    
    $success = 'false';
    $sql = "INSERT INTO `discussion` (`enrollment`, `question`) VALUES ('".$_SESSION['login_user']."','".$myquestion."')";
    if(mysqli_query($db,$sql))
    {
        header("location: discussion.php");

    }
    else{
        $success = 'false';
        
    }
       
}

?>

    <head>
        <title>Alumni Association</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            <br><br>
            <h1 id="joinform"> Enter your question </h1>
            <form method="post" action="">
                <input type="hidden" name="csrfmiddlewaretoken" value="4YqJt2nIXX5T0uIdvpLGtdj0IPkEvCVOGErhfY3Nvpcpowe7htcFL1CTvN5XJ4dq">
                <fieldset class="form-group">



                    <div id="div_id_enrollment" class="form-group">
                        <h3>Question</h3>
                        <div class=""><textarea id="question" name="question" rows="10" cols=100 style="border-radius: 10px; outline: none;"></textarea>
                        </div>

                </fieldset>
                    <button class="btn btn-outline-dark" name="ask" value="ask">Ask question</button>
                
            </form>

            </div>


        <br><br>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="scrolling.js"></script>
    </body>

</html>