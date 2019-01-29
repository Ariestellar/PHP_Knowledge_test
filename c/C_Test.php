<?php
class C_Test extends C_Base
{
  public function Action_start()
  {
    $this->title.='Тест';
    $this->content=$this->template('./v/test.php');
  }
}
