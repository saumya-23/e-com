<?php
$cat_sql="SELECT * FROM category";
$cat_query=mysqli_query($dbcon,$cat_sql);
$cat_rs=mysqli_fetch_assoc($cat_query);

?>
<div id="wrapper" class="container">
			
            
				
    <?php
    do{ ?>
            <ul>
				<li>
    <a href="products.php?page=cat&categoryID=<?php echo $cat_rs['cat_id']; ?>"><?php echo $cat_rs['cat_name']; ?></a>
       </li>										
</ul>
       <?php 
    }while($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>

</div>
