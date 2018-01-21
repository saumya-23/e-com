<html>
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
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    
    
<body>
  
        
        		<div id="wrapper" class="container">
                    <section class="header_text sub">
			<img class="pageBanner" src="themes/images/am.png" alt="New products" ><br>
				<h4><span>New products</span></h4><br>
			
			
			<section class="header_text sub">
			

<?php
 
 //select all from stock belonging to selected category id
 $stock_sql="SELECT stock.p_id,stock.p_name,stock.cost,stock.image,category.cat_name AS c_name FROM stock JOIN category ON stock.cat_id=category.cat_id WHERE stock.cat_id=".$_GET['categoryID'];

if($stock_query=mysqli_query($dbcon,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}
 if(mysqli_num_rows($stock_query)==0)
 {
     echo"sorry no item";
 }
 else
 { ?>
                    
     
<h4><span><center><?php echo $stock_rs['c_name']; ?></center></span></h4>
			</section>
                        </section>
			<section class="main-content">							
						<ul class="thumbnails listing-products">
                     <?php do{
                              ?>
                                <li class="span3">
                                <div class="product-box">
                                    <span class="sale_tag"></span>
          <a href="product_detail.php?page=detail&p_ID=<?php echo $stock_rs['p_id']; ?>"><img alt="" src="<?php echo $stock_rs['image']; ?>"></a><br/>                       
									<a href="product_detail.php?page=detail&p_ID=<?php echo $stock_rs['p_id']; ?>" class="title">VIEW MORE</a><br/>
                                    <p class="price"><?php echo $stock_rs['p_name']; ?></p>                      
                                </div>
                            </li>
                            
                           <?php
                             }while($stock_rs=mysqli_fetch_assoc($stock_query));

  }?>

                        
                        </ul>
                        
                   
                   
		
    
   <?php include'footer.php';?>	
                    </section>
                    </div>
     </body>
</html>
                            
                            