<?php
$countRight=0;
$numQuestion=0;


?>
<?php// var_dump ($listQuestion);?>
<p><?php //echo $listQuestion[];?></p>
<form method="post" action="index.php?c=test&act=test">
  <p>Выберите правильный ответ</p>
  <div>
    <input type="radio" name="question" value="right">Правильный<br>
    <input type="radio" name="question" value="wrong">Неправильный<br>
    <input type="radio" name="question" value="wrong">Неправильный<br>
  </div>
  <div>
    <p><button type="submit" name="go" value ='1'>Далее</button></p>
  </div>
</form>
