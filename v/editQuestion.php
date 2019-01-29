<?php echo 'Вопрос№'.$_GET['id'];?>
<form action="index.php?act=edit&id=<?php echo $_GET['id']; ?>" method="post">
  <p>Текст вопроса</p>
  <textarea name='question' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['question']:$allQuestions[$_GET['id']-1]['question'];?></textarea>
  <p>Ответ на вопрос</p>
  <textarea name='answer' cols='40' rows='10'><?php echo (isset($_POST)&&!empty($_POST))?$_POST['answer']:$allQuestions[$_GET['id']-1]['answer']; ?></textarea>
  <p><input type='submit' value='Сохранить' ></p>
</form>
