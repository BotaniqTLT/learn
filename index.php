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

?>
<html>
<head>
    <meta charset="utf-8">
    <link href="style.css?t=<?=time()?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="css/all.css" rel="stylesheet"> <!--load all styles -->
</head>


    
<body>
<div class="logo">
   <?php if(isset($_SESSION['user_id'])){ ?> 
      <a  href="<?= urlgen("/private/profile")?>" > Личный кабинет </a> <?php } else { ?> 
    <a  href="<?= urlgen("/login")?>" > войти </a> <?php } ?>
    <div  class ="container_cart " style="float:right; width:300px;  background-color: #fff">
       <i class="fas fa-cart-arrow-down" style="font-size:30px;float:left"></i>
         <div class="empty_cart hidden"  style="float:left"> Корзина пуста </div>
         <div class="full_cart hidden" style="float:left;cursor:pointer;"> 
            В корзине <span class="cart_total">  </span> товара  <br> 
            На сумму <span class="cart_summ">    </span>
      </div>
    <a class="cart" data-empty="Корзина пуста" data-full="В корзине-"></a>
    
      </div>
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
         <ul class="ul_gel_lak">
            <li > <a  class="header" href="">ГЕЛЬ-ЛАКИ </a> 
             <ul > 
              
                  <li>   Art-A основная коллекция  </li>
                  <li>   Гель-лаки Art-A серия 5D Cat </li>
                  <li>   Гель-лаки Art-A серия 9D Cat</li>
                  <li>   Гель-лаки Art-A серия Chloe </li>
                  <li>   Гель-лаки Art-A серия Spark </li>
                  <li>   База для гель-лака </li>
                  <li>   Праймеры </li>
                  <li>  Art-A серия Fleur </li>
            </li> 
               </ul>   
            <li> <a  class="header"  href=""> ЖИДКОСТИ  </a> 
                <ul>
                  <li>   Средства для кутикулы</li>
                  <li>   Жидкости для снятия гель лака </li>
                  <li>   Антисептики</li>
                  <li>   жидкость для </br> обезжиривания ногтей и <br> снятия липкого слоя</li>
                  <li>   Масла для кутикулы</li>
                   <li>   Жидкости для очистки <br> кистей </li>
                  <li>   жидкости для очистки <br> биогеля</li>
               </ul>  
            </li>   
            <li> <a  class="header"  href="">ДИЗАЙН </a>
            <ul>
                  <li>   Камифибуки для ногтей</li>
                  <li>   Пудра(втирка) для ногтей </li>
                  <li>  Разное </li>
                  <li>  Пигмент "Металлик" для </br> ногтей</li>
                  <li>  Радужный пигмент  для </br> ногтей</li>
                  <li>  Пигмент "Мятный жук"  для </br> ногтей</li>
            </li>
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
 <script type="text/javascript">



function handler( event ) {
  var target = $( event.target );
target.parent().find("ul").toggle();
 event.preventDefault();
 return false;
}
$( ".ul_gel_lak .header" ).click( handler );
$( ".ul_gel_lak ul" ).hide();




//обращаемся к тегу UL. Событие Клик. находим UL. показываем элементы

// корзина товара
  $('.full_cart').click(function() {
      window.location.href="<?=urlgen("/cart")?>" ;
  })
 function show_cart(cart){
   if(cart.total>0) {
           $('.empty_cart').removeClass('hidden').addClass('hidden');
           $('.full_cart').removeClass('hidden');
           $('.cart_total').html(cart.total);
           $('.cart_summ').html(cart.summ);

         }
   else{
      $('.empty_cart').removeClass('hidden');
      $('.full_cart').removeClass('hidden').addClass('hidden');
   }      

 }
$.ajax({
      type:"POST",
      url:"<?= urlgen("/public/api/cart")?>",
      data:JSON.stringify({
         type:"list",    }),
      dataType:"json",
      contentType: "application/json; charset=utf-8",
      success: function(res){
         show_cart(res.cart);
        console.log(res);
        
      }
    })      
</script>
</body>

<html>