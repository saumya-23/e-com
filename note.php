<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

if(!isset($_SESSION['email']))
{

            echo"<script>alert('Please login to send message.')</script>";
            echo"<script>window.open('login.php','_self')</script>";
        }
$email=$_SESSION['email'];
$date;
$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db('clothing',$con)or die(mysql_error());

	if(isset($_POST['submit']))
		{   
        
        $u_name=$_POST['u_id'];
            $pno =$_POST['pno'];
				$msg=$_POST['msg'];	
        $date= date('Y-m-d H:i:s');
    $query="INSERT INTO contact(email,phno,msg,date,u_name) value('$email','$pno','$msg','$date','$u_name')";
			if(mysql_query($query))
			{
				echo"<script>alert('Thanks for asking.You will be contacted soon...')</script>";
                echo"<script>window.open('index.php','_self')</script>"; 
			}
			else 
            {
				echo"<script>alert('...')</script>";
				 
            }
		
    }
?>