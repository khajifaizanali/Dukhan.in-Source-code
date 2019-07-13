<div class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px; padding-bottom:0px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo1.png" alt="" width="" height="75px"/></a>
           
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                 
                <li><a href = "products.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
                  <li><a href = "aboutus.php"><span class = "	glyphicon glyphicon-education"></span> About us</a></li>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "order.php"><span class = "glyphicon glyphicon-check"></span> Orders</a></li>
                     <li><a href = "coin.php"><span class = "glyphicon glyphicon-record"></span> My points</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href = "aboutus.php"><span class = "	glyphicon glyphicon-education"></span> About us</a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>