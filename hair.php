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
<script src = "script13.js"></script>
<script src = "script14.js"></script>
<script src = "script16.js"></script>
<script src = "script17.js"></script>
<script src = "script18.js"></script>
<script src = "script19.js"></script>
<script src = "script62.js"></script>
<script src = "script63.js"></script>
<script src = "script64.js"></script>
<script src = "script65.js"></script>
<script src = "script157.js"></script>
<script src = "script158.js"></script>
<script src = "script159.js"></script>

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
                        <img src="img/14.jpg" alt="">
                        <div class="caption">
                            <h3>parachute oil 100ml </h3>
                            <p>Price: Rs. 39</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname14" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit14" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response14"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/16.jpg" alt="">
                        <div class="caption">
                            <h3>head and shoulders classic 180ml </h3>
                              MRP:  <strike> Rs.162</strike>
                          <p>ourprice:157</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname16" style="width:75px;" value="1">
	
    <button id = "formsubmit16" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response16"></div>
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
                        <img src="img/13.jpg" alt="">
                        <div class="caption">
                            <h3>parachute oil 250ml</h3>
                                MRP:  <strike> Rs.105</strike>
                          <p>ourprice:102</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname13" style="width:75px;" value="1">
	
    <button id = "formsubmit13" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response13"></div>
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
                        <img src="img/17.jpg" alt="">
                        <div class="caption">
                            <h3>dove daily shine 180ml</h3>
                            <p>Price: Rs.143.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname17" style="width:75px;" value="1">
	
    <button id = "formsubmit17" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response17"></div>
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
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>vatika oil 150ml </h3>
                                 MRP:  <strike> Rs.84</strike>
                          <p>ourprice:81</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname19" style="width:75px;" value="1">
	
    <button id = "formsubmit19" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response19"></div>
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
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>beer shampoo 180ml</h3>
                                 MRP:  <strike> Rs.155</strike>
                          <p>ourprice:150</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname18" style="width:75px;" value="1">
	
    <button id = "formsubmit18" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response18"></div>
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
                        <img src="img/159.jpg" alt="">
                        <div class="caption">
                            <h3>clinic plus strong scalp anti dandruff shampoo 175...</h3>
                             MRP:  <strike> Rs.90</strike>
                          <p>ourprice:77</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname159" style="width:75px;" value="1">
	
    <button id = "formsubmit159" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response159"></div>
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
                        <img src="img/157.jpg" alt="">
                        <div class="caption">
                            <h3>head and shoulders smooth and silky 180ml </h3>
                            <p>Price: Rs. 144.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname157" style="width:75px;" value="1">
	
    <button id = "formsubmit157" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response157"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/158.jpg" alt="">
                        <div class="caption">
                            <h3>head and shoulders cool menthol 180ml</h3>
                            <p>Price: Rs. 158.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname158" style="width:75px;" value="1">
	
    <button id = "formsubmit158" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response158"></div>
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
                        <img src="img/63.jpg" alt="">
                        <div class="caption">
                            <h3>head and shoulders lemon fresh 180ml</h3>
                            <p>Price: Rs. 139.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname63" style="width:75px;" value="1">
	
    <button id = "formsubmit63" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response63"></div>
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
