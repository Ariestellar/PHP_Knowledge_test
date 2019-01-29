<?php
function allQuestions($connection)
{
  foreach($connection->query("SELECT * FROM questions") as $row)
  {
    $allQuestions[]=array('id'=> $row['id'],'title'=>$row['title'],'question'=>$row['question'],'answer'=>$row['answer']);
  }
  return $allQuestions;
}

function addBD($post,$connection)
{
  foreach ($post as $value) {
    $connection->quote($value);
  }
  $allQuestions=allQuestions($connection);
  if($allQuestions[count($allQuestions)-1]['question']!=$post['question']){
    $connection->query("INSERT INTO questions (question,answer) VALUES ('$post[question]','$post[answer]')");
  }
}
function updateBD($post,$connection)
{
  foreach ($post as $value) {
    $connection->quote($value);
  }
  $connection->query("UPDATE questions SET question='$post[question]', answer='$post[answer]' WHERE id='$post[id]'");
  var_dump($post);
}

function deleteDB($post,$connection)
{
  $connection->quote($post);
  $connection->query("DELETE FROM questions WHERE id=$post");
}
