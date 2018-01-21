<?php
date_default_timezone_set('Asia/Kolkata');
include'dbconnect.php';
session_start();

             
        
             $stock_sql="SELECT * FROM stock WHERE stock.p_id=".$_GET['p_ID'];
        
        if($stock_query=mysqli_query($dbcon,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}           
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
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		
        <?php 

    
if(!isset($_SESSION['email']))

{
    
include'header_login.php';

}
        else{
        include'header_logout.php';
        }
?>
       
              
                      
        <div id="wrapper" class="container">	
          
			<section class="header_text sub">
			
				<h2><span>Product:: <?php echo $stock_rs['p_name']; ?></span></h2>
			</section>
           
           
    <section class="main-content">	
         
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
                                <li class="span3">
								<a a href="<?php echo $stock_rs['image']; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo $stock_rs['image']; ?>"></a>	
                                <ul class="thumbnails small">								
									<li class="span1">
										<a href="<?php echo $stock_rs['s_image']; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?php echo $stock_rs['s_image']; ?>" alt=""></a>
									</li>	
                                </ul>
                                </li>
							</div>
							<div class="span5">
								<address>
									<strong>Fabric:</strong> <span>Cotton</span><br>
									<strong>Style:</strong> <span>Regular Fit</span><br>
									<strong>Pattern:</strong> <span>Printed</span><br>
									<strong>Type:</strong> <span>Half Sleeve</span><br>	<br>
                                    <strong>Available:</strong> <span>will be delivered within a week.</span><br>
								</address>									
								<h4><strong>Price: <?php echo $stock_rs['cost'];?></strong></h4>
                                
<?php 
                                $id=$stock_rs['p_id'];
                                $price=$stock_rs['cost'];
                                $image=$stock_rs['image'];
                                $p_name=$stock_rs['p_name'];
                            
                                ?>
							</div>
								
								<div class="span5">					
									<form class="form-inline" method="post" action="cart_disp.php?page=cart&pid=<?php echo $stock_rs['p_id'];?>"  >                                     
                                        
									<p>&nbsp;</p>
                                    
									<label> Qty:
									<input type="text" class="span1" placeholder="1" name="qty" required class="input-xlarge">  </label> 
                                    <label> SIZE:
									<input type="text" class="span1" placeholder="S/L/XL" name="size" required class="input-xlarge"></label><br><br> 
                                    
                                        <input type="hidden" value="<?php echo $id; ?>" name="pid">
                                        <input type="hidden" value="<?php echo $price; ?>" name="p_cost">
                                        <input type="hidden" value="<?php echo $image; ?>" name="image">
                                        <input type="hidden" value="<?php echo $p_name; ?>" name="p_name">
                                        <input type="hidden" value="<?php echo $size; ?>" name="p_size">
                                    <button class="btn btn-inverse" name="add" value="add" type="submit" >ADD TO CART</button> 
                                    
                                       <button class="btn btn-inverse" formaction="checkout.php?page=det&pid=<?php echo $stock_rs['p_id'];?>" type="submit" name="submit" value="buy" >BUY NOW</button>
                                        
                                    </form>
                                    
							</div>			
                        </div>
                                    
                        
                                <div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $stock_rs['description'];?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>		
                             			
                        </div>
                    </div>
        </div>
    
        </section>
        
        <?php 
if(isset($_SESSION['email']))
{
include'review.php';
}
         include'footer.php'; 
        include('review_disp.php');
        ?>
        
       
        
        </div>
    </body>
</html>
