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
<script src = "script226.js"></script>
  <script src = "script227.js"></script>
        <script src = "script228.js"></script>
        <script src = "script229.js"></script>
        <script src = "script230.js"></script>
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
                        <img src="img/212_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-1 </h3>
                                                          
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
	<input type = "number" id = "fname212" style="width:75px;" value="1" min="1">
    <button id = "formsubmit212" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response212"></div>
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
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
   <input type = "number" id = "fname213" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit213" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response213"></div>
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
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
    <input type = "number" id = "fname214" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit214" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response214"></div>
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
                        <img src="img/226_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-4  </h3>
                                            
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
    <input type = "number" id = "fname226" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit226" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response226"></div>
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

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/227_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-5 </h3>
                                                          
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
	<input type = "number" id = "fname227" style="width:75px;" value="1" min="1">
    <button id = "formsubmit227" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response227"></div>
</div>                          
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/228_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-6 </h3>
                                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
   <input type = "number" id = "fname228" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit228" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response228"></div>
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
                        <img src="img/229_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-7  </h3>
                                            
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
    <input type = "number" id = "fname229" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit229" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response229"></div>
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
                        <img src="img/230_1.jpg" alt="">
                        <div class="caption">
                            <h3>rakhi-8  </h3>
                                            
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
<div style="float:left;margin-right:100px;margin-left:20px;">no of combos:</div>
    <input type = "number" id = "fname230" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit230" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response230"></div>
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
        <?php include("includes/footer.php"); ?>
    </body>

</html>

