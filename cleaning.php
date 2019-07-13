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
      <script src = "script22.js"></script>
        <script src = "script23.js"></script>
        <script src = "script28.js"></script>
        <script src = "script29.js"></script>
         <script src = "script30.js"></script>
         <script src = "script84.js"></script>
         <script src = "script85.js"></script>
         <script src = "script86.js"></script>
         <script src = "script87.js"></script>
         <script src = "script149.js"></script>
         <script src = "script89.js"></script>
         <script src = "script90.js"></script>
         <script src = "script91.js"></script>
         <script src = "script92.js"></script>
         <script src = "script93.js"></script>
         <script src = "script94.js"></script>
        <script src = "script95.js"></script>
        <script src = "script96.js"></script>
        <script src = "script97.js"></script>
        <script src = "script98.js"></script>
        <script src = "script99.js"></script>
        <script src = "script100.js"></script>
        <script src = "script101.js"></script>
        <script src = "script102.js"></script>
        <script src = "script103.js"></script>
        <script src = "script104.js"></script>
          <script src = "script174.js"></script>

         

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
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>colin 500ml</h3>
                                MRP:  <strike> Rs.75</strike>
                          <p>ourprice:72</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname22" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit22" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response22"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>harpic power plus 500ml </h3>
                                MRP:  <strike> Rs.80</strike>
                          <p>ourprice:75</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname23" style="width:75px;" value="1">
	
    <button id = "formsubmit23" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response23"></div>
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
                        <img src="img/28.jpg" alt="">
                        <div class="caption">
                            <h3>rin 150gms </h3>
                            <p>Price: Rs. 10</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
    <input type = "number" id = "fname28" style="width:75px;" value="1">
	
    <button id = "formsubmit28" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response28"></div>
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
                        <img src="img/103.jpg" alt="">
                        <div class="caption">
                            <h3>surf excel easy wash 1kg </h3>
                                MRP:  <strike> Rs.114</strike>
                          <p>ourprice:109</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname103" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit103" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response103"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

               
 
            </div>
                        <div class="row text-center" id="cameras">
                            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/149.jpg" alt="">
                        <div class="caption">
                            <h3>surf excel quick wash 500g </h3>
                               MRP:  <strike> Rs.57</strike>
                          <p>ourprice:54</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname149" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit149" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response149"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/30.jpg" alt="">
                        <div class="caption">
                            <h3>surf excel quick wash 1kg </h3>
                                MRP:  <strike> Rs.195</strike>
                          <p>ourprice:187</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname30" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit30" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response30"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/84.jpg" alt="">
                        <div class="caption">
                            <h3>harpic powerplus 200ml</h3>
                               MRP:  <strike> Rs.35</strike>
                          <p>ourprice:32</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname84" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit84" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response84"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/104.jpg" alt="">
                        <div class="caption">
                            <h3>surf excel easy wash 500gm </h3>
                                MRP:  <strike> Rs.57</strike>
                          <p>ourprice:54</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname104" style="width:75px;" value="1">
	
    <button id = "formsubmit104" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response104"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
           
 

            </div>    <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/91.jpg" alt="">
                        <div class="caption">
                            <h3>vim gel 500ml </h3>
                               MRP:  <strike> Rs.104</strike>
                          <p>ourprice:100</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname91" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit91" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response91"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             
                    
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/93.jpg" alt="">
                        <div class="caption">
                            <h3>vim bar 300g </h3>
                            <p>Price: Rs. 20.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname93" style="width:75px;" value="1">
	
    <button id = "formsubmit93" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response93"></div>
</div>                          
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

               
          <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/95.jpg" alt="">
                        <div class="caption">
                            <h3>vimbar with pudina 150gm</h3>
                            <p>Price: Rs. 10</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname95" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit95" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response95"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/96.jpg" alt="">
                        <div class="caption">
                            <h3>vim gel 250ml</h3>
                               MRP:  <strike> Rs.45</strike>
                          <p>ourprice:43</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname96" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit96" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response96"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

               
              


            </div>
                 <div class="row text-center" id="cameras">
               <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/174.jpg" alt="">
                        <div class="caption">
                            <h3>ariel 500gm</h3>
                             MRP:  <strike> Rs.129</strike>
                          <p>ourprice:125</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname174" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit174" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response174"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/99.jpg" alt="">
                        <div class="caption">
                            <h3>tide lemon and mint 800gms</h3>
                               MRP:  <strike> Rs.98</strike>
                          <p>ourprice:94</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname99" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit99" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response99"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/100.jpg" alt="">
                        <div class="caption">
                            <h3>tide jasmine and rose 1kg</h3>
                                MRP:  <strike> Rs.98</strike>
                          <p>ourprice:92</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname100" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit100" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response100"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/101.jpg" alt="">
                        <div class="caption">
                            <h3>tide lemon and mint 500gms</h3>
                                MRP:  <strike> Rs.48</strike>
                          <p>ourprice:45</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname101" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit101" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response101"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                            
           
               

            </div>
            
            <div class="row text-center" id="cameras">
            <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/102.jpg" alt="">
                        <div class="caption">
                            <h3>tide jasmine and rose 500gms</h3>
                                MRP:  <strike> Rs.48</strike>
                          <p>ourprice:45</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname102" style="width:75px;" value="1" min="1">
	
    <button id = "formsubmit102" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response102"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                          
         



   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>

