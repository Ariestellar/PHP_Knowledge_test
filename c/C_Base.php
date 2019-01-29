<?php
abstract class C_Base extends Controller
{
  public $content;
  public $title;
  public function before()
  {
    $this->title='Портал:';
    $this->content='';
  }

  public function render()
  {
    $params=array('title'=>$this->title,'content'=>$this->content);
    $page=$this->Template('v/main.php',$params);
    echo $page;
  }
}
