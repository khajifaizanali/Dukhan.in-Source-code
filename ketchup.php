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
        <script src = "script118.js"></script>
        <script src = "script119.js"></script>
        <script src = "script120.js"></script>
        <script src = "script121.js"></script>
         <script src = "script122.js"></script>

    </head>

    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            
            <hr>

            
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/118.jpg" alt="">
                        <div class="caption">
                            <h3>kissan fresh tomato ketchup 200g</h3>
                            <p>Price: Rs. 57</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname118" style="width:75px;" value="1">
	
    <button id = "formsubmit118" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response118"></div>
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
                        <img src="img/119.jpg" alt="">
                        <div class="caption">
                            <h3>kissan sweet and spicy 200g</h3>
                                MRP:  <strike> Rs.60</strike>
                          <p>ourprice:57</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname119" style="width:75px;" value="1">
	
    <button id = "formsubmit119" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response119"></div>
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
                        <img src="img/122.jpg" alt="">
                        <div class="caption">
                            <h3>kisan mixed fruit jam 500gm </h3>
 MRP:  <strike> Rs.135</strike>
                          <p>ourprice:132</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname122" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit122" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response122"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/121.jpg" alt="">
                        <div class="caption">
                            <h3>kissan mixed fruit jam 200gm</h3>
                             MRP:  <strike> Rs.60</strike>
                          <p>ourprice:58</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname121" style="width:75px;" value="1">
	
    <button id = "formsubmit121" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response121"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>


          
            </div>
            
            <div class="row text-center" id="cameras">
           
 
            </div>


   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
