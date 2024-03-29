<?php
    require ("assets/common.php");
    if (!isset($_SESSION['email'])) {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | Ambulance Management System</title>
        <?php
            require ("assets/bootstrap_cdn.php");
        ?>
    </head>
    <body>
    <?php
        require("header.php");
    ?>
    <div class="container-fluid" style="margin:-15px;margin-top:-20px">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
                    <img src="images/amb1.jpg" alt="Los Angeles" style="width:100%;height:600px">
                </div>

                <div class="item">
                    <img src="images/amb2.jpg" alt="Chicago" style="width:100%;height:600px">
                </div>
                
                <div class="item">
                    <img src="images/amb3.jpg" alt="New york" style="width:100%;height:600px">
                </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
    </div>
    </body>
</html>

