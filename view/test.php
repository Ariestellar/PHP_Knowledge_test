<a href="../index.php">НАЗАД</a>
<p>Вопрос№1из10</p>
<p><?php echo $allQuestions[$randQuestion]['question']?></p>
<p><?php echo $allQuestions[$randQuestion]['answer']?></p>
<form method="POST">
  <p>Выберите правильный ответ</p>
  <div>
    <input type="radio" name="question" value="right">Правильный<br>
    <input type="radio" name="question" value="wrong">Неправильный<br>
    <input type="radio" name="question" value="wrong">Неправильный<br>
  </div>
  <div>
    <p><button type="Submit">Готово</button></p>
  </div>
</form>
