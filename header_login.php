<?php
include'dbconnect.php';
$cat_sql="SELECT * FROM category";
$cat_query=mysqli_query($dbcon,$cat_sql);
$cat_rs=mysqli_fetch_assoc($cat_query);
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
		<div id="top-bar" class="container"></div>						
<a href="index.php" class="logo pull-left"><img src="themes/images/" class="site_logo" alt=""></a>
        <section class="navbar main-menu">
					<div class="navbar-inner main-menu">
					<nav id="menu" class="pull-right">
						<ul>
                            <li><a href="index.php">HOME</a></li>
							<li><a href="products.php">COLLECTION</a>					
                                          
							</li>																						
                            <li><a href="login.php">LOGIN</a></li>
				            <li><a href="register.php">SIGN UP</a></li>
							<li><a href="about.php">ABOUT</a></li>				
						</ul>
					</nav>
				</div>        
        </section>
        </body>
</html>