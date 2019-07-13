<?php 

$con= mysqli_connect("localhost", "dukhan", "khajiali@786", "9store") or die(mysqli_error($con));
session_start();
$sele="SELECT DISTINCT users_id FROM users_items WHERE status='confirmed' and delivery='notdelivered' ";
$result= mysqli_query($con, $sele) or die(mysqli_error($con));


?>
<html>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Delivery</title>
	<link rel="shortcut icon" href="img/weblogo.png"/>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <div class="table-responsive-sm" style="padding-left: 10%; padding-right: 10% ;margin-top:10%;">
        <table class="table table-bordered">
           
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">emailid</th>
      <th scope="col">address</th>
      <th scope="col">contact no</th>
      <th scope="col">products</th>
<th scope="col">total</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
      <?php if(mysqli_num_rows($result) == 0){?>
                  <tr><td></td><td> No one placed order </td><td> </td><td>  
                
            
                <?php } else {
                    $counter=1;
                    $price=0;
                while($row=mysqli_fetch_array($result)){
                    $id=$row['users_id'];
                    $select="SELECT * FROM users  WHERE id=$id";
                    $resu= mysqli_query($con, $select) or die(mysqli_error($con));
                   $roo= mysqli_fetch_array($resu);
                    $email_id=$roo['email_id'];
                    $se="SELECT * FROM checkout WHERE emailid='$email_id' AND delivery='notdelivered' ";
                     $res= mysqli_query($con, $se) or die(mysqli_error($con));
                    while($rows= mysqli_fetch_array($res)){
                        $address=$rows['address'];
                        $contact=$rows['contactno'];
                    $select2="SELECT * FROM users_items WHERE users_id=$id AND status='confirmed' AND delivery='notdelivered' AND address='$address' AND contact=$contact";   
                    $result2= mysqli_query($con, $select2) or die(mysqli_error($con));
                    
                    ?>
    <tr>
      <th scope="row" width="10%"><?php echo $counter++; ?></th>
      <td width="40%"><?php echo $email_id;?></td>
      <td width="20%"><?php echo  $rows['address']?></td>
      <td  width="10%"><?php echo $rows['contactno']?></td>
<td  width="10%"><?php echo $rows['total']?></td>
      <td  width="10%"><?php $count=1;
      while($row2=mysqli_fetch_array($result2)){
    $proid=$row2['product_id'] ;
    
                   $selet_pro="SELECT * FROM items WHERE id= $proid";
               $result_pro= mysqli_query($con, $selet_pro) or die(mysqli_error($con));
      $row_pro=mysqli_fetch_array($result_pro);
      echo $count++ .".".$row_pro['name']."-".$row2['quantity']."<br>";
      }?></td>
      <td width="10%"> <a href="act.php?email=<?php echo $email_id; ?>&address=<?php echo $address; ?>&contact=<?php echo $contact; ?>" class="btn btn-danger">delivery</a></td>
    </tr>
                <?php }}} ?>
          
</table>
    </div>
    <footer style="background-color: white;">
        <div >
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
</html>