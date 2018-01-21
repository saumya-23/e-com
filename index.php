<?php 
        session_start();
include('dbconnect.php');
$stock_sql="SELECT * FROM stock";
$stock_query=mysqli_query($dbcon,$stock_sql);
$stock_rs=mysqli_fetch_assoc($stock_query);
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
    	
        
        <?php 
if(isset($_SESSION['email']))
{
    include'header_logout.php';
         }
        else{
            include'header_login.php';
        }?>
        <body>
		
			<div id="wrapper" class="container">
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/g.png" alt="" />
						</li>
                       <li>
							<img src="themes/images/carousel/img4.png" alt="" />
						</li>
						
							
						
						
					</ul>
                    <div style="float: right;">       <a href="https://www.facebook.com/ambraze/?ref=aymt_homepage_panel">
                    <img src="themes/images/fbb.png" alt="New products" ></a></div>
				</div>			
			</section>
			<section class="header_text">
                <h4>"Ambraze is a way to say, who you are ,without saying."</h4>
               
			</section>
                 
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h3 class="title">
                              
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
                                       
                                        
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h3>
                                
                                <section class="header_text sub">
                                <?php
 
 //select all from stock belonging to selected category id
 $stock_sql="SELECT * FROM stock ORDER BY p_id ASC LIMIT 8;";
                                    
if($stock_query=mysqli_query($dbcon,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}
 if(mysqli_num_rows($stock_query)==0)
 {
     echo"sorry no item";
 }
 else
 { 
  ?>
     
			</section>
			<section class="main-content">										
						<ul class="thumbnails listing-products">
							
					     
                     <?php do{
                              ?>
                                <li class="span3">
                                <div class="product-box">
                                    <span class="sale_tag"></span>
                                    <a href="product_detail.php?page=detail&p_ID=<?php echo $stock_rs['p_id']; ?>"><img alt="" src="<?php echo $stock_rs['image']; ?>"></a><br/>     
                                    <ul class="thumbnails small">								
									<li class="span1">
										<a href="<?php echo $stock_rs['s_image']; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?php echo $stock_rs['s_image']; ?>" alt=""></a>
									</li>	
                                </ul>
									<a href="product_detail.php?page=detail&p_ID=<?php echo $stock_rs['p_id']; ?>" class="title">VIEW MORE</a><br/>
                                    <p class="price"><?php echo $stock_rs['p_name']; ?></p>                
                                </div>
                            </li>
                            
                           <?php
                             }while($stock_rs=mysqli_fetch_assoc($stock_query));
 }

  ?>                    
                        </ul>                
                        </section>
                           </div>	
							</div>						
						</div>
						<br/>
                    
                    
                    
                    

<style>
.button {
    background-color: #fff; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    
}


.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #556;
    color: white;
}
</style>
<body>

<center><a href="products.php" class="button button5">VIEW MORE</a></center><br><br>

</body>
                
					</div>	
            </section>
				
			
			
            <?php include'footer.php'?>
			
        </div>

		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>