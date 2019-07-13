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
<script src = "script47.js"></script>
<script src = "script48.js"></script>
<script src = "script49.js"></script>
<script src = "script50.js"></script>
<script src = "script51.js"></script>
<script src = "script52.js"></script>
<script src = "script53.js"></script>
<script src = "script54.js"></script>


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
                        <img src="img/48.jpg" alt="">
                        <div class="caption">
                            <h3>sprite 600ml </h3>
                            <p>Price: Rs. 35.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname48" style="width:75px;" value="1">
	
    <button id = "formsubmit48" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response48"></div>
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
                        <img src="img/49.jpg" alt="">
                        <div class="caption">
                            <h3> thumsup 1.25l</h3>
                            <p>Price: Rs. 60.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname49" style="width:75px;" value="1">
	
    <button id = "formsubmit49" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response49"></div>
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
                        <img src="img/54.jpg" alt="">
                        <div class="caption">
                            <h3>fanta 600ml</h3>
                            <p>Price: Rs.35.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname54" style="width:75px;" value="1">
	
    <button id = "formsubmit54" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response54"></div>
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
                        <img src="img/50.jpg" alt="">
                        <div class="caption">
                            <h3>soda(kinley) 1.25l </h3>
                            <p>Price: Rs. 30.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname50" style="width:75px;" value="1">
	
    <button id = "formsubmit50" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response50"></div>
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
                        <img src="img/51.jpg" alt="">
                        <div class="caption">
                            <h3>pulpy orange 1l</h3>
                            <p>Price: Rs. 70.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname51" style="width:75px;" value="1">
	
    <button id = "formsubmit51" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response51"></div>
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
                        <img src="img/52.jpg" alt="">
                        <div class="caption">
                            <h3>limca 600ml</h3>
                            <p>Price: Rs. 35.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname52" style="width:75px;" value="1">
	
    <button id = "formsubmit52" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response52"></div>
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
