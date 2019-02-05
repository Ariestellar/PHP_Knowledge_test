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

$url_info=$_SERVER['REQUEST_URI'];
$url_parts=explode('/',$url_info);
$params=[];
foreach ($url_parts as $v)
{
  if( $v!='index.php' && $v!='' && $v!='PHPtest' && $v!='PHP_Knowledge_test')
  {
    $params[]=$v;
  }
}

$controller = isset($params[0])?array_shift($params):'Page';
$action = isset($params[0])?array_shift($params):'index';

$controller='C_'.ucfirst($controller);
$action='Action_'.$action;
$content= new $controller();
var_dump($controller);
var_dump($action);

$content->Request($connection,$action,$params);
?>
