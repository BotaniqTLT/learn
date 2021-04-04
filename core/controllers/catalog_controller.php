<?php 
$catalog_items = $db_link->query('SELECT * FROM `product` WHERE `stock`>0 LIMIT 100');
if ($catalog_items === false){
  die("Проблемы с БД");
}
$_view="catalog";