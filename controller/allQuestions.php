<?php
require_once('../components/db_connect.php');
$allQuestions=array();
foreach($connection->query("SELECT * FROM questions") as $row)
{
  $allQuestions[]=array('id'=> $row['id'],'title'=>$row['title'],'question'=>$row['question'],'answer'=>$row['answer']);
};
require_once('../view/v_allQuestions.php');

?>
