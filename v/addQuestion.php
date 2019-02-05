<form action="" method="post">
  <p>Текст вопроса</p>
  <textarea name='question' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['question']:'';?></textarea>
  <p>Правильный вариант ответа на вопрос</p>
  <textarea name='answer' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['answer']:'';?></textarea>
  <p>Неправильные варианты ответа на вопрос:</p>
  <textarea name='incorrect_unswer1' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['incorrect_unswer1']:'';?></textarea>
  <textarea name='incorrect_unswer2' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['incorrect_unswer2']:'';?></textarea>
  <p><input type='submit' value='Добавить' ></p>
</form>
