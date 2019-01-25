<?php
require_once('../components/db_connect.php');
require_once('../model/workDB.php');
$allQuestions=allQuestions($connection);
$randQuestion=rand(0,count($allQuestions)-1);
//echo $randQuestion;
session_start();
$_SESSION['testAnswer']=array();
require_once('../view/v_test.php');
if(isset($_POST) && $_POST['next']!=''){

}
?>
