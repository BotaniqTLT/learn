<?php

$item_id=intval($_controller_route);
$result=$db_link->query("SELECT * FROM `product` WHERE `id`=".$item_id);
//var_dump($_controller_route);
if($result === false || $result->num_rows === 0 )
{
    $_view="item_not_found";
}else{
    $item=$result->fetch_object();
    $_view="item";
}
//var_dump($result);