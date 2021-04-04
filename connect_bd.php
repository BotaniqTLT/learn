<?php

$servername = "localhost";
$username = "root";
$password="";
$conn= new mysqli($servername,$username,$password);

 if($conn->connect_error)
 {
     die("Connection failed:" .mysqli_connect_error());

 }
//echo "connect succsesfully";fdfd
$sql ="CREATE DATABASE testDB";
if($conn->query($sql)===TRUE){
echo "Database create succesfully";
} else {
echo "erro ".$conn->erorr;

}
?>
