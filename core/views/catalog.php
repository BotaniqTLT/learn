
<div class="catalog">
<?php 
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