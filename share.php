<?php
session_start();
   
if(!isset($_SESSION['email']))

{
    echo"<script>alert('Please login to share information...')</script>";
echo"<script>window.open('login.php','_self')</script>";

}
?>
       
       