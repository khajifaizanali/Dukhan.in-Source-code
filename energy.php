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
        <script src = "script37.js"></script>
        <script src = "script38.js"></script>
        <script src = "script39.js"></script>
        <script src = "script68.js"></script>

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
                        <img src="img/37.jpg" alt="">
                        <div class="caption">
                            <h3>horliks 200gm </h3>
                               MRP:  <strike> Rs.105</strike>
                          <p>ourprice:96</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname37" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit37" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response37"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/38.jpg" alt="">
                        <div class="caption">
                            <h3>horliks 500gm</h3>
                               MRP:  <strike> Rs.215</strike>
                          <p>ourprice:211</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname38" style="width:75px;" value="1">
	
    <button id = "formsubmit38" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response38"></div>
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
                        <img src="img/39.jpg" alt="">
                        <div class="caption">
                            <h3>boost 500gm  </h3>
                                MRP:  <strike> Rs.220</strike>
                          <p>ourprice:216</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname39" style="width:75px;" value="1">
	
    <button id = "formsubmit39" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response39"></div>
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
                        <img src="img/68.jpg" alt="">
                        <div class="caption">
                            <h3>bournvita 500gms</h3>
                                MRP:  <strike> Rs.215</strike>
                          <p>ourprice:194</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname68" style="width:75px;" value="1">
	
    <button id = "formsubmit68" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response68"></div>
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

