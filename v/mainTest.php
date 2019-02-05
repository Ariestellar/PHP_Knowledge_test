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
  <input type="radio" name="question" value=<?php echo $answer[0]; ?>><?php if($answer[0]=='right'){echo $_SESSION['answer'][$_POST['q']];}elseif($answer[0]=='wrong1'){echo $_SESSION['incorrect_unswer1'][$_POST['q']];}else{echo $_SESSION['incorrect_unswer2'][$_POST['q']];}?><br>
  <input type="radio" name="question" value=<?php echo $answer[1]; ?>><?php if($answer[1]=='right'){echo $_SESSION['answer'][$_POST['q']];}elseif($answer[1]=='wrong1'){echo $_SESSION['incorrect_unswer1'][$_POST['q']];}else{echo $_SESSION['incorrect_unswer2'][$_POST['q']];}?><br>
  <input type="radio" name="question" value=<?php echo $answer[2]; ?>><?php if($answer[2]=='right'){echo $_SESSION['answer'][$_POST['q']];}elseif($answer[2]=='wrong1'){echo $_SESSION['incorrect_unswer1'][$_POST['q']];}else{echo $_SESSION['incorrect_unswer2'][$_POST['q']];}?><br>
</div>
<div>
  <p><button type="submit" name="q" value ='<?php echo $count=1+$_POST['q'];?>'><?php echo $but;?></button></p>
</div>
</form>
