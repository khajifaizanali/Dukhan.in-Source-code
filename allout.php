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
        <script src = "script24.js"></script>
        <script src = "script25.js"></script>
        <script src = "script78.js"></script>
        <script src = "script79.js"></script>
        <script src = "script80.js"></script>
        <script src = "script81.js"></script> 
        <script src = "script82.js"></script>
        <script src = "script83.js"></script>
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
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>allout 45ml </h3>
                         MRP:  <strike> Rs.72</strike>
                          <p>ourprice:69</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname24" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit24" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response24"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>allout with machine </h3>
                              MRP:  <strike> Rs.126</strike>
                          <p>ourprice:121</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname25" style="width:75px;" value="1">
	
    <button id = "formsubmit25" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response25"></div>
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
                        <img src="img/78.jpg" alt="">
                        <div class="caption">
                            <h3>good knight 45ml </h3>
                              MRP:  <strike> Rs.72</strike>
                          <p>ourprice:69</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname78" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit78" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response78"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/79.jpg" alt="">
                        <div class="caption">
                            <h3>good knight with machine </h3>
                             MRP:  <strike> Rs.126</strike>
                          <p>ourprice:121</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname79" style="width:75px;" value="1">
	
    <button id = "formsubmit79" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response79"></div>
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
                        <img src="img/83.jpg" alt="">
                        <div class="caption">
                            <h3>hit cockroach 200ml </h3>
                            MRP:  <strike> Rs.94</strike>
                          <p>ourprice:91</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname83" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit83" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response83"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/82.jpg" alt="">
                        <div class="caption">
                            <h3>hit mosquito 200ml </h3>
                           MRP:  <strike> Rs.94</strike>
                          <p>ourprice:91</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname82" style="width:75px;" value="1">
	
    <button id = "formsubmit82" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response82"></div>
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
                        <img src="img/80.jpg" alt="">
                        <div class="caption">
                            <h3>hit mosquito 400ml </h3>
                             MRP:  <strike> Rs.176</strike>
                          <p>ourprice:172</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname80" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit80" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response80"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/81.jpg" alt="">
                        <div class="caption">
                            <h3>hit cockroach 400ml </h3>
                            MRP:  <strike> Rs.176</strike>
                          <p>ourprice:172</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname81" style="width:75px;" value="1">
	
    <button id = "formsubmit81" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response81"></div>
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

