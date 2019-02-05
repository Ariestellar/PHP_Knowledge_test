<?php foreach ($allQuestions as $key => $value):if($value != 0):?>
<table border="2" width="60%">
  <tr>
    <th><a href='<?php echo $key+1;?>'>Вопрос№<?php echo $key+1; ?></a></th>
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
<?php endif;endforeach;?>
