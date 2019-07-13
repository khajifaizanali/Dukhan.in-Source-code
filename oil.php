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
        <script src = "script69.js"></script>
        <script src = "script70.js"></script>
        <script src = "script71.js"></script>
        <script src = "script76.js"></script>
 <script src = "script188.js"></script>

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
                        <img src="img/69.jpg" alt="">
                        <div class="caption">
                            <h3>fortune oil 1tr</h3>
                             MRP:  <strike> Rs.105</strike>
                          <p>ourprice:90</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname69" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit69" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response69"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/70.jpg" alt="">
                        <div class="caption">
                            <h3>priya oil 1ltr </h3>
                            MRP:  <strike> Rs.105</strike>
                          <p>ourprice:90</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname70" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit70" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response70"></div>
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
                        <img src="img/71.jpg" alt="">
                        <div class="caption">
                            <h3>freedom sunflower oil liter</h3>
                              MRP:  <strike> Rs.105</strike>
                          <p>ourprice:90</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname71" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit71" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response71"></div>
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
                        <img src="img/188.jpg" alt="">
                        <div class="caption">
                            <h3>freedom sunflower oil 5 liter</h3>
                              MRP:  <strike> Rs.535</strike>
                          <p>ourprice:483</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname188" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit188" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response188"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
          
            </div>
          
            </div>

   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>

