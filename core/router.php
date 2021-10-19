<?php
$routes=array(
    "/"=>"catalog_controller",
    "login"=>"login_controller",
    "register"=>"register_controller",
    "edit_table_user"=>"edit_bd_controller",
    "add_item"=>"add_item_controller",
    "logout"=>"logout_controller",
    "cart"=>"cart_controller",
    //"item"=>"item",
    "private"=>array(
        "profile"=>"lk_store_controller",
        "order"=>"order",
        "pay"=>"pay", 
    ),
    "public"=>array(
        "api"=>array(
            "cart"=>"API/cart_api",
        ),
        "store"=>array(
            "view"=>"item_controller",

        ),
    ),
); 
$_url="/";
$_controller_route="";
$_controller=null;
if(isset($_GET['_url'])){
    $_url=$_GET['_url'];
}
if(isset($routes[$_url]))
{
    $_controller=$routes[$_url];
}
else {
    $_urlmass=explode("/",$_url);
  // var_dump($_urlmass);
    $r=$routes;
    
    foreach($_urlmass as $item){
        if($item===""){
          continue;  
        }
        $_controller_route= $_controller_route."/".$item;
        if(isset($r[$item])) {
            if(is_array($r[$item])){
                $r=$r[$item];
                continue;
            }
            $_controller=$r[$item];
            break;
        }
        break;
    };
    $_controller_route=substr($_url,strlen($_controller_route));
    if(!empty($_controller_route) && $_controller_route[0]==="/" ){

        $_controller_route=substr($_controller_route,1);
    }
}

function urlgen($url){
    return("index.php?_url=".$url);
}

if(isset($_controller)){
    include("controllers/".$_controller.".php");
}
//var_dump($_controller);

