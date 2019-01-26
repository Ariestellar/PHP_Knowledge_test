<?php
require_once('../components/db_connect.php');
require_once('../model/workdb.php');
if(isset($_POST)&& $_POST!=''){
  deleteDB($_POST['del'],$connection);
}
$allQuestions=allQuestions($connection);
$title='Все вопросы.';
$content=template('../view/allQuestions.php',array('allQuestions'=>$allQuestions));
$page=template('../view/template.php',array('title'=>$title,'content'=>$content));
echo $page;
?>
