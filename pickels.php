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
        <script src = "script34.js"></script>
        <script src = "script66.js"></script>
        <script src = "script67.js"></script>
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
                        <img src="img/34.jpg" alt="">
                        <div class="caption">
                            <h3>pickel priya mango 300gm</h3>
                             mrp:  <strike> Rs.70</strike>
                          <p>ourprice:68</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname34" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit34" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response34"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/66.jpg" alt="">
                        <div class="caption">
                            <h3>priya lemon pickel 300 gms</h3>
                            <p>Price: Rs. 68.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname66" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit66" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response66"></div>
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
                        <img src="img/67.jpg" alt="">
                        <div class="caption">
                            <h3>priya tomato pickel 300gm</h3>
                              MRP:  <strike> Rs.70</strike>
                          <p>ourprice:68</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname67" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit67" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response67"></div>
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

