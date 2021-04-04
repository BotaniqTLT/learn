<?php
$response=array();
if(!isset($_COOKIE['cart_id'])){
    $cart_id=uniqid('', true);
    setcookie('cart_id',$cart_id,3600*24*7+time(),"/");
}
else{
    $cart_id =$_COOKIE['cart_id']; 
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    /* 
    type: set, remove,clear
    id:product_id
    count: >1
    */ 
    
    $request=json_decode(file_get_contents('php://input'), true);
    switch ( $request['type']){
        case 'set': 
            $result = $db_link->query('INSERT INTO `cart` (`cart_id`,`product_id`,`count`) VALUES ("'.$db_link->real_escape_string($cart_id).'", '.intval($request['id']).', '.intval($request['count']).') ON DUPLICATE KEY UPDATE `count`= VALUES(`count`)');
            if( $result===false){
                $response['error']="sql error";
                $response['status']="error";
            }
            else{
                $response['status']="OK";
            }
            break;
        case 'remove': 
            $result = $db_link->query('DELETE FROM `cart` WHERE  `cart_id`="' .$db_link->real_escape_string($cart_id).'" AND `product_id`='.intval($request['id']));
            if( $result===false){
                $response['error']="sql error";
                $response['status']="error";
            }
            else{
                $response['status']="OK"; 
            }

            break;
        case 'clear': 
            $result = $db_link->query('DELETE FROM `cart` WHERE  `cart_id`="' .$db_link->real_escape_string($cart_id).'"');
            if( $result===false){
                $response['error']="sql error";
                $response['status']="error";
            }
            else{
                $response['status']="OK"; 
            }
            break;
        

    }

} else  {

}

header('Content-Type: application/json');  
die(json_encode($response));

  