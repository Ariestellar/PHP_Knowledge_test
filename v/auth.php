<?php if((isset($_COOKIE['user'])&&!empty($_COOKIE['user']))||isset($_SESSION['username'])&&!empty($_SESSION['username'])):?>
Сессия: <?php echo $_SESSION['username'];?><br>
Кука:<?php echo $_COOKIE['user'];?><br>
Пост:<?php echo $_POST['exitUser'];?><br>
<form action="" method="post">
<input type="submit" value="Выйти" name="exitUser">
</form>
<?php else:?>
<form action="" method="post">
  <p>Email</p>
  <input type="text" name="email" >
  <p>Пароль</p>
  <input type="text" name="password" >
  <p>Запомнить меня<input type="checkbox" name="cookie"></p>
  <input type="submit" value="Войти">
</form>
<?php endif;?>
