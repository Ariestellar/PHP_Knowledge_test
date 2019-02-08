<?php
session_start();
if(!empty($_POST['cookie']))
{
  setcookie('user',$_POST['email'],time()+3600);
  setcookie('password',$_POST['password'],time()+3600);
}
if(!empty($_POST['exitUser']))
{
  setcookie('user',$_COOKIE['user'],time()-3600);
  setcookie('password',$_COOKIE['password'],time()-3600);
  unset($_SESSION['username']);
  unset($_POST['cookie']);
  unset($_POST['exitUser']);
  header("Location: http://myproject.loc/PHPtest/PHP_Knowledge_test/users/auth");
}

if((isset($_COOKIE['user'])&&!empty($_COOKIE['user'])) && empty($_SESSION['username']))
{
  //$_SESSION['username']=$_COOKIE['user'];
}

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

$controller = isset($params[0])?array_shift($params):'Users';
$action = isset($params[0])?array_shift($params):'auth';


$controller='C_'.ucfirst($controller);
$action='Action_'.$action;
$content= new $controller();

$content->Request($connection,$action,$params);
?>
