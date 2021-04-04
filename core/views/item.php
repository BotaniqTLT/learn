

<div>  
    <h1><?=$item->name?> </h1>
    <img height="100px" src="<?=$item->image ?>"/>
    <h1><?=$item->price?> </h1>
    <div class="cart_add">
        <button class="minus">-</button>
        <input value="1" size="2"/> 
        <button class="plus">+</button>
        <button class="buy">КУПИТЬ</button> 
        <button class="clear"> ОЧИСТИТЬ </button> 
        <button class="remove"> удалить товар </button> 
    </div> 

</div>

<script type="text/javascript">
var cart=$(".cart_add");
var cart_count_input=cart.find("input");
var cart_count=1;
cart.find(".minus").click(function(){
  if(cart_count >1){
    cart_count_input.val(--cart_count)
  }
});
cart.find(".plus").click(function(){
     cart_count_input.val(++cart_count)
});
cart_count_input.change(function(){
    var count= parseInt(cart_count_input.val());
    if(count < 1){
        count=1;
    }
    cart_count=count;
    cart_count_input.val(count);
});
cart.find(".buy").click(function(){
    $.ajax({
      type:"POST",
      url:"<?= urlgen("/public/api/cart")?>",
      data:JSON.stringify({
        type:"set",
        id:<?= $item->id?>,
        count:cart_count,
      }),
      dataType:"json",
      contentType: "application/json; charset=utf-8",
      success: function(res){
        console.log(res);
      }
    })
});
cart.find(".remove").click(function(){
    $.ajax({
      type:"POST",
      url:"<?= urlgen("/public/api/cart")?>",
      data:JSON.stringify({
        type:"remove",
        id:<?= $item->id?>,
      }),
      dataType:"json",
      contentType: "application/json; charset=utf-8",
      success: function(res){
        console.log(res);
      }
    })
});
cart.find(".clear").click(function(){
    $.ajax({
      type:"POST",
      url:"<?= urlgen("/public/api/cart")?>",
      data:JSON.stringify({
        type:"clear",
      }),
      dataType:"json",
      contentType: "application/json; charset=utf-8",
      success: function(res){
        console.log(res);
      }
    })
});
</script>