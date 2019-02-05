<form action="" method="post">
  <p>Текст вопроса</p>
  <textarea name='question' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['question']:'';?></textarea>
  <p>Ответ на вопрос</p>
  <textarea name='answer' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['question']:'';?></textarea>
  <p><input type='submit' value='Добавить' ></p>
</form>
