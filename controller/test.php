<?php
require_once('../components/db_connect.php');
require_once('../model/workDB.php');
$allQuestions=allQuestions($connection);
$randQuestion=rand(0,count($allQuestions)-1);
$title='Тест';
$content=template('../view/test.php',array('allQuestions'=>$allQuestions,'randQuestion'=>$randQuestion));
$page=template('../view/template.php',array('title'=>$title,'content'=>$content));
echo $page;
?>
