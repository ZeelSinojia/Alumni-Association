<!DOCTYPE html>
<html>

<?php
   include('session.php');
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
                $sql = "SELECT * FROM discussion";
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
                            
                            <div class="col-md-3"><a class="btn btn-outline-dark" href="answer.php?varname=<?php echo $row['questionid'] ?>">Answer</a></div>
                            
                            <div class="col-md-12">
                                <p>
                                    <?php echo $row['answer'] ?> </p>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                }
            ?>
            </ul>

        </div>

        <br><br>
        <div class="container">
            <a class="btn btn-outline-dark" href="./askquestion.php">Ask Questions</a>
        </div>
        


            <br><br>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script src="scrolling.js"></script>
    </body>

</html>