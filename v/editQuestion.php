<?php echo 'Вопрос№'.$numQuestions;?>
<form action="<?php echo $numQuestions;?>" method="post">
  <p>Текст вопроса</p>
  <textarea name='question' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['question']:$allQuestions[$numQuestions-1]['question'];?></textarea>
  <p>Правильный вариант ответа на вопрос</p>
  <textarea name='answer' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['answer']:$allQuestions[$numQuestions-1]['answer']; ?></textarea>
  <p>Неправильные варианты ответа на вопрос:</p>
  <textarea name='incorrect_unswer1' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['incorrect_unswer1']:$allQuestions[$numQuestions-1]['incorrect_unswer1']; ?></textarea>
  <textarea name='incorrect_unswer2' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['incorrect_unswer2']:$allQuestions[$numQuestions-1]['incorrect_unswer2']; ?></textarea>
  <input type='hidden' name='id' value='<?php echo $allQuestions[$numQuestions-1]['id'];?>' >
  <p><input type='submit' value='Сохранить'><?php
  if(isset($_POST['question']))
  {
    echo ' СОХРАНЕННО'."<br>";
  }
  ?></p>
</form>
