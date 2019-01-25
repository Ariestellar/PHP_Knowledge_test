<?php
function allQuestions($connection){
  foreach($connection->query("SELECT * FROM questions") as $row)
  {
    $allQuestions[]=array('id'=> $row['id'],'title'=>$row['title'],'question'=>$row['question'],'answer'=>$row['answer']);
  };
return $allQuestions;
};
function addDB($post,$connection){
  foreach ($post as $value) {
    $connection->quote($value);
  }
  $allQuestions=allQuestions($connection);
  if($allQuestions[count($allQuestions)-1]['question']!=$post['question']){
    $connection->query("INSERT INTO questions (title,question,answer) VALUES ('$post[title]','$post[question]','$post[answer]')");
  }
}
function deleteDB($id_question,$connection){
  $connection->query("DELETE FROM questions WHERE id=$id_question");
}

?>
