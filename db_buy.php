<?php

$conn=mysqli_connect('localhost','root','','clothing');
if(!$conn){
die("Connection failed: ".mysqli_connect_error());
}
?>