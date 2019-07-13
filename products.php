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
<script src = "script_1.js"></script>
<script src = "script.js"></script>
<script src = "script_2.js"></script>
<script src = "script_3.js"></script>
<script src = "script_4.js"></script>
<script src = "script_5.js"></script>
<script src = "script_6.js"></script>
<script src = "script_7.js"></script>
<script src = "script_8.js"></script>
<script src = "script_9.js"></script>
<script src = "script_10.js"></script>
<script src = "script_11.js"></script>


    </head>

    <body>
        <?php
        include 'includes/header.php';
        
        ?>

   <script src="js1/jssor.slider-27.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:480px;overflow:hidden;">
            <div data-p="170">
                <img data-u="image" src="img/01.jpeg" />
            </div>
            <div data-p="170">
                <img data-u="image" src="img/02.jpeg" />
            </div>
            <div data-p="170">
                <img data-u="image" src="img/03.jpeg" />
            </div>
            <div data-p="170">
                <img data-u="image" src="img/po3.jpeg" />
            </div>
           
            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
   <div class="container" style="display:block;">
<img src="img/po2.jpeg" alt="" width="100%" height="100%" />
</div>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
       

            <hr>

            	  
                   <div class="row text-center" id="watches">
 <div class="col-md-3 col-sm-6 home-feature">
                    <a href="rakhi.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/209.jpg" alt="">
                        <div class="caption">
                            <h3>Rakhi</h3>
                            <p><a href="rakhi.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                    <a href="wheat.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t1.jpeg" alt="">
                        <div class="caption">
                            <h3>wheat </h3>
                            
                            <p><a href="wheat.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                      
                      
                     

                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="allout.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t3.jpg" alt="">
                        <div class="caption">
                            <h3>mosquito repellant</h3>
                            
                            <p><a href="allout.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="batteries.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t4.jpeg" alt="">
                        <div class="caption">
                            <h3>batteries </h3>
                            <p><a href="batteries.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>

               
                    </div>
              <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="bisckets.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t5.jpeg" alt="">
                        <div class="caption">
                            <h3>biscuits </h3>
                            <p><a href="bisckets.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="chilli.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t6.jpg" alt="">
                        <div class="caption">
                            <h3>chilli powder </h3>
                            
                            <p><a href="chilli.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="cleaning.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t7.jpeg" alt="">
                        <div class="caption">
                            <h3>cleaning items </h3>
                            
                            <p><a href="cleaning.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="dates.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t8.jpeg" alt="">
                        <div class="caption">
                            <h3>dates</h3>
                            <p><a href="dates.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>

               
                    </div>
              <div class="row text-center" >
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="energy.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t9.jpg" alt="">
                        <div class="caption">
                            <h3>energy drinks </h3>
                            
                            <p><a href="energy.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="garlicpaste.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t10.jpg" alt="">
                        <div class="caption">
                            <h3>garlic paste</h3>
                            
                            <p><a href="garlicpaste.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="gulabjamun.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t11.jpeg" alt="">
                        <div class="caption">
                            <h3>gulab jamun </h3>
                            
                            <p><a href="gulabjamun.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="hair.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t12.jpeg" alt="">
                        <div class="caption">
                            <h3>hair cosmetics </h3>
                           
                            <p><a href="hair.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>

               
                    </div>
              <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="ketchup.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t13.jpg" alt="">
                        <div class="caption">
                            <h3>ketch ups /fruit jams</h3>
                           
                            <p><a href="ketchup.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="snacks.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t14.jpg" alt="">
                        <div class="caption">
                            <h3>snacks</h3>
                            
                            <p><a href="snacks.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="oil.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t15.jpg" alt="">
                        <div class="caption">
                            <h3>oil</h3>
                            
                            <p><a href="oil.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="pickels.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t16.jpeg" alt="">
                        <div class="caption">
                            <h3>pickels </h3>
                           
                            <p><a href="pickels.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>

               
                    </div>
              <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="rice.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t17.jpeg" alt="">
                        <div class="caption">
                            <h3>rice </h3>
                            
                            <p><a href="rice.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="sambar.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t18.jpg" alt="">
                        <div class="caption">
                            <h3>sambar powder </h3>
                            
                            <p><a href="sambar.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="soaps.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t19.jpeg" alt="">
                        <div class="caption">
                            <h3>soaps </h3>
                            
                            <p><a href="soaps.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                       <div class="col-md-3 col-sm-6 home-feature">
                    <a href="drinks.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t20.jpg" alt="">
                        <div class="caption">
                            <h3>soft drinks </h3>
                            
                            <p><a href="drinks.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>

               
                    </div>
              <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="tea.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t21.jpeg" alt="">
                        <div class="caption">
                            <h3>tea-coffee</h3>
                            <p><a href="tea.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="kellogs.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t22.jpeg" alt="">
                        <div class="caption">
                            <h3>kelloggs</h3>
                     
                            <p><a href="kellogs.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div><div class="col-md-3 col-sm-6 home-feature">
                    <a href="sugar.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t23.jpg" alt="">
                        <div class="caption">
                            <h3>sugar</h3>
                            
                            <p><a href="sugar.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div><div class="col-md-3 col-sm-6 home-feature">
                    <a href="maggi.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t24.jpg" alt="">
                        <div class="caption">
                            <h3>maggi and yipee</h3>
                            <p><a href="maggi.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>  
                      

               
                    </div>
            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <a href="paste.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t25.jpg" alt="">
                        <div class="caption">
                            <h3>tooth-pastes</h3>
                            <p><a href="paste.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                   <div class="col-md-3 col-sm-6 home-feature">
                    <a href="pulse.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/162.jpg" alt="">
                        <div class="caption">
                            <h3>pulses and other items</h3>
                            <p><a href="pulse.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                 
                   <div class="col-md-3 col-sm-6 home-feature">
                    <a href="pulihora.php" style="text-decoration:none; color:black;"><div class="thumbnail">
                        <img src="img/t2.jpg" alt="">
                        <div class="caption">
                            <h3>pulihora </h3>
                            
                            <p><a href="pulihora.php" role="button" class="btn btn-primary btn-block" >See varieties and buy</a></p>
                        </div>
                    </div></a>
                </div>
                      

               
                    </div>
          
                

            </div>
   
        

        <?php include("includes/footer.php"); ?>
    </body>

</html>
