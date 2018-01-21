
<?php
session_start();
$u_name=$_SESSION['username'];
$item='aaa';
$date;
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('clothing',$con)or die(mysql_error());
	if(isset($_POST['submit']))
		{   
			$u_name=$_SESSION['username'];
			
			$date= date('Y-m-d H:i:s');			
		    $query="INSERT INTO products(username,date,p_name) value('$u_name','$date','$item')";
			if(mysql_query($query))
			{
				echo"<script>alert('You have successfully bought the product...')</script>";
			echo"<script>window.open('index_new.php','_self')</script>"; 
			}
			else 
				echo"<script>alert('sorry......error')</script>";
				echo"<script>window.open('product_detail.php','_self')</script>"; 
			
		
	   }	
?>