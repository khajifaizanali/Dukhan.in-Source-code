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
        <script src = "script210.js"></script>
        <script src = "script211.js"></script>
        <script src = "script212.js"></script>
        <script src = "script213.js"></script>
  <script src = "script209.js"></script>
        <script src = "script214.js"></script>
        <script src = "script215.js"></script>
        <script src = "script216.js"></script>
  <script src = "script217.js"></script>
        <script src = "script73.js"></script>
        <script src = "script75.js"></script>
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
                        <img src="img/209_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-1 </h3>
                               
                                                      
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
	<input type = "number" id = "fname209" style="width:75px;" value="1" min="1">
    <button id = "formsubmit209" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response209"></div>
</div>                          
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/210_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-2 </h3>
                                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
   <input type = "number" id = "fname210" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit210" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response210"></div>
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
                        <img src="img/211_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-3  </h3>
                                            
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname211" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit211" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response211"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

               
   
            <hr>
        </div>
</div>
       
    </body>

        <footer>
    <div class="container-fluid">
        <center>
            <p> Contact Us: 9642914399,9626222139</p>	
        </center>
    </div>
</footer>
</html>

