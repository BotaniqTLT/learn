<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!(isset($_POST['password_1']) && isset($_POST['password_2']) && $_POST['password_1']===$_POST['password_2'])){
    // var_dump($_POST);
        die("пароли не совпадают");
    }
    $sql='INSERT INTO `user` (`login`, `password`,`email`) VALUES ("'.$db_link->real_escape_string($_POST['login']) .'","'.md5($_POST['password_1']) .'","'.$db_link->real_escape_string($_POST['email']) .'")';
    if(!$db_link->query($sql ))
    {   
        var_dump($sql,$db_link->error);
        die("Пользователь с таким именем существует");  
    }
    header('Location: index.php?login=0');
    die();
}
$_view="register";

