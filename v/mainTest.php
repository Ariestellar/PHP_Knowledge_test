<?php
if(!$_POST)
{
  $_POST['q']=0;
}
?>
<form method="post" action="<?php echo $url;?>">
<h2>Вопрос№<?php echo $_POST['q']+1;?> из <?php echo count($_SESSION['question'])."<br>".$_SESSION['question'][$_POST['q']];?></h2>
<p>Выберите правильный ответ</p>
<div>
  <input type="radio" name="question" value="right">Правильный<br>
  <input type="radio" name="question" value="wrong">Неправильный<br>
  <input type="radio" name="question" value="wrong">Неправильный<br>
</div>
<div>
  <p><button type="submit" name="q" value ='<?php echo $count=1+$_POST['q'];?>'><?php echo $but;?></button></p>
</div>
</form>
