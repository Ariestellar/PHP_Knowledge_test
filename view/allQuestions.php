<a href="../index.php">НАЗАД</a>
<a href="../controller/addQuestion.php">Добавить вопрос</a><br>
<?php foreach ($allQuestions as $value):if($value != 0):?>
<table border="2" width="60%">
  <tr>
    <th>Вопрос№<?php echo $value['id']; ?></th>
  </tr>
  <tr>
    <td><?php echo $value['question']; ?></td>
  </tr>
  <tr>
    <td><?php echo $value['answer']; ?></td>
  </tr>
  <tr>
    <td><form method="post"><input type='hidden' name='del' value='<?php echo $value["id"] ?>'/><input type="submit" value="Удалить"></form></td>
  </tr>
</table>
<?php endif;endforeach; var_dump($_POST);?>
