<?php 

$result = $db_link->query('SELECT `login`, `email`,`id`,`password` FROM `user` WHERE `id`='.intval($_SESSION['user_id']));
if($result===false || $result->num_rows !== 1){
    die("EROR 404");
}
$err_message="";
$_view="edit_bd";