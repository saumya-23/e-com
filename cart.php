<?php
date_default_timezone_set('Asia/Kolkata');
include'dbconnect.php';
session_start();


	if(isset($_SESSION['email']))
{
        include'header_logout.php';
        }
        else
        {
            echo"<script>alert('Please login to add product in your cart.')</script>";
            echo"<script>window.open('login.php','_self')</script>";
        }
	
         
        $stock_sql="SELECT stock.p_id,stock.p_name,stock.cost,stock.image,stock.description FROM stock WHERE stock.p_id=".$_POST['pid'];

        
        if($stock_query=mysqli_query($dbcon,$stock_sql)){
            
    $stock_rs=mysqli_fetch_assoc($stock_query);

       
        $con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('clothing',$con)or die(mysql_error());

        
        $email=$_SESSION['email'];
        $id=$stock_rs['p_id'];
        $name=$stock_rs['p_name'];
        $price=$stock_rs['cost'];
        $image=$stock_rs['image'];
        $qty=$_POST['qty'];
        $size=$_POST['size'];
        
        $query="INSERT into cart(email,p_id,p_name,cost,image,qty,size) value('$email','$id','$name','$price','$image','$qty','$size')";
					if(mysql_query($query))
						{
                       
							echo"<script>alert('Your product has been added to cart')</script>";
				            echo"<script>window.open('cart_disp.php','_self')</script>";
						}
                           else
                           {
                               
                           	echo"<script>alert('...........')</script>";
                           }
    
        }
             ?>