<div class="show_user">
<form method="get"> 
  <input type="hidden" name="_url" value="<?=$_GET['_url'] ?>"/>
Должна быть таблица<br>
<h3> найти по логину </h3>    <input name="search_login" value="<?= isset($_GET['search_login'])?$_GET['search_login']: '' ?>"/> 
<button type="submit"> НАЙТИ </button>
</form>
<table  class="show_bd"  cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">№
      </th>
      <th class="th-sm">Login
      </th>
      <th class="th-sm">Email
      </th>
      
    </tr>
  </thead>

  <?php 

while($show=$result->fetch_object() ) 
{
  ?>
  <tr>
    <td><?=$show->id?></td>
    <td><a href="<?= urlgen("/edit_table_user/".$show->id)?>"> <?=$show->login?> </a></td>
    <td><?=$show->email?></td>
</tr> 
  <?php
}
?>
  <tbody>
</div>
