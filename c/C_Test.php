<?php
class C_Test extends C_Base
{
  public $allQuestion;
  public $numListQuestion;
  public $listQuestion;

  public function Action_start()
  {
    $this->title.='Тест';
    $connect=M_DB::getInstance();
    $this->allQuestion=$connect->allSelect();
    $this->numListQuestion=array_rand($this->allQuestion,3);
    //var_dump($this->numListQuestion);
    foreach ($this->numListQuestion as $value)
    {
      $this->listQuestion[] = $this->allQuestion[$value]['question']."<br>";
    }
    $this->content=$this->template('./v/test.php',['listQuestion'=> $this->listQuestion]);
  }
  public function Action_test()
  {
    if(isset($_POST))
    {
      var_dump($_POST);
      if($_POST['question']=='right')
      {
        echo $countRight++;
      }
      if($_POST['go']=='')
      {
        echo $numQuestion++;
      }
    }
    $this->content=$this->template('./v/test.php');
  }
}
