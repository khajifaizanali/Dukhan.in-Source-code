<?php
session_start();                

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src = "script111.js"></script>
        <script src = "script112.js"></script>
        <script src = "script113.js"></script>
        <script src = "script76.js"></script>

    </head>

    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/111.jpg" alt="">
                        <div class="caption">
                            <h3>maggi 280gm</h3>
                            <p>Price: Rs. 44</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname111" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit111" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response111"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/112.jpg" alt="">
                        <div class="caption">
                            <h3>maggi 70gm </h3>
                            <p>Price: Rs. 11.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname112" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit112" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response112"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/113.jpg" alt="">
                        <div class="caption">
                            <h3>yipee 280gm</h3>
                            <p>Price: Rs. 45</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname113" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit113" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response113"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

          
            </div>

   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>


