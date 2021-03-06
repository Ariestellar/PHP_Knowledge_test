<?php
class C_Test extends C_Base
{
  public $allQuestion;
  public $numListQuestion;
  public $listQuestion;

  public function Action_start()
  {
    $this->title.='Тест';
    $answer=['right','wrong1','wrong2'];
    shuffle($answer);
    $connect=M_DB::getInstance();
    if(!$_SESSION['question'])
    {
      $this->allQuestion=$connect->allSelect();
      $this->numListQuestion=array_rand($this->allQuestion,3);
      foreach ($this->numListQuestion as $value) {
        $_SESSION['question'][]=$this->allQuestion[$value]['question'];
        $_SESSION['answer'][]=$this->allQuestion[$value]['answer'];
        $_SESSION['incorrect_unswer1'][]=$this->allQuestion[$value]['incorrect_unswer1'];
        $_SESSION['incorrect_unswer2'][]=$this->allQuestion[$value]['incorrect_unswer2'];
      }
    }
    if(count($_SESSION['question']) > $_POST['q']+1)
    {
       $url='';
       $but='Далее';
    }elseif(count($_SESSION['question']) == $_POST['q']+1)
    {
      $url='/PHPtest/PHP_Knowledge_test/test/done';
      $but='Готово';
    }
    $pageTest=$this->template('./v/mainTest.php',['url'=>$url,'but'=>$but,'answer'=>$answer]);
    $this->content=$this->template('./v/test.php',['pageTest'=>$pageTest]);
  }

  public function Action_done()
  {
    $done=1;
    $this->title.='Результаты теста:';
    $rightAnswer=$_SESSION['right'];
    $wrongAnswer=$_SESSION['wrong'];
    $questionWrong=$_SESSION['questionWrong'];
    session_unset();
    $this->content=$this->template('./v/test.php',['rightAnswer'=>$rightAnswer,'wrongAnswer'=>$wrongAnswer,'questionWrong'=>$questionWrong,'done'=>$done]);
  }

  public function before()
  {
    if($this->isPOST())
    {
      if($_POST['question'] == 'right')
      {
      $_SESSION['right'] +=1;
    }elseif($_POST['question'] == 'wrong1'||$_POST['question'] == 'wrong2')
      {
      $_SESSION['questionWrong'][] = $_SESSION['question'][$_POST['q']-1];
      $_SESSION['wrong'] +=1;
      }
    }
  }
}
