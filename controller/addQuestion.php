<?php
require_once('../components/db_connect.php');
require_once("../model/workDB.php");
$title='Добавить вопрос';
$content=template('../view/addQuestion.php');
$page=template('../view/template.php',array('title'=>$title,'content'=>$content));
echo $page;
if(isset($_POST) && $_POST['title']!=''){
  addDB($_POST,$connection);
}
?>
