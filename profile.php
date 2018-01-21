<?php
date_default_timezone_set('Asia/Kolkata');
include'dbconnect.php';
session_start();
$email=$_SESSION['email'];
echo $email;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>AMBRAZE</title>
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
        include'header_logout.php';
?>
    
		<div id="wrapper" class="container">
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h2 class="title"><span class="text"><strong>Your</strong> Profile</span></h2><br><br>
						<table class="table table-striped">
							<thead>
								<tr>
									
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Price</th>
								</tr>
							</thead>
                  
							<tbody>
                                                    <?php
             $stock_sql="SELECT * FROM products WHERE email='$email'";
               
        if($stock_query=mysqli_query($dbcon,$stock_sql)){
                        
             while($row=mysqli_fetch_assoc($stock_query))
                     
        
                {
                // $q="";
                 //$total="";
                               // $q=$row['qty'];
                                ?> 
								<tr>
									<td><a href=""><img alt="" src="<?php echo $row['image']; ?>"></a></td>
									<td><?php echo $row['p_name'];?></td>
									<td><?php echo $row['qnty'];?></td>
									<td><?php echo $row['cost'];?></td>
									
                                    
							
                                </tr>			  
								<?php	}
                                    }?>
								
							</tbody>
						</table>
														
					</div>
					
				</div>
			</section>			
			
		
		<?php
        include'footer.php';
        ?>
            </div>
    </body>
</html>