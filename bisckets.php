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
      <script src = "script44.js"></script>
        <script src = "script45.js"></script>
        <script src = "script46.js"></script>
        <script src = "script105.js"></script>
          <script src = "script106.js"></script>
          <script src = "script107.js"></script>
          <script src = "script175.js"></script>

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
                        <img src="img/44.jpg" alt="">
                        <div class="caption">
                            <h3>bourbon 100gms</h3>
                            <p>our Price: Rs. 25</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname44" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit44" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response44"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/45.jpg" alt="">
                        <div class="caption">
                            <h3>dark fantasy 75gms </h3>
                            <p>our Price: Rs. 30.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname45" style="width:75px;" value="1">
	
    <button id = "formsubmit45" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response45"></div>
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
                        <img src="img/107.jpg" alt="">
                        <div class="caption">
                            <h3>gooday butter cookies </h3>
                            <p>our Price: Rs. 10.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname107" style="width:75px;" value="1">
	
    <button id = "formsubmit107" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response107"></div>
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
                        <img src="img/105.jpg" alt="">
                        <div class="caption">
                            <h3>hide and seek 100g</h3>
                            <p>our Price: Rs. 25</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname105" style="width:75px;" value="1">
	
    <button id = "formsubmit105" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response105"></div>
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
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/106.jpg" alt="">
                        <div class="caption">
                            <h3>good day cashew cookies 100g </h3>
                            <p>Price: Rs.20</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname106" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit106" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response106"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
<div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/175.jpg" alt="">
                        <div class="caption">
                            <h3>50-50 100gms </h3>
                            <p>Price: Rs.10</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname175" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit175" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response175"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
               

 
            </div>


   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>

