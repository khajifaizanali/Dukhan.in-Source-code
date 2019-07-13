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
<script src = "script55.js"></script>
<script src = "script56.js"></script>
<script src = "script57.js"></script>
<script src = "script58.js"></script>
<script src = "script59.js"></script>
<script src = "script60.js"></script>
<script src = "script61.js"></script>
<script src = "script77.js"></script>


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
                        <img src="img/55.jpg" alt="">
                        <div class="caption">
                            <h3>lays blue </h3>
                            <p>Price: Rs.10</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname55" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit55" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response55"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/56.jpg" alt="">
                        <div class="caption">
                            <h3>lays blue  </h3>
                            <p>Price: Rs. 20 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname56" style="width:75px;" value="1">
	
    <button id = "formsubmit56" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response56"></div>
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
                        <img src="img/57.jpg" alt="">
                        <div class="caption">
                            <h3>lays green </h3>
                            <p>Price: Rs. 10.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname57" style="width:75px;" value="1">
	
    <button id = "formsubmit57" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response57"></div>
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
                        <img src="img/58.jpg" alt="">
                        <div class="caption">
                            <h3>lays green </h3>
                            <p>Price: Rs.20.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname58" style="width:75px;" value="1">
	
    <button id = "formsubmit58" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response58"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/59.jpg" alt="">
                        <div class="caption">
                            <h3>lays red  </h3>
                            <p>Price: Rs. 10.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname59" style="width:75px;" value="1">
	
    <button id = "formsubmit59" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response59"></div>
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
                        <img src="img/60.jpg" alt="">
                        <div class="caption">
                            <h3>lays yellow </h3>
                            <p>Price: Rs. 10.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname60" style="width:75px;" value="1">
	
    <button id = "formsubmit60" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response60"></div>
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
                        <img src="img/77.jpg" alt="">
                        <div class="caption">
                            <h3>lays red </h3>
                            <p>Price: Rs. 20.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname77" style="width:75px;" value="1">
	
    <button id = "formsubmit77" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response77"></div>
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
                        <img src="img/61.jpg" alt="">
                        <div class="caption">
                            <h3>lays yellow  </h3>
                            <p>Price: Rs. 20.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname61" style="width:75px;" value="1">
	
    <button id = "formsubmit61" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response61"></div>
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
