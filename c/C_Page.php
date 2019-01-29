<?php
class C_Page extends C_Base
{
  //Действие просмотр всех вопросов
  public function Action_index()
  {
    $this->title.='Все вопросы';
    if($this->isPOST())
    {
      $post=$_POST['del'];
      deleteDB($post,$this->connection);
    }
    $this->allQuestions=allQuestions($this->connection);
    $this->content=$this->template('./v/pageQuestions.php',['allQuestions'=>$this->allQuestions]);
  }
  public function Action_edit()
  {
    $this->title.='Редактирование';
    $this->allQuestions=allQuestions($this->connection);
    if($this->isPOST())
    {
      $post['id']=$_GET['id'];
      $post['question']=$_POST['question'];
      $post['answer']=$_POST['answer'];
      updateBD($post,$this->connection);
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
      addBD($post,$this->connection);
    }
    $this->content=$this->template('./v/addQuestion.php');
  }
}
