<?php
class C_Page extends C_Base
{
  //Действие просмотр всех вопросов
  public function Action_index()
  {
    $this->title.='Все вопросы';
    $connect= M_DB::getInstance();
    if($this->isPOST())
    {
      $post=$_POST['del'];
      $connect->deleteDB($post);
    }
    $this->allQuestions=$connect->allSelect();
    $this->content=$this->template('./v/pageQuestions.php',['allQuestions'=>$this->allQuestions]);
  }
  public function Action_edit()
  {
    $this->title.='Редактирование';
    $connect= M_DB::getInstance();
    $this->allQuestions=$connect->allSelect();
    if($this->isPOST())
    {
      $post['id']=$_GET['id'];
      $post['question']=$_POST['question'];
      $post['answer']=$_POST['answer'];
      $connect->updateBD($post);
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
      $connect= M_DB::getInstance();
      $connect->insertBD($post);
    }
    $this->content=$this->template('./v/addQuestion.php');
  }
}
