<?php
require_once('../components/db_connect.php');
require_once('../model/workdb.php');
$allQuestions=allQuestions($connection);
require_once('../view/v_allQuestions.php');
if(isset($_POST)&& $_POST!=''){
  deleteDB($_POST['del'],$connection);
}
?>
