<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ТЕСТ</title>
  </head>
  <body>
    <a href="../index.php">НАЗАД</a>
    <h1>ТЕСТ</h1>
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
  </body>
</html>
