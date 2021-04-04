<?php

$servername = "localhost";
$username = "root";
$password="";
$conn= new mysqli($servername,$username,$password);

 if($conn->connect_error)
 {
     die("Connection failed:" .$conn->connect_error);

 }
//echo "connect succsesfully";
$sql ="CREATE DATABASE testDB";
if($conn->query($sql)===TRUE){
echo "Database create succesfully";
} else {
echo "erro ".$conn->erorr;

}
?>