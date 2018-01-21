<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
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

    
if(!isset($_SESSION['email']))

{
    
include'header_login.php';

}
        else{
        include'header_logout.php';
        }
?>
        
        
		<div id="top-bar" class="container">
            <div style="float: right;">    
                <a href="https://www.facebook.com/ambraze/?ref=aymt_homepage_panel">
                    <img src="themes/images/fb2.png" alt="New products" ></a></div><br><br>
            <div style="float: center;">
			<div class="row">
				<div class="span4">							
			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/login.png" alt="New products" ><br><br>
				<h2><span><center>Contact Us:-</center></span></h2>
                
			<section class="main-content">				
				<div class="row">				
					<div class="span7">
						<form method="post" action="note.php">				
							<fieldset>
                                <div class="container_me">
								<div class="control-group">
                                    <h3><label class="control-label control-label_me">User Name:</label></h3>
									<div class="controls">
										<input type="text" placeholder="Enter your username" name="u_id" pattern=".{6,30}" title=" characters between six to twenty" maxlength="40" required class="input-xlarge">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label control-label_me">Mobile Number:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your mobile number" name="pno" pattern="[0-9]{10}" title=" only digits are allowed " maxlength="10" required class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label control-label_me">Message:</label>
									<div class="controls">
										<input type="email" placeholder="Enter your message" name="msg"  maxlength="1000" required class="input-xlarge">
									</div>
								</div>
								
								<div class="actions">
                                    <center><button tabindex="3" type="submit" name="submit" class="btn btn-inverse">Send message</button></center>
								</div>
                                </div>
							</fieldset>
						</form>
					</div>				
				</div>                     
			</section>	
                    </section>
		</div>       
        </div>
            
        <?php include'footer.php';?>
            </div>
        </div>
    </body>
</html>