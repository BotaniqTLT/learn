

<div>
   <h2> личный кабинет</h2> <br>
Логин  <?=$user->login ?>  <br>
E-mail <?=$user->email ?>  <br><br><br>


Изменить Пароль<br>
<h2 style="color:red;"> <?=$err_message?> </h2> <br>
</div>






<form id="update_password"  method="POST" style="display:none; border: 4px double black; height:200px; width:300px " >
    <input type="hidden" name="type" value="update_password"/>
    Введите старый пароль<br>
    <input  name="old_password" > </input>  <br><br>
    Введите новый пароль<br>
    <input name="new_password">  </input> <br><br>
    Подтвердите пароль<br>
    <input name="new_password1">  </input> <br><br>
    <button type="submit" > ОК </button> 
</form>

<div>
<button OnClick="openForm()"> Сменить пароль </button>
</div>
<script type="text/javascript">
function openForm() {
    document.getElementById("update_password").style.display = "block"; }
</script>
<a href="<?=urlgen("/add_item") ?>"> <div class="button1"> добавить товар </div> </a> <br></a>
<a href="<?=urlgen("/edit_table_user") ?>"> <div class="button1"> редактиовать данные</div> </a> <br></a>
   




<div style="margin-top:60px ">
   <a href="<?=urlgen("/logout")?>"> <div class="button1"> выйти </div> </a> <br>
 
</div>

