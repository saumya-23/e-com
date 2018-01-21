
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$email=$_SESSION['email'];
$id=$_GET['pid'];
$qty=$_POST['qty'];
$size=$_POST['size'];
$price=$_POST['p_cost'];
$pic=$_POST['image'];
$p_name=$_POST['p_name'];
$date;

$con=@mysql_connect("localhost","root","") or die(mysql_error());
$db=@mysql_select_db('clothing',$con)or die(mysql_error());

	if(isset($_POST['submit']))
		{   
            $name =$_POST['name'];
				$pno=$_POST['pno'];
                $pin=$_POST['pin'];
				$address=$_POST['address'];
                $city=$_POST['city'];
                $date= date('Y-m-d H:i:s');	
						
    $query="INSERT INTO products(email,name,adress,city,phno,p_id,qnty,cost,p_name,image,pin,size,date) value('$email','$name','$address','$city','$pno','$id','$qty','$price','$p_name','$pic','$pin','$size','$date')";
			if(mysql_query($query))
			{
				echo"<script>alert('Your order is successfully booked...')</script>";
                 $to = $email;
         $subject = "Confirmation message";
          $message = "<b>This is to inform you that your order has been placed.</b><br>";
         $message .= "<h1>It will be delivered within 4 working days.</h1>";
         
         $header = "From:ambrazecreations@gmail.com \r\n";                            
                $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           echo"<script>alert(' Message sent successfully.Check your mail for confirmation...')</script>";
         }else {
            echo "Message could not be sent...";
         }
                echo"<script>window.open('index.php','_self')</script>";
			}
			else 
            {
				echo"<script>alert('Please try again.')</script>";
				 
            }
		
	   }	
?>