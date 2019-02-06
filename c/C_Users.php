<?php
class C_Users extends C_Base
{
  public function Action_auth()
  {
    $this->title.='Авторизация';
    $connect= M_DB::getInstance();
    $this->content=$this->template('./v/auth.php');
  }
  public function Action_registration()
  {
    $this->title.='Регистрация';
    $connect= M_DB::getInstance();
    $this->content=$this->template('./v/reg.php');
  }
}
