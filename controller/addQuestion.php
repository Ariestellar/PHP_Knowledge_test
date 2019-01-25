<?php
require_once("../view/v_addQuestion.php");
require_once("../components/db_connect.php");
if(isset($_POST) && $_POST['title']!=''){  
  $connection->query("INSERT INTO questions (title,question,answer) VALUES ('$_POST[title]','$_POST[question]','$_POST[answer]')");
}

?>
