<?php
session_start();                

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src = "script160.js"></script>
        <script src = "script161.js"></script>
        <script src = "script162.js"></script>
        <script src = "script163.js"></script>
         <script src = "script164.js"></script>
         <script src = "script165.js"></script>
         <script src = "script166.js"></script>
         <script src = "script167.js"></script>
         <script src = "script168.js"></script>
         <script src = "script169.js"></script>
         <script src = "script170.js"></script>
         <script src = "script171.js"></script>
         <script src = "script172.js"></script>
         <script src = "script173.js"></script>
         <script src = "script178.js"></script>
         <script src = "script179.js"></script>
        <script src = "script180.js"></script>
        <script src = "script181.js"></script>
        <script src = "script182.js"></script>
        <script src = "script98.js"></script>
        <script src = "script99.js"></script>
        <script src = "script100.js"></script>
        <script src = "script101.js"></script>
        <script src = "script102.js"></script>
        <script src = "script103.js"></script>
        <script src = "script104.js"></script>

         

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
                        <img src="img/160.jpg" alt="">
                        <div class="caption">
                            <h3>kandiballu 1kg</h3>
                               
                          <p>ourprice:65</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname160" style="width:60px;" value="1" min="1">gms
    <button id = "formsubmit160" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response160"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/161.jpg" alt="">
                        <div class="caption">
                            <h3>bellam 1kg </h3>
                               
                          <p>ourprice:70</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
    <input type = "number" id = "fname161" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit161" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response161"></div>
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
                        <img src="img/162.jpg" alt="">
                        <div class="caption">
                            <h3>groundnuts 1kg</h3>
                            <p>our price:70</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                              ?>
                                
    <div>
   <input type = "number" id = "fname162" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit162" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response162"></div>
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
                        <img src="img/163.jpg" alt="">
                        <div class="caption">
                            <h3>garlics 1kg</h3>
                                
                          <p>ourprice:48</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname163" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit163" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response163"></div>
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
                        <img src="img/164.jpg" alt="">
                        <div class="caption">
                            <h3>coconut 1kg </h3>
                              
                          <p>ourprice:168</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
   <input type = "number" id = "fname164" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit164" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response164"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/165.jpg" alt="">
                        <div class="caption">
                            <h3>chillies 1kg </h3>
                               
                          <p>ourprice:136/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
   <input type = "number" id = "fname165" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit165" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response165"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/166.jpg" alt="">
                        <div class="caption">
                            <h3>gajraj bansi rava 1kg</h3>
                               
                          <p>ourprice:40</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname166" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit166" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response166"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
 <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/167.jpg" alt="">
                        <div class="caption">
                            <h3>brown rice 1 kg </h3>
                              
                          <p>ourprice:60</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
  <input type = "number" id = "fname167" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit167" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response167"></div>
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
                        <img src="img/168.jpg" alt="">
                        <div class="caption">
                            <h3>priya upma rava 1kg </h3>
                              
                          <p>ourprice:46</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
   <input type = "number" id = "fname168" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit168" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response168"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                             
                    
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/169.jpg" alt="">
                        <div class="caption">
                            <h3>priya bombay rava </h3>
                            <p>Price: Rs. 46 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
    <div>
<input type = "number" id = "fname169" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit169" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response169"></div>
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
                        <img src="img/170.jpg" alt="">
                        <div class="caption">
                            <h3>lalitha idli rava 1kg</h3>
                            <p>Price: Rs. 32</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
 <input type = "number" id = "fname170" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit170" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response170"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/173.jpg" alt="">
                        <div class="caption">
                            <h3>chintapandu 1kg</h3>
                               
                          <p>ourprice:250</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
  <input type = "number" id = "fname173" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit173" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response173"></div>
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
                        <img src="img/172.jpg" alt="">
                        <div class="caption">
                            <h3>golden barsi rava 1kg</h3>
                               
                          <p>ourprice:45</p> 
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname172" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit172" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response172"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>     
                        <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/178.jpg" alt="">
                        <div class="caption">
                            <h3>pappulu 1kg</h3>
                               
                          <p>ourprice:62</p> 
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
   <input type = "number" id = "fname178" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit178" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response178"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>    
                    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/179.jpg" alt="">
                        <div class="caption">
                            <h3>pesalu 1kg</h3>
                               
                          <p>ourprice:85</p> 
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
  <input type = "number" id = "fname179" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit179" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response179"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
                </div>  
                    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/180.jpg" alt="">
                        <div class="caption">
                            <h3>pesara badalu 1kg</h3>
                               
                          <p>ourprice:78</p> 
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
    <input type = "number" id = "fname180" style="width:60px;" value="1" min="1">gms
	
    <button id = "formsubmit180" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response180"></div>
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
                        <img src="img/181.jpg" alt="">
                        <div class="caption">
                            <h3>pottu pesarlu 1kg</h3>
                               
                          <p>ourprice:86</p> 
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {?>
                                
<div>
<input type = "number" id = "fname181" style="width:60px;" value="1" min="1">gms
    <button id = "formsubmit181" style="width:75px;" class="btn btn-primary">add</button><br>
    <div id="response181"></div>
</div>
                               
                           <?php }
                            ?>
                        </div>
                    </div>
         
                               
                    
            </div>
                 
            </div>



   
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>

