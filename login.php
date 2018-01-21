<?php 
session_start();
if(isset($_SESSION['email']))
{

				echo"<script>window.open('index.php','_self')</script>"; 

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
    <style>
     .container_me{
            
	margin: 2% 3% 0% 10%;
    padding: 10px;
	border: 3px solid #000;
            text-align: right;
            font-size: 28px;
        }
        .control-label_me{
            text-align:left;
            font-size: 18px;
        }
       
    </style>
    
    <body>
        
        
		<?php
        if(isset($_SESSION['email']))

{
    
include'header_logout.php';

}
        else{
            include'header_login.php';
        }
        
       
?>
        
		<div id="wrapper" class="container">	
            
			<section class="main-content">	
                
				<div class="row">
                    
					<div class="span5">		
                        
                         <section class="header_text sub">
			<img class="pageBanner" src="themes/images/login.png" alt="New products" ><br><br>
                             
			
                        <center><h2 class="title"><span class="text"><strong>Login</strong> Form</span></h2></center><br>
                        
						<form action="login_connect.php" method="post">
							<input type="hidden" name="next" value="/">
                    
                            
                            
							<fieldset>
                                <div class="container_me">
								<div class="control-group">
									<label class="control-label control-label_me">E-mail</label>
									<div class="controls">
										<input type="text" placeholder="Enter your email" name="email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label control-label_me">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
                                    <center><input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account"></center>
									<hr>
								</div>
                                </div>
							</fieldset>
                            
                             
                            
                            
                            
                            
                            
                            
                            
                        
						</form>
                        </section>
					</div>
                    
				</div>				
                
			</section>				
        
        <?php include'footer.php';?>
            </div>
    </body>
</html>