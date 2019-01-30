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
    if(!$_SESSION['question'])
    {
      $this->allQuestion=$connect->allSelect();
      $this->numListQuestion=array_rand($this->allQuestion,3);
      foreach ($this->numListQuestion as $value) {
        $_SESSION['question'][]=$this->allQuestion[$value]['question'];
        $_SESSION['answer'][]=$this->allQuestion[$value]['answer'];
      }
    }
    $this->content=$this->template('./v/test.php');
  }

  public function Action_done()
  {
    $this->title.='Вы прошли ТЕСТ';
    $rightAnswer=$_SESSION['right'];
    $wrongAnswer=$_SESSION['wrong'];
    $this->content=$this->template('./v/test.php',['rightAnswer'=>$rightAnswer,'wrongAnswer'=>$wrongAnswer]);
  }

  public function before()
  {
    if($this->isPOST())
    {
      if($_POST['question'] == 'right')
      {
      $_SESSION['right'] +=1;
      }else{
      $_SESSION['wrong'] +=1;
      }

      //echo ;
    }
  }
}
