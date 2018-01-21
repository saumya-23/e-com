<?php 
date_default_timezone_set('Asia/Kolkata');
session_start();
$qty=$_POST['qty'];
$size=$_POST['size'];
$price=$_POST['p_cost'];
$pic=$_POST['image'];
$p_name=$_POST['p_name'];
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
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		

        <style>
.color {
   background-color: #272e56;
            }

</style>
        
        
        
        <?php    
if(isset($_SESSION['email']))
{
        include'header_logout.php';
        }
        else
        {
            echo"<script>alert('Please login to buy your product.')</script>";
            echo"<script>window.open('login.php','_self')</script>";
        }
?>
        
		<div id="wrapper" class="container">
						
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/am.png" alt="New products" >
				<h4><span>Check Out</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle color" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
                                    <a class="accordion-toggle color" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Your Total Order Payment is-<?php echo " Rs  ".$price*$qty;?></a>
								</div>
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
                                                <form action="action.php?page=det&pid=<?php echo $_GET['pid'];?>" method="post">
												<div class="control-group">
                                                    <input type="hidden" value="<?php echo $qty; ?>" name="qty">
                                        <input type="hidden" value="<?php echo $price*$qty; ?>" name="p_cost">
                                                    <input type="hidden" value="<?php echo $pic; ?>" name="image">
                                                    <input type="hidden" value="<?php echo $size; ?>" name="size">
                                        <input type="hidden" value="<?php echo $p_name; ?>" name="p_name">
													<label class="control-label">Name</label>
													<div class="controls">
														<input type="text" placeholder="" name="name" title=" characters between three to twenty" maxlength="20" required class="input-xlarge">
													</div>
												</div>
															  
												<div class="control-group">
													<label class="control-label">Address</label>
													<div class="controls">
														<input type="text" placeholder="" name="address" title=" characters between three to twenty" maxlength="20" required class="input-xlarge">
													</div>
												</div>
                                                    
                                                 <div class="control-group">
													<label class="control-label">Pin Code</label>
													<div class="controls">
														<input type="text" placeholder="" name="pin" pattern="[0-9]{6}" title=" only digits are allowed" maxlength="6" required class="input-xlarge">
													</div>
												</div>
                                                    
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="" name="pno" pattern="[0-9]{10}" title=" only digits are allowed " maxlength="10" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">City</label>
													<div class="controls">
														<input type="text" placeholder="" name="city" itle=" characters between three to twenty" maxlength="20" required class="input-xlarge">
													</div>
												</div>
                                            
                                                 <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" name="submit" value="Confirm order">
                                            </div>
	                            
                                                </form>
										</div>
                                            </div>
                                        </div>
                                    
									
								</div>
							</div>
							
						</div>				
					</div>
            </section>
				
        <?php include'footer.php';?>
        </div>
    </body>
</html>