<?php
require_once('../components/db_connect.php');
require_once("../view/v_addQuestion.php");
require_once("../model/workDB.php");
if(isset($_POST) && $_POST['title']!=''){
  addDB($_POST,$connection);
}

?>
