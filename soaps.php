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
        <script src = "script20.js"></script>
        <script src = "script21.js"></script>
        <script src = "script134.js"></script>
        <script src = "script135.js"></script>
        <script src = "script136.js"></script>
        <script src = "script137.js"></script>
        <script src = "script138.js"></script>
        <script src = "script139.js"></script>
        <script src = "script146.js"></script>
        <script src = "script147.js"></script>
<script src = "script177.js"></script>
<script src = "script176.js"></script>
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
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>santoor 4 soaps 125g x 4 </h3>
                            <p>Price: Rs.140</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname20" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit20" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response20"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>mysore sandal 75gm </h3>
                            <p>Price: Rs. 34.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname21" style="width:75px;" value="1">
	
    <button id = "formsubmit21" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response21"></div>
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
                        <img src="img/134.jpg" alt="">
                        <div class="caption">
                            <h3>dettol cool 75g  </h3>
                             mrp:  <strike> Rs.32</strike>
                          <p>ourprice:26</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname134" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit134" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response134"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/135.jpg" alt="">
                        <div class="caption">
                            <h3>dettol orginal 75g</h3>
                            mrp:  <strike> Rs.37</strike>
                          <p>ourprice:31</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname135" style="width:75px;" value="1">
	
    <button id = "formsubmit135" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response135"></div>
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
                        <img src="img/136.jpg" alt="">
                        <div class="caption">
                            <h3>lux soft touch 150g  </h3>
                             mrp:  <strike> Rs.39</strike>
                          <p>ourprice:37</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname136" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit136" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response136"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/137.jpg" alt="">
                        <div class="caption">
                            <h3>lux soft touch 100g  </h3>
                             mrp:  <strike> Rs.28</strike>
                          <p>ourprice:27</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname137" style="width:75px;" value="1">
	
    <button id = "formsubmit137" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response137"></div>
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
                        <img src="img/138.jpg" alt="">
                        <div class="caption">
                            <h3>lux fresh splash 150g  </h3>
                            mrp:  <strike> Rs.39</strike>
                          <p>ourprice:37</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname138" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit138" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response138"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/139.jpg" alt="">
                        <div class="caption">
                            <h3>lux fresh splash 100g</h3>
                           mrp:  <strike> Rs.29</strike>
                          <p>ourprice:27</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname139" style="width:75px;" value="1">
	
    <button id = "formsubmit139" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response139"></div>
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
                        <img src="img/147.jpg" alt="">
                        <div class="caption">
                            <h3>mysore sandal soap 125gms  </h3>
                             mrp:  <strike> Rs.60</strike>
                          <p>ourprice:56</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname147" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit147" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response147"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/146.jpg" alt="">
                        <div class="caption">
                            <h3>santoor 100gs </h3>
                             mrp:  <strike> Rs.28</strike>
                          <p>ourprice:27</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname146" style="width:75px;" value="1">
	
    <button id = "formsubmit146" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response146"></div>
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
                        <img src="img/177.jpg" alt="">
                        <div class="caption">
                            <h3>mysore sandal box 3soaps</h3>
                             mrp:  <strike> Rs.210</strike>
                          <p>ourprice:203</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname177" style="width:75px;" value="1">
	
    <button id = "formsubmit177" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response177"></div>
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
                        <img src="img/176.jpg" alt="">
                        <div class="caption">
                            <h3>hamam 100gs </h3>
                             mrp:  <strike> Rs.30</strike>
                          <p>ourprice:29</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname176" style="width:75px;" value="1">
	
    <button id = "formsubmit176" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response176"></div>
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

