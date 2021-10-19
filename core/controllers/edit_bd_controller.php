<?php 
if($_controller_route !==""){
    $id=intval($_controller_route);
    if($id <1 ){
        die("Нет ничего");
    }
    $result = $db_link->query('SELECT `login`, `email`,`id`,`password` FROM `user` WHERE `id`= '.$id);    


    if($result === false || $result->num_rows !== 1 )
    {
         $_view="404";// сделать шаблон
    }else{
         $item=$result->fetch_object();
         $_view="edit_user";
    }
}else{
    $where="";
    if(isset($_GET['search_login'])  && $_GET['search_login']!=""  ){
        $where='WHERE `login` LIKE "%'.$db_link->real_escape_string($_GET['search_login']).'%"' ;
    }
    $result = $db_link->query('SELECT `login`, `email`,`id`,`password` FROM `user` '.$where);
    if($result===false ){
        die("EROR 404");
    }
        $_view="user_index";
}