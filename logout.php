<?php
   
    session_start();
   session_unset(); 
   session_destroy(); 
   if(isset($_SESSION['email']))
   {
   echo 'You have not  cleaned session';
  
   }
   else
   {
   header('Refresh: 0; URL = index.php');
   }
   ?>