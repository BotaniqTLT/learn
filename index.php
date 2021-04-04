<?php
include("core/init.php");


/*phpinfo();
die();*/
if (isset($_POST['type'])) {
   switch($_POST['type']) {
      case 'register':
         include('register_controller.php');
      break; 
      case 'login':
         include('login_controller.php');
      break; 
       }
}
if(isset($_GET['logout'])){
   $_SESSION['user_id']=null;
   header('Location: index.php');  
   die();
}
?>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css?t=<?=time()?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>


    
<body>
<div class="logo">
   <?php if(isset($_SESSION['user_id'])){ ?> 
      <a  href="<?= urlgen("/private/profile")?>" > Личный кабинет </a> <?php } else { ?> 
    <a  href="<?= urlgen("/login")?>" > войти </a> <?php } ?>
</div>
     <div class="container_menu" >
        <a class="menu_content" href='' title=''>Бренды</a>
        <a class="menu_content" href='' title=''>Волосы</a>
        <a class="menu_content" href='' title=''>Ногти</a>
        <a class="menu_content" href='' title=''>Лицо</a>
        <a class="menu_content" href='' title=''>Макияж</a>
        <a class="menu_content" href='' title=''>Тело</a>
        <a class="menu_content" href='' title=''>Техника</a>
        <a class="menu_content" href='' title=''>Аксессуары</a>
        <a class="menu_content" href='' title=''>Тело</a>
        <a class="menu_content" href='' title=''>Для мужчин </a>
        <a class="menu_content" href='' title=''>Оборудование</a>
        <a class="menu_content" href='' title=''>Средства защиты</a>
      
      
         </div>   
          

    <div class="middle">
         <div class="left_menu">
             <ul class="menu_left_name">
             <li>ГЕЛЬ-ЛАКИ</li>
                <ul class="ul_gel_lak">
                 <li>   Art-A основная коллекция  </li>
                 <li>   Гель-лаки Art-A серия 5D Cat </li>
                 <li>   Гель-лаки Art-A серия 9D Cat</li>
                 <li>   Гель-лаки Art-A серия Chloe </li>
                 <li>   Гель-лаки Art-A серия Spark </li>
                 <li>   База для гель-лака </li>
                 <li>   Праймеры </li>
                 <li>  Art-A серия Fleur </li>
                </ul>   
             <li>ЖИДКОСТИ </li>
             <ul class="ul_gel_lak">
                <li>   Средства для кутикулы</li>
                <li>   Жидкости для снятия гель лака </li>
                <li>   Антисептики</li>
                <li>   жидкость для </br> обезжиривания ногтей и <br> снятия липкого слоя</li>
                <li>   Масла для кутикулы</li>
                <li>   Жидкости для очистки <br> кистей </li>
                <li>   жидкости для очистки <br> биогеля</li>
               </ul>  
               
               <li>ДИЗАЙН </li>
               <ul class="ul_gel_lak">
                  <li>   Камифибуки для ногтей</li>
                  <li>   Пудра(втирка) для ногтей </li>
                  <li>  Разное </li>
                  <li>  Пигмент "Металлик" для </br> ногтей</li>
                  <li>  Радужный пигмент  для </br> ногтей</li>
                  <li>  Пигмент "Мятный жук"  для </br> ногтей</li>
  
                </ul>


             </ul>
        </div>
        <div class="content">
<?php 
include("core/views/".$_view.".php");

?>
        </div>
     </div>  
     <div class="footer">
         </div> 
</body>

<html>