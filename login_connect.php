<?php 
    $conn=@mysql_connect("localhost","root","") or die("Cannot Connect");
	$rs=@mysql_select_db("clothing",$conn) or die("DB ERROR");
//var_dump($_POST);
    $myname=$_POST['email'];
	$mypass=$_POST['password'];
    $sql="select * from registration where email='$myname' and password='$mypass' ";
	$rs=mysql_query($sql,$conn);
	echo $rows=mysql_numrows($rs);

	if($rows!=0)
    {

	 	 session_start();
	$_SESSION['email']= $myname;
	header("location: index.php");
	}
	else
	{
	echo "<script>alert('Email or passward is invalid.')</script>";
	echo"<script>window.open('login.php','_self')</script>";
	}

    

?>










