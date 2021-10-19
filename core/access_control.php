<?php
function in_group($id, $group){
 global $db_link;
$in_group=false;

$result = $db_link->query('SELECT 1 FROM `group` WHERE `user_id`= '.$id.' AND `group`="'.$group.'"');    
$in_group= !($result === false || $result->num_rows !== 1 );
return $in_group;
}