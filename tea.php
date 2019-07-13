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
        <script src = "script123.js"></script>
<script src = "script124.js"></script>
<script src = "script125.js"></script>
<script src = "script126.js"></script>
<script src = "script127.js"></script>
<script src = "script128.js"></script>
<script src = "script129.js"></script>
<script src = "script144.js"></script>
<script src = "script145.js"></script>
<script src = "script155.js"></script>
<script src = "script151.js"></script>
<script src = "script152.js"></script>
<script src = "script153.js"></script>
<script src = "script154.js"></script>

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
                        <img src="img/123.jpg" alt="">
                        <div class="caption">
                            <h3>red label 500gm </h3>
                            <p>Price: Rs. 205</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname123" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit123" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response123"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/124.jpg" alt="">
                        <div class="caption">
                            <h3>taj mahal 500gm </h3>
                             MRP:  <strike> Rs.280</strike>
                          <p>ourprice:275</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname124" style="width:75px;" value="1">
	
    <button id = "formsubmit124" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response124"></div>
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
                        <img src="img/125.jpg" alt="">
                        <div class="caption">
                            <h3>3roses 250gm</h3>
                            <p>Price: Rs. 135.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname125" style="width:75px;" value="1">
	
    <button id = "formsubmit125" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response125"></div>
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
                        <img src="img/126.jpg" alt="">
                        <div class="caption">
                            <h3>3 roses 500gm</h3>
                             MRP:  <strike> Rs.265</strike>
                          <p>ourprice:256</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname126" style="width:75px;" value="1">
	
    <button id = "formsubmit126" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response126"></div>
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
                        <img src="img/127.jpg" alt="">
                        <div class="caption">
                            <h3>bru green label coffee 100g </h3>
                           MRP:  <strike> Rs.34</strike>
                          <p>ourprice:32</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname127" style="width:75px;" value="1">
	
    <button id = "formsubmit127" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response127"></div>
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
                        <img src="img/128.jpg" alt="">
                        <div class="caption">
                            <h3>bru instant trupti 200g</h3>
                            <p>Price: Rs. 119.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname128" style="width:75px;" value="1">
	
    <button id = "formsubmit128" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response128"></div>
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
                        <img src="img/129.jpg" alt="">
                        <div class="caption">
                            <h3>nescafe coffee 200g</h3>
                            <p>Price: Rs. 130.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                               ?>
                                
    <div>
    <input type = "number" id = "fname129" style="width:75px;" value="1">
	
    <button id = "formsubmit129" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response129"></div>
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
                        <img src="img/144.jpg" alt="">
                        <div class="caption">
                            <h3>redlabel 250gm </h3>
                             mrp:  <strike> Rs.105</strike>
                          <p>ourprice:102</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                ?>
                                
    <div>
    <input type = "number" id = "fname144" style="width:75px;" value="1">
	
    <button id = "formsubmit144" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response144"></div>
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
                        <img src="img/145.jpg" alt="">
                        <div class="caption">
                            <h3>tajmahal 250gml</h3>
                             mrp:  <strike> Rs.140</strike>
                          <p>ourprice:137</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname145" style="width:75px;" value="1">
	
    <button id = "formsubmit145" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response145"></div>
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
                        <img src="img/155.jpg" alt="">
                        <div class="caption">
                            <h3lipton green tea tulasi</h3>
                             mrp:  <strike> Rs.140</strike>
                          <p>ourprice:133</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname155" style="width:75px;" value="1">
	
    <button id = "formsubmit155" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response155"></div>
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
                        <img src="img/151.jpg" alt="">
                        <div class="caption">
                            <h3>lipton honey and lemon green tea 100gm</h3>
                             mrp:  <strike> Rs.120</strike>
                          <p>ourprice:116</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname151" style="width:75px;" value="1">
	
    <button id = "formsubmit151" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response151"></div>
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
                        <img src="img/154.jpg" alt="">
                        <div class="caption">
                            <h3>lipton  green tea mint 100gm 25bags</h3>
                             mrp:  <strike> Rs.140</strike>
                          <p>ourprice:133</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname154" style="width:75px;" value="1">
	
    <button id = "formsubmit154" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response154"></div>
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
                        <img src="img/152.jpg" alt="">
                        <div class="caption">
                            <h3>lipton honey and lemon green tea 100gm 25bags</h3>
                             mrp:  <strike> Rs.140</strike>
                          <p>ourprice:133</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname152" style="width:75px;" value="1">
	
    <button id = "formsubmit152" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response152"></div>
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
                        <img src="img/153.jpg" alt="">
                        <div class="caption">
                            <h3>lipton  green tea pure 100gm 25bags</h3>
                             mrp:  <strike> Rs.140</strike>
                          <p>ourprice:133</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                               ?>
                                
    <div>
    <input type = "number" id = "fname153" style="width:75px;" value="1">
	
    <button id = "formsubmit153" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response153"></div>
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
