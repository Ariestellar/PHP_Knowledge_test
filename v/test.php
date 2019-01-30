<?php
if(!$_POST)
{
  $_POST['q']=0;
}
?>
<?php if(count($_SESSION['question']) > $_POST['q']+1):?>
<h2>Вопрос№<?php echo $_POST['q']+1;?> из <?php echo count($_SESSION['question']) ?> </h2>
<p><?php echo $_SESSION['question'][$_POST['q']];?></p>
<form method="post" action="">
  <p>Выберите правильный ответ</p>
  <div>
    <input type="radio" name="question" value="right">Правильный<br>
    <input type="radio" name="question" value="wrong">Неправильный<br>
    <input type="radio" name="question" value="wrong">Неправильный<br>
  </div>
  <div>
    <p><button type="submit" name="q" value ='<?php echo $count=1+$_POST['q'];?>'>Далее</button></p>
  <?php elseif(count($_SESSION['question']) == $_POST['q']+1):?>
  <h2>Вопрос№<?php echo $_POST['q']+1;?> из <?php echo count($_SESSION['question']) ?> </h2>
  <p><?php echo $_SESSION['question'][$_POST['q']];?></p>
  <form method="post" action="index.php?c=test&act=done">
    <p>Выберите правильный ответ</p>
    <div>
      <input type="radio" name="question" value="right">Правильный<br>
      <input type="radio" name="question" value="wrong">Неправильный<br>
      <input type="radio" name="question" value="wrong">Неправильный<br>
    </div>
    <div>
    <p><button type="submit" name="q" value ='<?php echo $count=1+$_POST['q'];?>'>Готово</button></p>
  </div>
</form>
<?php else:?>
  <p>Правильных ответов: <?php echo $rightAnswer?></p>
  <p>Неверных ответов: <?php echo $wrongAnswer?></p>
  <?php
  $_SESSION['question']= NULL;
  $_SESSION['right']= NULL;
  $_SESSION['wrong']= NULL;
  ?>
<?php endif;?>
