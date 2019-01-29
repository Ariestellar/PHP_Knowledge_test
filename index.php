<?php
function __autoload($nameClass)
{
  if($nameClass == 'M_DB'){
    require_once("./m/{$nameClass}.php");
  }else{
    require_once("./c/{$nameClass}.php");
  }
}
switch($_GET['c'])
{
  case 'page':
  $content=new C_Page();
  break;
  case 'test':
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
