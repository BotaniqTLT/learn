<?php
if (isset($_POST['login'])){
$sql='SELECT `id` FROM `user` WHERE `login`="'  . $db_link->real_escape_string($_POST['login']) . '" and `password`= "'  .md5($_POST['password']). '"';
$result=$db_link->query($sql);

if($result===false)
{
    die("ошибка авторизации, попробуйте позже");
}

if($result->num_rows!==1)
{
die(" Логин и пароль не найден");
}
session_start();
 $_SESSION['user_id']=$result->fetch_object()->id;
 setcookie('auth',true);
 header('Location: '.urlgen("/private/profile"));  
 die();
}
$_view="form_auth";