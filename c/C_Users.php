<?php
class C_Users extends C_Base
{
  public function Action_auth()
  {
    $this->title.='Авторизация';
    $connect= M_DB::getInstance();

    if($this->isPOST() && !empty($_POST['email']) && !empty($_POST['password']))
    {
      $user=$connect->searchUsersID($_POST['email']);

      if($_POST['password']==$user['password'])
      {
        $_SESSION['username']=$user['name'];
      }else
      {
        echo "Неверный пароль";
      }
    }else
    {
      echo "Введите email и пароль";
    }
    $this->content=$this->template('./v/auth.php');
  }
  public function Action_registration()
  {
    $this->title.='Регистрация';
    $connect= M_DB::getInstance();
    $email=$connect->searchColumn('email');
    if($this->isPOST() && !in_array($_POST['email'],$email))
    {
      $post['email']=$_POST['email'];
      $post['name']=$_POST['name'];
      $post['login']=$_POST['login'];
      $post['password']=$_POST['password'];
      $connect->insertUsersBD($post);
    }
    $this->content=$this->template('./v/reg.php');
  }

}
