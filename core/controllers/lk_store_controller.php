<?php
$result = $db_link->query('SELECT `login`, `email`,`id`,`password` FROM `user` WHERE `id`='.intval($_SESSION['user_id']));
if($result===false || $result->num_rows !== 1){
    die("EROR 404");
}
$user = $result->fetch_object();

$err_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['type']==='update_password'){
        if (empty($_POST['old_password']) && empty($_POST['new_password'])  && empty($_POST['new_password1'])){
            $err_message .= "Вы не ввели ни одного значения!!!";  
        }  else {
            if(empty($_POST['new_password']) ) {
                $err_message .= "Поле пароль пустое";
             } 
            if (empty($_POST['new_password1'])) {
                 $err_message .= "Поле  повторите пароль пустое";
             }
            if (empty($_POST['old_password'])){
                 $err_message .= "Поле  старый пароль пустое";
            }
        }
    

        if( empty($err_message) && ($_POST['old_password'] == $user->password )){    
            $sql='UPDATE `user`  SET `password`= ';
            $sql.=md5($_POST['new_password1']);
            $sql.='"  WHERE `id`=';
            $sql.=intval($_SESSION['user_id']);
            $new_password= $db_link->query($sql); 
        }

    }   
      
         
}   
$id=$_SESSION['user_id'];
$group="admin";
$is_admin=in_group($id, $group);


$_view="lk_store";



