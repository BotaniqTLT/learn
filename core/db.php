<?php 
$db_link= new mysqli('localhost','root','','estore');
if($db_link->connect_error)
 {
     die("Connection failed:" .mysqli_connect_error());
    
 }
 $db_link->query("SET NAMES 'utf8'");
 