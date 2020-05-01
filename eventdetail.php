<?php 
   include('session.php');
   $eventid = $_GET['varname'];
   
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
                            <p>Event Details</p>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </li>

                <?php 
                $sql = "SELECT * FROM `event` where eventid = $eventid";
                $result = mysqli_query($db,$sql);
                if($result == false){

                    ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-9">
                            <p>No events found</p>
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
                                <h2>
                                    <?php echo $row['eventname'] ?>
                                </h2>
                            </div>
                            <div class="col-md-3">
                                <h4>
                                    <?php echo $row['hostname'] ?>
                                </h4>
                            </div>
                            <br><br>
                            
                            <div class="col-md-9">
                                <p>
                                    <?php echo $row['venue'] ?>
                    </p>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    <?php echo $row['eventdetails'] ?>
                    </p>
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
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="scrolling.js"></script>
    </body>

</html>