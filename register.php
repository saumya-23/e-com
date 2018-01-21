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
				
			
                        <h2><span><center>Registration Form</center></span></h2>
							<fieldset>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-stacked">
                                <div class="container_me">
								<div class="control-group">
                                    <h3><label class="control-label control-label_me">Username:</label></h3>
									<div class="controls">
										<input type="text" placeholder="Enter your username" name="u_name" pattern=".{6,20}" title=" characters between six to twenty" maxlength="20" required class="input-xlarge">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label control-label_me">Mobile Number:</label>
									<div class="controls">
										<input type="text" placeholder="Enter your mobile number" name="pno" pattern="[0-9]{10}" title=" only digits are allowed " maxlength="10" required class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label control-label_me">Email address:</label>
									<div class="controls">
										<input type="email" placeholder="Enter your email" name="u_id" pattern=".{6,30}" title=" characters between six to twenty" maxlength="40" required class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label control-label_me">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="pwd" pattern="(?=.*\d)(?=.*[a-z]).{6,}" title="Must contain at least one number and lowercase letter, and at least 6 characters" maxlength="15" required class="input-xlarge">
									</div>
								</div>		        
                                        
				
								<hr>
                                    <center><div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" name="submit" value="Create your account"><br><br></div></center>
                                    
                                </div>
                                </form>
							</fieldset>
                        </section>				
					</div>				
				</div>
			</section>			
		<?php include'footer.php';?>	
    
			
			
		</div>
                </body>
</html>

            
<?php 

$username ="";
$phno="";
$email;
$password="";

if(isset($_POST['submit']))
{
	
				$con=@mysql_connect("localhost","u245610008_user","qazwsxedc1234","u245610008_db") or die(mysql_error());
				$db=@mysql_select_db('u245610008_db',$con)or die(mysql_error());
				$username =$_POST['u_name'];
				$phno=$_POST['pno'];
                $email=$_POST['u_id'];
				$password=$_POST['pwd'];

				
				$query="INSERT into registration(username,phno,email,password) value('$username',$phno,'$email','$password')";
    
					if(mysql_query($query))
						{
							echo"<script>alert('you are successfully Registered')</script>";
							echo"<script>window.open('login.php','_self')</script>"; 
						}
                           else
                           {
                           	echo"<script>alert('same email id is already exist')</script>";
							echo"<script>window.open('register.php','_self')</script>"; 
                           }
}
?>