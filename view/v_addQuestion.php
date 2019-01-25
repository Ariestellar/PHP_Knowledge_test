<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Добавление вопроса</title>
  </head>

  <body>
    <a href="../controller/allQuestions.php">НАЗАД</a>
    <h1>Добавить вопрос</h1>
    <form method="POST">
      <p>Заглавие вопроса:</p>
      <input type="text" name="title">
      <p>Текст вопроса:</p>
      <textarea name="question" cols="40" rows="3"></textarea>
      <p>Текст ответа:</p>
      <textarea name="answer" cols="40" rows="3"></textarea>
      <p><input type="submit" value="Добавить"></p>
    </form>


  </body>
</html>
