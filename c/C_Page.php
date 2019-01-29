<?php
class C_Page extends C_Base
{
  //Действие просмотр всех вопросов
  public function Action_index()
  {
    $this->title.='Все вопросы';
    $x= M_DB::getInstance();
    if($this->isPOST())
    {
      $post=$_POST['del'];
      $x->deleteDB($post);
    }
    $this->allQuestions=$x->allSelect();
    $this->content=$this->template('./v/pageQuestions.php',['allQuestions'=>$this->allQuestions]);
  }
  public function Action_edit()
  {
    $this->title.='Редактирование';
    $x= M_DB::getInstance();
    $this->allQuestions=$x->allSelect();
    if($this->isPOST())
    {
      $post['id']=$_GET['id'];
      $post['question']=$_POST['question'];
      $post['answer']=$_POST['answer'];
      $x->updateBD($post);
    }
    $this->content=$this->template('./v/editQuestion.php',['allQuestions'=>$this->allQuestions]);
  }

  public function Action_addQuestion()
  {
    $this->title.='Добавить вопрос';
    if($this->isPOST())
    {
      $post['question']=$_POST['question'];
      $post['answer']=$_POST['answer'];
      //addBD($post,$this->connection);
      $x= M_DB::getInstance();
      $x->insertBD($post);
    }
    $this->content=$this->template('./v/addQuestion.php');
  }
}
