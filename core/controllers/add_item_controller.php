<?php 
$result = $db_link->query('SELECT `login`, `email`,`id`,`password` FROM `user` WHERE `id`='.intval($_SESSION['user_id']));
if($result===false || $result->num_rows !== 1){
    die("EROR 404");
}
$user = $result->fetch_object();
//Добавление товара в БД
$err_message="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if($_POST['type']==='add_item'){   
    

        if (empty($_POST['add_item_name']) && empty($_POST['add_item_description'])  && empty($_POST['add_item_price'])&& empty($_POST['add_item_count'])){
             $err_message .= "Вы не ввели ни одного значения!!!";  
        }else {
            if(empty($_POST['add_item_name']) ) {
                $err_message .= "Поле пароль пустое";
             } 
            if (empty($_POST['add_item_description'])) {
                $err_message .= "Поле  повторите пароль пустое";
            }
            if (empty($_POST['add_item_price'])){
              $err_message .= "Поле  старый пароль пустое";
            }
            if(empty ($_POST['add_item_count'])){
                $err_message .= "Поле  старый пароль пустое";
               }
  

            if (!preg_match( "/^[0-9]{1,3}$/", trim($_POST['add_item_price']))){
                 $err_message .= "Поле цена должно быть целочисленным";
            }
            if (!preg_match( "/^[0-9]{1,3}$/", trim($_POST['add_item_count']))){
                $err_message .= "Поле количество должно быть целочисленным";
            }
            if(isset($_FILES['userfile'])){    
                if ($_FILES['userfile']['error'] !== UPLOAD_ERR_OK) {    
                    $err_message .= "ошибка загрузки изображения";  
                }        
            }else{
                $err_message .= "Загрузите файл";  
            }
            
            if(empty($err_message)){
                $root="C:\wamp64\www\learn\\";
                $img_name="media\\".time().".jpg";
                if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $root.$img_name)) {
                    $err_message .="ошибка сохранения файла";
                } else {               
                    $sql='INSERT INTO `product` (`name`, `description`,`price`,`stock`,`image`) VALUES ("'.$db_link->real_escape_string($_POST['add_item_name']) .'","'.$db_link->real_escape_string($_POST['add_item_description']) .'",'.intval(trim($_POST['add_item_price'])) .','.intval(trim($_POST['add_item_count'])).',"'.str_replace("\\","/",$img_name).'")';
                    if($db_link->query($sql)===false ){
                        $err_message .= "Запрос не выполнен товар не добавлен";
                        var_dump($sql);
                    }else{
                        $err_message .= "Товар успешно добавлен"; 
                    }
                }        
            }
        }
    }   
}    
$_view="add_item";