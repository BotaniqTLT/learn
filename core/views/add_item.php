<div>
    личный кабинет <br>
Логин  <?=$user->login ?>  <br>
E-mail <?=$user->email ?>  <br>

<h2 style="color:red;"> <?=$err_message?> </h2> <br>
</div>


<h2> Добавление товара <br><br><br><br>



<div>

<form  enctype="multipart/form-data" id="add_item" method="POST" style="display:block; border: 4px double black;  width:300px ">
<input type="hidden" name="type" value="add_item"/>
Название товара
  <input  name="add_item_name" > </input>  <br><br>
   Описание товара <br>
    <input name="add_item_description">  </input> <br><br>
    Цена товара <br>
    <input name="add_item_price">  </input> <br><br>
    количество товара <br>
    <input name="add_item_count">  </input> <br><br>
    Добавить изображение </br>
    <input name="userfile" type="file" /><br><br>
    <button type="submit" > Добавить товар  </button>  

</form>
</div>


