<?php
require_once 'components/db_connect.php';
require_once 'm/model.php';
function __autoload($nameClass)
{
  require_once("./c/{$nameClass}.php");
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
