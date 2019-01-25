<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>База вопросов</title>
  </head>
  <body>
    <h1>База вопросов</h1>
    <a href="../index.php">НАЗАД</a>
    <a href="../controller/addQuestion.php">Добавить вопрос</a><br>
<?php foreach ($allQuestions as $value):?>
<table border="2" width="60%">
  <tr>
    <th><?php echo $value['title']; ?></th>
  </tr>
  <tr>
    <td><?php echo $value['question']; ?></td>
  </tr>
  <tr>
    <td><?php echo $value['answer']; ?></td>
  </tr>
</table>
<?php endforeach; ?>
  </body>
</html>
