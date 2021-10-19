<?php
if ($_GET["send"]==1){
 session_start();
 echo "Вы успешно отправилии сообщение на email:".$_SESSION["to"];}
?>
