<?php

$dbcon=mysqli_connect("localhost","root","","clothing");
if(mysqli_connect_errno())
{
    echo "connection failed:".mysqli_connect_error();
    exit;
}
?>