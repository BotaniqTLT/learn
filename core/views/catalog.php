
<div class="catalog">
<form method="get">
<button  name="sort_price_asc" value="1"> сортировать по возрастанию</button>
<button  name="sort_price_desc" value="1"> сортировать по убыванию</button>
</form>
<?php //
//var_dump($_GET['sort_price_asc']);
if(isset($_GET['sort_price_asc'])== 1){
  $catalog_items = $db_link->query('SELECT * FROM `product` ORDER BY `price` ASC');
}
if(isset($_GET['sort_price_desc'])==1){
  $catalog_items = $db_link->query('SELECT * FROM `product` ORDER BY `price` DESC');
}

$i=0;
while($item=$catalog_items->fetch_object() ) 
{
  if($i===0) {
    ?>
    <div class="catalog_row">
    <?php
  }
 
?>
  <div class="catalog_item">
      <h2> <?=$item->name ?>  </h2>
      <img src="<?=$item->image ?>"/>
      <h2> <?=$item->price ?> руб.</h2>
      <a href="<?= urlgen("/public/store/view/".$item->id) ?>"> <button > КУПИТЬ </button></a> 
  </div>  
<?php if($i===3){
  ?>
  </div>  <?php
  } 
  $i=++$i % 4;
 }
 if ($i===3){
   ?> </div> <?php
 }

?>
</div>
