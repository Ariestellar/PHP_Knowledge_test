<?php
session_start();
function __autoload($nameClass)
{
  if($nameClass == 'M_DB'){
    require_once("./m/{$nameClass}.php");
  }else{
    require_once("./c/{$nameClass}.php");
  }
}

//$urlinfo=$_SERVER['REQUEST_URI'];
//$urlparts
var_dump($_GET);

//$action=;
//$controller=;


switch($_GET['c'])
{
  case 'page':
  $content=new C_Page();
  break;
  case 'test':
  //session_start();
  $content=new C_Test();
  break;
  default:
  $content=new C_Page();
  break;
}
$action='Action_';
$action.=(isset($_GET['act']))?$_GET['act']:'index';
$content->Request($connection,$action);
?>
