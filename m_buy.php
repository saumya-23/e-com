<?php
date_default_timezone_set('Asia/Kolkata');
include'dbconnect.php';
session_start();
$email=$_SESSION['email'];
echo $email;
$id=$_POST['ids'];
var_dump($id);
print_r(explode("__",$id));
$arr=array(explode(" ",$id));
         
      /*  echo $stock_sql="SELECT * FROM cart WHERE cart.p_id=$arr & cart.email='$email';

        
        if($stock_query=mysqli_query($dbcon,$stock_sql)){
           
       
    while($stock_rs=mysqli_fetch_assoc($stock_query)){

     
        $con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('clothing',$con)or die(mysql_error());

        
        
        $id=$stock_rs['p_id'];
        $name=$stock_rs['p_name'];
        $price=$stock_rs['cost'];
        $image=$stock_rs['image'];
        echo "quantity is".$_SESSION['qty'];
        $qty=$_SESSION['qty'];
      
        $query="INSERT into products(p_id,p_name,cost,image,qty) value('$id','$name','$price','$image','$qty')";
					if(mysql_query($query))
						{
                       
							echo"<script>alert('your order is sucessfully placed')</script>";
				            echo"<script>window.open('index.php','_self')</script>";
						}
                           else
                           {
                               
                           	echo"<script>alert('Try again')</script>";
                           }
    
        }
        }*/
 
             ?>