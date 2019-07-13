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
        <script src = "script140.js"></script>
        <script src = "script141.js"></script>
        <script src = "script142.js"></script>
        <script src = "script143.js"></script>
 <script src = "script183.js"></script>
        <script src = "script184.js"></script>
        <script src = "script185.js"></script>
        <script src = "script186.js"></script>
           <script src = "script187.js"></script> 

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
                        <img src="img/140.jpg" alt="">
                        <div class="caption">
                            <h3>colgate maxfresh 150g </h3>
                             MRP:  <strike> Rs.88</strike>
                          <p>ourprice:85</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname140" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit140" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response140"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/141.jpg" alt="">
                        <div class="caption">
                            <h3>closeup redgel 150g </h3>
                             MRP:  <strike> Rs.88</strike>
                          <p>ourprice:85</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname141" style="width:75px;" value="1">
	
    <button id = "formsubmit141" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response141"></div>
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
                        <img src="img/142.jpg" alt="">
                        <div class="caption">
                            <h3>pepsodent 150gm </h3>
                              MRP:  <strike> Rs.91</strike>
                          <p>ourprice:88</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname142" style="width:75px;" value="1">
	
    <button id = "formsubmit142" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response142"></div>
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
                        <img src="img/143.jpg" alt="">
                        <div class="caption">
                            <h3>colgate vedshakthi 100g</h3>
                            <p>Price: Rs. 55</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname143" style="width:75px;" value="1">
	
    <button id = "formsubmit143" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response143"></div>
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
                        <img src="img/183.jpg" alt="">
                        <div class="caption">
                            <h3>colgate neem 100g </h3>
                             MRP:  <strike> Rs.55</strike>
                          <p>ourprice:52</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname183" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit183" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response140"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/184.jpg" alt="">
                        <div class="caption">
                            <h3>closeup neem 200gm </h3>
                             MRP:  <strike> Rs.88</strike>
                          <p>ourprice:84</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname184" style="width:75px;" value="1">
	
    <button id = "formsubmit184" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response184"></div>
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
                        <img src="img/185.jpg" alt="">
                        <div class="caption">
                            <h3>colgate strong teeth 150gm </h3>
                              MRP:  <strike> Rs.65</strike>
                          <p>ourprice:62</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname185" style="width:75px;" value="1">
	
    <button id = "formsubmit185" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response185"></div>
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
                        <img src="img/186.jpg" alt="">
                        <div class="caption">
                            <h3>colgate strong teeth 200g</h3>
                            <p>Price: Rs. 84</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname186" style="width:75px;" value="1">
	
    <button id = "formsubmit186" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response186"></div>
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
                        <img src="img/187.jpg" alt="">
                        <div class="caption">
                            <h3>colgate strong teeth 100g</h3>
                            <p>Price: Rs. 45</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname187" style="width:75px;" value="1">
	
    <button id = "formsubmit187" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response187"></div>
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

