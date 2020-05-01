<?php 
   include('session.php');
   $questionid = $_GET['varname'];
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $myanswer = mysqli_real_escape_string($db,$_POST['answer']);
    
    $success = 'false';
    $sql = "UPDATE `discussion` SET answer = '".$myanswer."' WHERE questionid = $questionid";
    if(mysqli_query($db,$sql))
    {
        header("location: discussion.php");

    }
    else{

        $success = 'false';
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
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

        <div class="container fadeIn fourth fadeInDown" style="margin-top: 20px; margin-bottom:20px;">
            <br>
            <ul class="list-group">
                <li class="list-group-item bg-dark text-white">
                    <div class="row">
                        <div class="col-md-3">
                            <p>Questions</p>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </li>

                <?php 
                $sql = "SELECT * FROM discussion where questionid = $questionid";
                $result = mysqli_query($db,$sql);
                
                if($result == false){

                    ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-9">
                            <p>No questions found</p>
                        </div>
                        <div class="col-md-3">
                            <h6></h6>
                            <p></p>
                        </div>
                    </div>
                </li>
                <?php
                }
        
                else{
                    //$active = $row['active'];
                    //echo $rowresult;
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                    ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-9">
                                <h3>
                                    <?php echo $row['question'] ?>
                                </h3>
                            </div>
                            
                            
                        </div>
                    </li>
                    <?php
                    }
                }
            ?>
            </ul>

        </div>


        <div class="container">
            <br><br>
            <form method="post" action="">
                <input type="hidden" name="csrfmiddlewaretoken" value="4YqJt2nIXX5T0uIdvpLGtdj0IPkEvCVOGErhfY3Nvpcpowe7htcFL1CTvN5XJ4dq">
                <fieldset class="form-group">



                    <div id="div_id_enrollment" class="form-group">
                        <h3>Answer</h3>
                        <div class=""><textarea id="answer" name="answer" rows="10" cols=100 style="border-radius: 10px; outline: none;"></textarea>
                        </div>

                </fieldset>
                    <button class="btn btn-outline-dark" name="ask" value="ask">Submit</button>
                
            </form>

            </div>


        <br><br>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="scrolling.js"></script>
    </body>

</html>