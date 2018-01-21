<?php
include('dbconnect.php');
$stock_sql="SELECT * FROM stock";
$stock_query=mysqli_query($dbcon,$stock_sql);
$stock_rs=mysqli_fetch_assoc($stock_query);

?>

<html>
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
          
        		<div id="wrapper" class="container">
			
			        
                    <section class="header_text sub">
                        
                        
                       
			
                <h1><span><br><u>COLLECTION</u></span></h1>
                
<?php
 
 //select all from stock belonging to selected category id
 $stock_sql="SELECT * FROM stock";
            

if($stock_query=mysqli_query($dbcon,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}?>
     
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
                             }while($stock_rs=mysqli_fetch_assoc($stock_query));?>

                        
                        </ul>
                    </section>
                          
    
   
        <?php
				include'footer.php';
		?>	
        
			
    </div>
		
    </body>
</html>