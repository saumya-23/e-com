<?php
include'dbconnect.php';
session_start();

$stock_sql="SELECT * FROM stock";
$stock_query=mysqli_query($dbcon,$stock_sql);
$stock_rs=mysqli_fetch_assoc($stock_query);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
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
			<img class="pageBanner" src="themes/images/pB1.png" alt="New products" >
				<h4><span>Product:: <?php echo $stock_rs['p_name']; ?></span></h4>
			</section>
            <section class="header_text sub">
                
        <?php
    
        
             $stock_sql="SELECT stock.p_id,stock.p_name,stock.cost,stock.image,stock.description FROM stock WHERE stock.p_id=".$_GET['add'];
        
        if($stock_query=mysqli_query($dbcon,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}
                ?>
            </section>
            
            
            
            
            <section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo $stock_rs['image']; ?>"></a>												
								
							</div>
							<div class="span5">									
								<h4><strong>Price: <?php echo $stock_rs['cost'];?></strong></h4>
                                <h4><strong>id: <?php echo $stock_rs['p_id'];?></strong></h4>
<?php 
                                $id=$stock_rs['p_id'];
                                echo $id;
                            
                                ?>
							</div>
								
								<div class="span5">
								
                                    <button class="btn btn-inverse" type="submit"><a href="checkout.php?page=det&pid=<?php echo $stock_rs['p_id'];?>" >BUY NOW</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
            
            
            
            <section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
        
    </body>
</html>