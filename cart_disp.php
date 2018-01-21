<?php
date_default_timezone_set('Asia/Kolkata');
include'dbconnect.php';
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))

{
    
echo"<script>window.open('login.php','_self')</script>";

}
else{
    $total="0";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>AMBRAZE-Merchandise Clothing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
        <?php
        include('header_logout.php');
        ?>
       
        
        <?php
        
            $c='0';
        if(isset($_POST['add'])){
              switch($_POST['add']){
              case "add":
                      if(!empty($_POST['qty'])){
                        
                          $item=array($_POST['pid']=>array('pid'=>$_POST['pid'],'quantity'=>$_POST['qty'],'price'=>$_POST['p_cost'],'name'=>$_POST['p_name'],'image'=>$_POST['image'],'size'=>$_POST['p_size']));
                          echo $_POST['pid'];
                          if(!empty($_SESSION['cart_item'])){ 
                              
                               foreach($_SESSION['cart_item'] as $key=>$value)
                                  {
                                      if($_POST['pid'] == $key){
                                          $c=1;
                                          $_SESSION['cart_item'][$key]['quantity']=$_POST['qty'];
                                        
                                      }
                                  else
                                  {
                                        
                                echo"<script>alert('you have reached maximum limt.')</script>";
                                  }
                               }
                                                         
                          }
                          else{                            
                              $_SESSION['cart_item']=$item;
                          }
                      }
               
              }
              }
        }
             ?>
        
        
        
        
        
		<div id="wrapper" class="container">
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                         <form class="form-inline" method="post" action="" >
						<table class="table table-striped">
                            
                            
                            
                            
                             <?php               
 foreach($_SESSION['cart_item'] as $key=>$value)
                        {?>
							<thead>
								<tr>
									
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
                  
							<tbody>
          
								<tr>
                                
                                   <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['pid']; ?>" name="ids">
				
									<td><a href=""><img alt="" src="<?php echo $_SESSION['cart_item'][$key]['image']; ?>"></a></td>
									<td><?php echo $_SESSION['cart_item'][$key]['name'];?></td>
									<td><?php echo $_SESSION['cart_item'][$key]['quantity'];?></td>
									<td><?php echo $_SESSION['cart_item'][$key]['price'];?></td>                        
                                    <?php $t=$_SESSION['cart_item'][$key]['quantity']*$_SESSION['cart_item'][$key]['price'];?>
									<td><?php echo $t;?></td>
                                    <?php $total=$total+$t; ?>
							
                                        <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['pid']; ?>" name="pid">
                                        <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['price']; ?>" name="p_cost">
                                        <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['image']; ?>" name="image">
                                        <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['name']; ?>" name="p_name">
                                        <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['size']; ?>" name="size">
                                        <input type="hidden" value="<?php echo $_SESSION['cart_item'][$key]['quantity']; ?>" name="qty">
                                    
                                </tr>			                    
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
                                
									<td><strong>Total:<?php echo"  ". $total;?></strong></td>
                   
                               
                                
								</tr>
							</tbody>
                            <?php } ?>
						</table>
                             
                            
										
                            <button class="btn btn-inverse"> <a href="products.php" type="button">Continue</a></button>
            
                            <input class="btn btn-inverse large" type="submit" name="remove" value="Clear">

                             <button class="btn btn-inverse" formaction="checkout.php?page=det&pid=<?php echo $_SESSION['cart_item'][$key]['pid'];?>" type="submit" name="submit">Checkout</button>
                
                            </form>			
					</div>
					
				</div>
			</section>			
			
            
			
		
		<?php include'footer.php';?>
		</div>	
    </body>
</html>



<?php 

if(isset($_POST['remove']))
	   
						{
							echo"<script>alert('Your cart is empty.')</script>";
                             unset($_SESSION['cart_item'][$p_id]);
							echo"<script>window.open('login.php','_self')</script>"; 
						}
                    

?>