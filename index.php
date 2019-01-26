<?php
require_once('model/workDB.php');
$title="Главная";
$content=template('view/index.php');
$page=template('view/template.php',array('title'=>$title,'content'=>$content));
echo $page;
?>
