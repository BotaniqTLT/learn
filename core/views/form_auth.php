
<div >
<form class="form_auth" method="post"> 
<input type="hidden" name="type" value="login"/>
    <h3> АВТОРИЗАЦИЯ </h3>
    <p>Логин </p>
    <input type="login" name="login" placeholder="Введите логин"required> 
    <p>Пароль</p>
    <input type="password" name="password" placeholder="Введите пароль"required> <br><br>
    <p>  <a class="btn_reg" href="<?= urlgen("/register")?>">Зарегистрироваться </a></p>
   <button class="button1" type= "submit" > Войти </button>
    <div>
        <a href="#"> Забыли Пароль? </a>
        <p>  Если вы впервые на сайте, заполните, пожалуйста, регистрационную форму.</p>
     
    </div>    
</form>  


</div>